@extends('adminlte::page')

@section('title', __('page.titles.users-index'))

@section('content_header')

@stop

@section('content')
    {{-- Permisson: Administrator --}}
    @can('is_admin')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header d-flex justify-content-between">
                    {{-- Return: Users Management --}}
                    <a href="{{ url('/users/menu') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.users-menu') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title">
                        <i class="fas fa-users fa-lg"></i></i>&nbsp;&nbsp;&nbsp;
                        {{ __('users.index-title') }}
                    </h3>
                </div>
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg" data-toggle="tooltip"
                            data-placement="right" title="{{ __('users.tip-index') }}"></i>
                        </div>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="usersTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <tr>
                                <th scope="col">{{ __('users.th-name-image') }}</th>
                                <th scope="col">{{ __('users.th-email') }}</th>
                                <th scope="col">{{ __('users.th-phone') }}</th>
                                <th scope="col">{{ __('users.th-department') }}</th>
                                <th scope="col">{{ __('users.th-management') }}</th>
                            </tr>
                        </thead>
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
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->department->department_name }}</td>
                                    {{-- User Management --}}
                                    <td>
                                        <div class="row">
                                            <div  class="col-md-4 mb-1">
                                                {{-- Show User --}}
                                                <a class="btn bg-gradient-success btn-sm" href="{{ url('/users/show/'.$user->id) }}" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="{{ __('users.tip-show-btn') }}">
                                                    <i class="far fa-address-book"></i>
                                                </a>
                                                {{-- /.Show User --}}
                                            </div>
                                            <div  class="col-md-4 mb-1">
                                                {{-- Edit User --}}
                                                <a class="btn bg-gradient-warning btn-sm" href="{{ url('/users/edit/'.$user->id) }}" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="{{ __('users.tip-edit-btn') }}">
                                                    <i class="fas fa-user-edit"></i>
                                                </a>
                                                {{-- /.Edit User --}}
                                            </div>
                                            <div  class="col-md-4 mb-1">
                                                {{-- Delete User --}}
                                                <span data-toggle="modal" data-target="#deleteUser-{{ $user->id }}">
                                                    <button type="button" class="btn bg-gradient-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="bottom" title="{{ __('users.tip-delete-btn') }}">
                                                        <i class="fas fa-user-times"></i>
                                                    </button>
                                                </span>
                                                {{-- /.Delete User --}}
                                            </div>
                                        </div>

                                        {{-- Delete User Modal --}}
                                        <div class="modal fade" id="deleteUser-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    {{-- Modal Header --}}
                                                    <div class="modal-header bg-danger text-center">
                                                        <h5 class="modal-title w-100" id="deleteModalLabel">
                                                            <i class="fas fa-user-times"></i>&nbsp;&nbsp;&nbsp;
                                                            {{ __('users.delete-title') }}
                                                        </h5>
                                                    </div>
                                                    {{-- /.Modal Header --}}
                                                    {{-- Modal Body --}}
                                                    <div class="modal-body">
                                                        <div class="text-left">
                                                            <div class="row">
                                                                <i class="far fa-question-circle text-danger fa-lg"
                                                                data-toggle="tooltip" data-placement="right"
                                                                title="{{ __('users.tip-delete') }}"></i>&nbsp;&nbsp;
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><i class="far fa-address-card fa-lg text-danger"></i>&nbsp;<b>{{ __('users.label-name') }}</b></p>
                                                                <p>{{ $user->first_name }} {{ $user->last_name }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-envelope fa-lg text-danger"></i>&nbsp;<b>{{ __('users.label-email') }}</b></p>
                                                                <p> {{ $user->email }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-phone-alt fa-lg text-danger"></i>&nbsp;<b>{{ __('users.label-phone') }}</b></p>
                                                                <p>{{ $user->phone }}</p>
                                                            </div>
                                                                <div class="col-md-6">
                                                                <p><i class="far fa-building fa-lg text-danger"></i>&nbsp;<b>{{ __('users.label-company') }}</b></p>
                                                                <p>{{ $user->company->company_name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-user-tie fa-lg text-danger"></i>&nbsp;<b>{{ __('users.label-department') }}</b></p>
                                                                <p>{{ $user->department->department_name }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-users-cog fa-lg text-danger"></i>&nbsp;<b>{{ __('users.label-role') }}</b></p>
                                                                <p>{{ $user->userRole->role_name }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- /.Modal Body --}}
                                                    {{-- Confirm/Cancel --}}
                                                    <div class="modal-footer">
                                                        <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/users/delete/'.$user->id) }}" role="button">
                                                            <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.confirmBtn') }}
                                                        </a>
                                                        <button type="button" class="btn bg-gradient-danger btn-sm" data-dismiss="modal">
                                                            <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.cancelBtn') }}
                                                        </button>
                                                    </div>
                                                    {{-- /.Confirm/Cancel --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Delete User Modal --}}
                                    </td>
                                    {{-- /.User Management --}}
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- Table Footer --}}
                        <tfoot class="text-center">
                                <th scope="col">{{ __('users.th-name-image') }}</th>
                                <th scope="col">{{ __('users.th-email') }}</th>
                                <th scope="col">{{ __('users.th-phone') }}</th>
                                <th scope="col">{{ __('users.th-department') }}</th>
                                <th scope="col">{{ __('users.th-management') }}</th>
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
    {{-- /.Permisson: Administrator --}}
@endsection

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
                    { orderable: false, targets: 4 }
                ]
            });
        });
    </script>
@stop
