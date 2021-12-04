@extends('adminlte::page')

@section('title', 'Utilizadores')

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
                        {{ __('page.users.index-title') }}
                    </h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg" data-toggle="tooltip"
                            data-placement="right" title="{{ __('page.users.tip-index') }}"></i>
                        </div>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="usersTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <tr>
                                <th scope="col">{{ __('page.users.th-name') }}</th>
                                <th scope="col">{{ __('page.users.th-email') }}</th>
                                <th scope="col">{{ __('page.users.th-phone') }}</th>
                                <th scope="col">{{ __('page.users.th-department') }}</th>
                                <th scope="col">{{ __('page.users.th-management') }}</th>
                            </tr>
                        </thead>
                        {{-- Table Body --}}
                        <tbody class="text-center">
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->department->department_name }}</td>
                                    <td>
                                        <div class="row">
                                            <div  class="col-md-4 mb-1">
                                                {{-- Show User --}}
                                                <a class="btn bg-gradient-success btn-sm" href="{{ url('/users/show/'.$user->id) }}" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="{{ __('page.users.tip-show-btn') }}">
                                                    <i class="far fa-address-book"></i>
                                                </a>
                                            </div>
                                            <div  class="col-md-4 mb-1">
                                                {{-- Edit User --}}
                                                <a class="btn bg-gradient-warning btn-sm" href="{{ url('/users/edit/'.$user->id) }}" role="button"
                                                    data-toggle="tooltip" data-placement="bottom" title="{{ __('page.users.tip-edit-btn') }}">
                                                    <i class="fas fa-user-edit"></i>
                                                </a>
                                            </div>
                                            <div  class="col-md-4 mb-1">
                                                {{-- Delete User --}}
                                                <span data-toggle="modal" data-target="#deleteUser-{{ $user->id }}">
                                                    <button type="button" class="btn bg-gradient-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="bottom" title="{{ __('page.users.tip-delete-btn') }}">
                                                        <i class="fas fa-user-times"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>

                                        {{-- Delete User Modal --}}
                                        <div class="modal fade" id="deleteUser-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    {{-- Modal Header --}}
                                                    <div class="modal-header bg-danger text-center">
                                                        <h3 class="modal-title w-100" id="deleteModalLabel"><i class="fas fa-user-times"></i></h3>
                                                    </div>
                                                    {{-- Modal Body --}}
                                                    <div class="modal-body">
                                                        <div class="text-left"><p><b>{{ __('page.users.check-delete') }}</b></p></div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><i class="far fa-address-card fa-lg text-danger"></i>&nbsp;<b>{{ __('page.users.label-name') }}</b></p>
                                                                <p>{{ $user->name }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-envelope fa-lg text-danger"></i>&nbsp;<b>{{ __('page.users.label-email') }}</b></p>
                                                                <p> {{ $user->email }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-phone-alt fa-lg text-danger"></i>&nbsp;<b>{{ __('page.users.label-phone') }}</b></p>
                                                                <p>{{ $user->phone }}</p>
                                                            </div>
                                                                <div class="col-md-6">
                                                                <p><i class="far fa-building fa-lg text-danger"></i>&nbsp;<b>{{ __('page.users.label-company') }}</b></p>
                                                                <p>{{ $user->company->company_name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-user-tie fa-lg text-danger"></i>&nbsp;<b>{{ __('page.users.label-department') }}</b></p>
                                                                <p>{{ $user->department->department_name }}</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><i class="fas fa-users-cog fa-lg text-danger"></i>&nbsp;<b>{{ __('page.users.label-role') }}</b></p>
                                                                <p>{{ $user->userRole->role_name }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Confirm/Cancel --}}
                                                    <div class="modal-footer">
                                                        <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/users/delete/'.$user->id) }}" role="button">
                                                            <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.confirmBtn') }}
                                                        </a>
                                                        <button type="button" class="btn bg-gradient-danger btn-sm" data-dismiss="modal">
                                                            <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.cancelBtn') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{-- Table Footer --}}
                            <tfoot class="text-center">
                                <th scope="col">{{ __('page.users.th-name') }}</th>
                                <th scope="col">{{ __('page.users.th-email') }}</th>
                                <th scope="col">{{ __('page.users.th-phone') }}</th>
                                <th scope="col">{{ __('page.users.th-department') }}</th>
                                <th scope="col">{{ __('page.users.th-management') }}</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endcan
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
