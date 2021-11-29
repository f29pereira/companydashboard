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
                    <a href="{{ url('/users/menu') }}" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.goTo.user-menu') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="fas fa-users-cog fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('card.roles.title-index') }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg" data-toggle="tooltip" data-placement="right"
                         title="{{ __('tooltip.roles.index') }}"></i>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="rolesTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Ação</th>
                                <th scope="col">
                                    <i class="far fa-question-circle text-info fa-lg"
                                    data-toggle="tooltip" data-placement="top" title="{{ $roles[0]->role_description }}"></i>
                                    &nbsp;Administrador
                                </th>
                                <th scope="col">
                                    <i class="far fa-question-circle text-info fa-lg"
                                    data-toggle="tooltip" data-placement="top" title="{{ $roles[3]->role_description }}"></i>
                                    Colaborador
                                </th>
                            </tr>
                        </thead>
                        {{-- Table Body --}}
                        <tbody class="text-center">
                            <tr>
                                <td>Consultar meu perfil</td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>Editar meu perfil</td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>Consultar permissões de utilizador</td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>Gerir utilizadores registados</td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>Gerir empresas registadas</td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                            <tr>
                                <td>Gerir departamentos registadas</td>
                                <td><i class="fas fa-check-circle text-success fa-lg"></i></td>
                                <td><i class="fas fa-times-circle text-danger fa-lg"></i></td>
                            </tr>
                        </tbody>
                        {{-- Table Footer --}}
                        <tfoot class="text-center">
                            <tr>
                                <th>Ação</th>
                                <th>Administrador</th>
                                <th>Colaborador</th>
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
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },
                columnDefs: [
                    { orderable: false, targets: [1,2] }
                ]
            });
        });
    </script>
@stop
