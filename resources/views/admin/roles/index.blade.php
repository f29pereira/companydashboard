@extends('adminlte::page')

@section('title', 'Permissões de Utilizador')

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
                    {{-- Return: Users Menu --}}
                    <a href="{{ url('/users/menu') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.users-menu') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title">
                        <i class="fas fa-users-cog fa-lg"></i>&nbsp;&nbsp;&nbsp;
                        {{ __('page.roles.index-title') }}
                    </h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg" data-toggle="tooltip" data-placement="right"
                         title="{{ __('page.roles.tip-index') }}"></i>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="rolesTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <tr>
                                <th scope="col">{{ __('page.roles.th-action') }}</th>
                                <th scope="col">{{ __('page.roles.th-admin') }}</th>
                                <th scope="col">{{ __('page.roles.th-collaborator') }}</th>
                            </tr>
                        </thead>
                        {{-- Table Body --}}
                        <tbody class="text-center">
                            <tr>
                                <td>
                                    {{ __('page.generic.action-show-update-delete') }}
                                    <b>{{ __('page.roles.action-users') }}</b>
                                </td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    {{ __('page.generic.action-crud') }}
                                    <b>{{ __('page.roles.action-companies') }}</b>
                                </td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    {{ __('page.generic.action-create-edit-delete') }}
                                    <b>{{ __('page.roles.action-company_types') }}</b>
                                </td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    {{ __('page.generic.action-create-edit-delete') }}
                                    <b>{{ __('page.roles.action-departments') }}</b>
                                </td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>
                                    {{ __('page.generic.action-show-edit') }}
                                    <b>{{ __('page.roles.action-profile') }}</b>
                                </td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                            </tr>
                        </tbody>
                        {{-- Table Footer --}}
                        <tfoot class="text-center">
                            <tr>
                                <th>{{ __('page.roles.th-action') }}</th>
                                <th>{{ __('page.roles.th-admin') }}</th>
                                <th>{{ __('page.roles.th-collaborator') }}</th>
                            </tr>
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
            $('#rolesTable').DataTable({
                // language:{
                //     url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                // },
                columnDefs: [
                    { orderable: false, targets: [1,2] }
                ]
            });
        });
    </script>
@stop
