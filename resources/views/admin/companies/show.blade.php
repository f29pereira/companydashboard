@extends('adminlte::page')

@section('title', __('page.titles.companies-show'))

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
                        {{-- Return: Home --}}
                        <a href="{{ url('/companies/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.company-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title"><i class="fas fa-info-circle fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('page.companies.show-title') }}</h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>
                                    <i class="fas fa-align-justify text-info"></i>&nbsp;
                                    <strong>{{ __('page.companies.label-description') }}</strong>
                                </h4>
                                {!! $company->company_description !!}
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    {{-- Company Name --}}
                                    <div class="col mb-3">
                                        <div class="text-center">
                                            <h4>
                                                <i class="far fa-building text-info"></i>&nbsp;
                                                <strong>{{ __('page.companies.label-name') }}</strong>
                                            </h4>
                                            <p>{{ $company->company_name  }}</p>
                                        </div>
                                    </div>
                                    {{-- Company Sector --}}
                                    <div class="col mb-3">
                                        <div class="text-center">
                                            <h4>
                                                <i class="fas fa-briefcase text-info"></i>&nbsp;
                                                <strong>{{ __('page.companies.label-sector') }}</strong>
                                            </h4>
                                            <p>{{ $company->sector }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- Company Phone --}}
                                    <div class="col mb-3">
                                        <div class="text-center">
                                            <h4>
                                                <i class="fas fa-phone-alt text-info"></i>&nbsp;
                                                <strong>{{ __('page.companies.label-phone') }}</strong>
                                            </h4>
                                            <p>{{ $company->company_phone }}</p>
                                        </div>
                                    </div>
                                    {{-- Company Headquarters --}}
                                    <div class="col mb-3">
                                        <div class="text-center">
                                            <h4>
                                                <i class="fas fa-map-marked-alt text-info"></i>&nbsp;
                                                <strong>{{ __('page.companies.label-headquarters') }}</strong>
                                            </h4>
                                            <p>{{ $company->headquarters }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- Company Website --}}
                                    <div class="col mb-3">
                                        <div class="text-center">
                                            <h4>
                                                <i class="fas fa-desktop text-info"></i>&nbsp;
                                                <strong>{{ __('page.companies.label-website') }}</strong>
                                            </h4>
                                            <p><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
                                        </div>
                                    </div>
                                    {{-- Company Type --}}
                                    <div class="col mb-3">
                                        <div class="text-center">
                                            <h4>
                                                <i class="far fa-handshake text-info"></i>&nbsp;
                                                <strong>{{ __('page.companies.label-type') }} {{ $mainCompany->company_name }}</strong>
                                            </h4>
                                            <p>{{ $company->companyTypes->type_name }}</p>
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
