@extends('adminlte::page')

@section('title', 'Menu Empresas')

@section('content_header')

@stop

@section('content')
    @can('is_admin')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header d-flex justify-content-between">
                    {{-- Return: Management --}}
                    <a href="{{ url('/management/menu') }}" data-toggle="tooltip" data-placement="right" title="Gestão">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="far fa-building fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Empresas</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                         data-toggle="tooltip" data-placement="right" title="Menu de Empresas"></i>
                    </div>

                    <div class="row">
                        {{-- Main Company --}}
                        <div class="col-md-6">
                            <div class="card card-outline card-info">
                                {{-- Card Header --}}
                                <div class="card-header">
                                    <h5><b>Informações Empresa {{ $company->company_name }}</b></h5>
                                </div>
                                {{-- Card Body --}}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-text">
                                                <p><i class="fas fa-align-justify fa-lg text-info"></i>&nbsp;<b>Descrição</b></p>
                                                {!! $company->company_description !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p><i class="fas fa-briefcase fa-lg text-info"></i>&nbsp;<b>Setor de Atividade</b></p>
                                                <p>{{ $company->sector }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p><i class="fas fa-phone-alt fa-lg text-info"></i>&nbsp;<b>Telefone</b></p>
                                                <p>{{ $company->company_phone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p><i class="fas fa-map-marked-alt fa-lg text-info"></i>&nbsp;<b>Localização</b></p>
                                                <p>{{ $company->headquarters }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p><i class="fas fa-desktop fa-lg text-info"></i>&nbsp;<b>Website</b></p>
                                                <p><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            {{-- Edit Profile --}}
                                            <a class="btn bg-gradient-warning btn-sm" href="{{ url('/companies/edit-main-company/'. $company->id) }}"
                                            role="button" data-toggle="tooltip" data-placement="right" title="Editar dados empresa {{ $company->company_name }}">
                                                <i class="far fa-edit fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Companies --}}
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{-- Companies --}}
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $count }}</h3>
                                            <p>Empresas registadas</p>
                                        </div>
                                        <div class="icon">
                                            <i class="far fa-building text-white"></i>
                                        </div>
                                        <a href="{{ url('/companies/index') }}" class="small-box-footer">
                                            Saber mais <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{-- Company Types --}}
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $typesCount }}</h3>
                                            <p>Relações de Negócio registadas</p>
                                        </div>
                                        <div class="icon">
                                            <i class="far fa-handshake text-white"></i>
                                        </div>
                                        <a href="{{ url('/company-types/index') }}" class="small-box-footer">
                                            Saber mais <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
