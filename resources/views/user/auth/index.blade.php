@extends('adminlte::page')

@section('title', __('page.titles.users-index'))

@section('content_header')
@stop

@section('content')
   {{-- Permisson: Registered User (Company) --}}
   @can('is_user_company')
   <div class="row">
       <div class="col m-3">
           {{-- Card --}}
           <div class="card card-info">
               {{-- Card Header --}}
               <div class="card-header">
                   <div class="d-flex justify-content-between">
                       {{-- Return: Home --}}
                       <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.home') }}">
                            <i class="fas fa-home fa-lg"></i>
                       </a>
                       {{-- Card Title --}}
                       <h3 class="card-title">
                           <i class="fas fa-users fa-lg"></i></i>&nbsp;&nbsp;&nbsp;
                           {{ __('users.index-dep-title') }} - {{ $department->department_name }}
                       </h3>
                       <div></div>
                   </div>
               </div>
               {{-- /.Card Header --}}

               {{-- Card Body --}}
               <div class="card-body">
                   {{-- Page Tooltip --}}
                   <div class="row">
                       <div class="col mb-3">
                           <i class="far fa-question-circle text-info fa-lg" data-toggle="tooltip"
                           data-placement="right" title="{{ __('users.tip-dep-index') }} {{ $department->department_name }}"></i>
                       </div>
                   </div>
                   {{-- /.Page Tooltip --}}

                   {{-- Table --}}
                   <table class="table table-hover table-responsive-md" id="usersTable">
                       {{-- Table Head --}}
                       <thead class="text-center">
                            <tr>
                                <th scope="col">{{ __('users.th-collaborator') }}</th>
                                <th scope="col">{{ __('users.th-profession') }}</th>
                                <th scope="col">{{ __('users.th-email') }}</th>
                                <th scope="col">{{ __('users.th-phone') }}</th>
                            </tr>
                        </thead>
                       {{-- /.Table Head --}}
                       {{-- Table Body --}}
                       <tbody class="text-center">
                           @foreach ($users as $user)
                           <tr>
                               <td>
                                    @if ($user->user_image_id == 1)
                                    {{-- Default User Image --}}
                                    <img src="{{ asset('images/default/'. $user->userImage->image_name) }}"
                                    class="user-image img-circle elevation-2"
                                    alt="{{ __('users.alt-picture') }}" width="35" height="35">
                                    {{-- /.Default User Image --}}
                                    @else
                                    {{-- Custom User Image --}}
                                    <img src="{{ asset('storage/users/'. $user->userImage->image_name) }}"
                                    class="user-image img-circle elevation-2"
                                    alt="{{ __('users.alt-picture') }}" width="35" height="35">
                                    {{-- /.Custom User Image --}}
                                    @endif
                                    &nbsp;&nbsp;
                                    {{-- User Name --}}
                                    {{ $user->first_name }} {{ $user->last_name }}
                                    &nbsp;
                                    {{-- User Departmanent Responsible --}}
                                    @if ($user->user_role_id == 3)
                                    <i class="fas fa-user-tie text-info fa-lg" data-toggle="tooltip"
                                    data-placement="right" title="{{ __('users.tip-dep-responsible') }}"></i>
                                    @endif
                                    <td>{{ $user->profession }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                               </td>
                           </tr>
                           @endforeach
                       </tbody>
                       {{-- /.Table Body --}}
                       {{-- Table Footer --}}
                       <tfoot class="text-center">
                            <tr>
                                <th>{{ __('users.th-collaborator') }}</th>
                                <th>{{ __('users.th-profession') }}</th>
                                <th>{{ __('users.th-email') }}</th>
                                <th>{{ __('users.th-phone') }}</th>
                            </tr>
                       </tfoot>
                       {{-- /.Table Footer --}}
                   </table>
                   {{-- /.Table --}}

               </div>
               {{-- /.Card Body --}}
           </div>
           {{-- /.Card --}}
       </div>
   </div>
   @endcan
   {{-- /.Permisson: Registered User (Company) --}}
@stop

@section('css')
    <link rel="stylesheet" href="{{ url('/css/my_style.css') }}">
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#usersTable').DataTable({
                /*
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },*/
                columnDefs: [
                    { orderable: false, targets: 1 }
                ]
            });
        });
    </script>
@stop
