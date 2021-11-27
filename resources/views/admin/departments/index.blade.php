@extends('adminlte::page')

@section('title', 'Departamentos')

@section('content_header')

@stop

@section('content')
    @can('is_admin')
    {{-- Permisson: Administrator --}}
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header d-flex justify-content-between">
                    {{-- Return: Management --}}
                    <a href="{{ url('/management/menu') }}" data-toggle="tooltip" data-placement="right" title="Menu Empresas">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="fas fa-user-tie fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Departamentos da {{ $mainCompany->company_name }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right"
                            title="Lista de departamentos da {{ $mainCompany->company_name }}"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/departments/create') }}" role="button"
                            data-toggle="tooltip" data-placement="right" title="Adicionar Departamento">
                                <i class="far fa-plus-square fa-lg"></i>&nbsp;&nbsp;Departamento
                            </a>
                        </div>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="departmentTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <th scope="col">Nome</th>
                            <th scope="col">Gestão</th>
                        </thead>
                        {{-- Table Body --}}
                        <tbody class="text-center">
                            @foreach ($departments as $department)
                            <tr>
                                <td>{{ $department->department_name }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            {{-- Department Edit --}}
                                            <a class="btn bg-gradient-warning btn-sm" href="{{ url('/departments/edit/'. $department->id) }}" role="button"
                                            data-toggle="tooltip" data-placement="bottom" title="Editar Departamento">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            {{-- Delete Department --}}
                                            <span data-toggle="modal" data-target="#deleteDepartment-{{ $department->id }}">
                                                <button type="button" class="btn bg-gradient-danger btn-sm"
                                                    data-toggle="tooltip" data-placement="bottom" title="Eliminar Departamento">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    {{-- Delete Department Modal --}}
                                    <div class="modal fade" id="deleteDepartment-{{ $department->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                {{-- Modal Header --}}
                                                <div class="modal-header bg-danger text-center">
                                                    <h3 class="modal-title w-100" id="deleteModalLabel"><i class="far fa-trash-alt"></i></h3>
                                                </div>
                                                {{-- Modal Body --}}
                                                <div class="modal-body">
                                                    <div class="text-left"><p><b>Pretende eliminar o Departamento ?</b></p></div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p><i class="fas fa-user-tie fa-lg text-danger"></i>&nbsp;<b>Nome</b></p>
                                                            <p>{{ $department->department_name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Confirm/Cancel --}}
                                                <div class="modal-footer">
                                                    <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/departments/delete/'.$department->id) }}" role="button">
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
                            <th>Gestão</th>
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
@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#departmentTable').DataTable({
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },
                columnDefs: [
                    { orderable: false, targets: 1 }
                ]
            });
        });
    </script>
@stop
