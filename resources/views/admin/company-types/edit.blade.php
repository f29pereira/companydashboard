@extends('adminlte::page')

@section('title', 'Editar Relação de Negócio')

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
                    <a href="{{ url('/company-types/index') }}" data-toggle="tooltip" data-placement="right" title="Lista de Relações de Negócio">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="far fa-handshake fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Editar Relação de Negócio</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right" title="Formulário para editar dados de relação de negócio"></i>
                        </div>
                    </div>
                    {{-- Create Company Type Form  --}}
                    <form action="/company-type/update/{{ $companyType->id }}" method="POST">
                        @csrf
                        <div class="row">
                            {{-- Company Type Name --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyTypeName" class="form-label">Nome</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="type_name" value="{{ $companyType->type_name }}" id="companyTypeName">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-align-justify fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('type_name')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Company Type Description --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyTypeDescription" class="form-label">Descrição</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="type_description" value="{{ $companyType->type_description }}" id="companyTypeDescription">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-align-justify fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('type_description')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3"><i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;Confirmar</button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm"><i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
