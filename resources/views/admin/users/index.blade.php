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
                        <a href="{{ url('/users/menu') }}" data-toggle="tooltip" data-placement="right" title="Gestão Utilizadores">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title"><i class="fas fa-users fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Utilizadores</h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="far fa-question-circle text-info fa-lg" data-toggle="tooltip" data-placement="right" title="Lista de Utilizadores registados no sistema"></i>
                        </div>
                        {{-- Table --}}
                        <table class="table table-hover table-responsive-md" id="usersTable">
                            {{-- Table Head --}}
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Gestão Utilizador</th>
                                </tr>
                            </thead>
                            {{-- Table Body --}}
                            <tbody class="text-center">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            <div class="row">
                                                <div  class="col-md-4">
                                                    {{-- Show User --}}
                                                    <a class="btn bg-gradient-success btn-sm" href="{{ url('/users/show/'.$user->id) }}" role="button"
                                                        data-toggle="tooltip" data-placement="bottom" title="Detalhes Utilizador">
                                                        <i class="far fa-address-book"></i>
                                                    </a>
                                                </div>
                                                <div  class="col-md-4">
                                                    {{-- Edit User --}}
                                                    <a class="btn bg-gradient-warning btn-sm" href="{{ url('/users/edit/'.$user->id) }}" role="button"
                                                        data-toggle="tooltip" data-placement="bottom" title="Editar Utilizador">
                                                        <i class="fas fa-user-edit"></i>
                                                    </a>
                                                </div>
                                                <div  class="col-md-4">
                                                    {{-- Delete User --}}
                                                    <span data-toggle="modal" data-target="#deleteUser-{{ $user->id }}">
                                                        <button type="button" class="btn bg-gradient-danger btn-sm"
                                                            data-toggle="tooltip" data-placement="bottom" title="Eliminar Utilizador">
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
                                                            <div class="text-left"><p><b>Pretende eliminar o utilizador ?</b></p></div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p><i class="far fa-address-card fa-lg text-danger"></i>&nbsp;<b>Nome</b></p>
                                                                    <p>{{ $user->name }}</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><i class="fas fa-envelope fa-lg text-danger"></i>&nbsp;<b>Email</b></p>
                                                                    <p> {{ $user->email }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p><i class="fas fa-phone-alt fa-lg text-danger"></i>&nbsp;<b>Telefone</b></p>
                                                                    <p>{{ $user->phone }}</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><i class="far fa-building fa-lg text-danger"></i>&nbsp;<b>Empresa</b></p>
                                                                    <p>{{ $user->company->company_name }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p><i class="fas fa-user-tie fa-lg text-danger"></i>&nbsp;<b>Departamento</b></p>
                                                                    <p>{{ $user->department->department_name }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/users/delete/'.$user->id) }}" role="button">
                                                                <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;Confirmar
                                                            </a>

                                                            <button type="button" class="btn bg-gradient-danger btn-sm" data-dismiss="modal">
                                                                <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;Cancelar
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
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Gestão Utilizador</th>
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
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },
                columnDefs: [
                    { orderable: false, targets: 3 }
                ]
            });
        });
    </script>
@stop
