@extends('adminlte::page')

@section('title', 'Empresas')

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
                    {{-- Return: Management --}}
                    <a href="{{ url('/companies/menu') }}" data-toggle="tooltip" data-placement="right" title="Menu Empresas">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="far fa-building fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Empresas</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                             data-toggle="tooltip" data-placement="right"
                             title="Lista de Empresas que possuem uma relação de negócio com {{ $mainCompany->company_name }}"></i>
                        </div>
                    </div>
                    {{-- Add Company --}}
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/companies/create') }}" role="button"
                            data-toggle="tooltip" data-placement="right" title="Adicionar Empresa">
                                <i class="far fa-plus-square fa-lg"></i>&nbsp;&nbsp;Empresa
                            </a>
                        </div>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="companiesTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Relação com {{ $mainCompany->company_name }}</th>
                                <th scope="col">Atividade</th>
                                <th scope="col">Website</th>
                                <th scope="col">Gestão Empresa</th>
                            </tr>
                        </thead>
                        {{-- Table Body --}}
                        <tbody  class="text-center">
                            @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->company_name }}</td>
                                <td>{{ $company->companyTypes->type_name }}</td>
                                <td>{{ $company->sector }}</td>
                                <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            {{-- Show Company --}}
                                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/companies/show/'. $company->id) }}" role="button"
                                            data-toggle="tooltip" data-placement="bottom" title="Detalhes Empresa">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            {{-- Edit Company --}}
                                            <a class="btn bg-gradient-warning btn-sm" href="{{ url('/companies/edit/'. $company->id) }}" role="button"
                                            data-toggle="tooltip" data-placement="bottom" title="Editar Empresa">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            {{-- Delete Company --}}
                                            <span data-toggle="modal" data-target="#deleteCompany-{{ $company->id }}">
                                                <button type="button" class="btn bg-gradient-danger btn-sm"
                                                    data-toggle="tooltip" data-placement="bottom" title="Eliminar Empresa">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    {{-- Delete Company Modal --}}
                                    <div class="modal fade" id="deleteCompany-{{ $company->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                {{-- Modal Header --}}
                                                <div class="modal-header bg-danger text-center">
                                                    <h3 class="modal-title w-100" id="deleteModalLabel"><i class="fas fa-user-times"></i></h3>
                                                </div>
                                                {{-- Modal Body --}}
                                                <div class="modal-body">
                                                    <div class="text-left"><p><b>Pretende eliminar a empresa ?</b></p></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><i class="far fa-building fa-lg text-danger"></i>&nbsp;<b>Nome</b></p>
                                                            <p>{{ $company->company_name }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><i class="fas fa-briefcase fa-lg text-danger"></i>&nbsp;<b>Setor de Atividade</b></p>
                                                            <p>{{ $company->sector }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><i class="fas fa-phone-alt fa-lg text-danger"></i>&nbsp;<b>Telefone</b></p>
                                                            <p>{{ $company->company_phone }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><i class="fas fa-map-marked-alt fa-lg text-danger"></i>&nbsp;<b>Localização</b></p>
                                                            <p>{{ $company->headquarters }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><i class="fas fa-desktop fa-lg text-danger"></i>&nbsp;<b>Website</b></p>
                                                            <p>{{ $company->website }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><i class="far fa-handshake fa-lg text-danger"></i>&nbsp;<b>Relação com {{ $mainCompany->company_name }}</b></p>
                                                            <p>{{ $company->headquarters }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="display:none">
                                                        <input type="text" class="form-control" name="company_description" value="{{ $company->company_description }}" id="">
                                                    </div>
                                                </div>
                                                {{-- Confirm/Cancel --}}
                                                <div class="modal-footer">
                                                    <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/companies/delete/'.$company->id) }}" role="button">
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
                        <tfoot  class="text-center">
                            <tr>
                                <th>Nome</th>
                                <th>Relação com {{ $mainCompany->company_name }}</th>
                                <th>Atividade</th>
                                <th>Website</th>
                                <th>Gestão Empresa</th>
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
@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#companiesTable').DataTable({
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },
                columnDefs: [
                    { orderable: false, targets: 4 }
                ]
            });
        });
    </script>
@stop
