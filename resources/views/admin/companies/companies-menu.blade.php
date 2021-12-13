@extends('adminlte::page')

@section('title', __('page.titles.company-menu'))

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
                    <a href="{{ url('/management/menu') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.management-menu') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title">
                        <i class="far fa-building fa-lg"></i>&nbsp;&nbsp;&nbsp;
                        {{ __('page.company-menu.index-title') }}
                    </h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                         data-toggle="tooltip" data-placement="right" title="{{ __('page.company-menu.tip-index') }}"></i>
                    </div>

                    <div class="row">
                        {{-- Main Company --}}
                        <div class="col-md-6">
                            <div class="card card-outline card-info">
                                {{-- Card Header --}}
                                <div class="card-header">
                                    <h5><b>{{ __('page.companies.show-title') }} - </b>{{ $company->company_name }}</h5>
                                </div>
                                {{-- Card Body --}}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="card-text">
                                                <p>
                                                    <i class="fas fa-align-justify fa-lg text-info"></i>&nbsp;
                                                    <b>{{ __('page.companies.label-description') }}</b>
                                                </p>
                                                {!! $company->company_description !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p>
                                                    <i class="fas fa-briefcase fa-lg text-info"></i>&nbsp;
                                                    <b>{{ __('page.companies.label-sector') }}</b>
                                                </p>
                                                <p>{{ $company->sector }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p>
                                                    <i class="fas fa-phone-alt fa-lg text-info"></i>&nbsp;
                                                    <b>{{ __('page.companies.label-phone') }}</b>
                                                </p>
                                                <p>{{ $company->company_phone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p>
                                                    <i class="fas fa-map-marked-alt fa-lg text-info"></i>&nbsp;
                                                    <b>{{ __('page.companies.label-headquarters') }}</b>
                                                </p>
                                                <p>{{ $company->headquarters }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-text">
                                                <p>
                                                    <i class="fas fa-desktop fa-lg text-info"></i>&nbsp;
                                                    <b>{{ __('page.companies.label-website') }}</b>
                                                </p>
                                                <p><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            {{-- Edit Profile --}}
                                            <a class="btn bg-gradient-warning btn-sm" href="{{ url('/companies/edit-main-company/'. $company->id) }}"
                                            role="button" data-toggle="tooltip" data-placement="right" title="{{ __('page.companies.tip-edit-btn') }}">
                                                <i class="far fa-edit fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- / .Main Company --}}
                        {{-- Other Information --}}
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{-- Companies --}}
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $count }}</h3>
                                            <p>{{ __('page.company-menu.registered-companies') }}</p>
                                        </div>
                                        <div class="icon">
                                            <i class="far fa-building text-white"></i>
                                        </div>
                                        <a href="{{ url('/companies/index') }}" class="small-box-footer">
                                            {{ __('page.generic.moreInfo') }} <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    {{-- / .Companies --}}
                                </div>
                                <div class="col-md-12">
                                    {{-- Company Types --}}
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $typesCount }}</h3>
                                            <p>{{ __('page.company-menu.registered-company_types') }}</p>
                                        </div>
                                        <div class="icon">
                                            <i class="far fa-handshake text-white"></i>
                                        </div>
                                        <a href="{{ url('/company-types/index') }}" class="small-box-footer">
                                            {{ __('page.generic.moreInfo') }} <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    {{-- /.Company Types --}}
                                </div>
                            </div>
                        </div>
                        {{-- /.Other Information --}}
                    </div>
                </div>
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
@endsection
