@extends('adminlte::page')

@section('title', __('page.titles.company_types-create'))

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
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        {{-- Return: Home --}}
                        <a href="{{ url('/companies/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.company-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-info-circle fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('page.companies.show-title') }}
                        </h3>
                        {{-- Return: Management Menu --}}
                        <a href="{{ url('/management/menu') }}" data-toggle="tooltip" data-placement="left" title="{{ __('page.link.management-menu') }}">
                            <i class="fas fa-th fa-lg"></i>
                        </a>
                    </div>
                </div>
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right" title="{{ __('page.company-types.tip-create') }}"></i>
                        </div>
                    </div>
                    {{-- Create Company Type Form  --}}
                    <form action="/company-types/store" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            {{-- Company Type Name --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyTypeName" class="form-label">
                                        {{ __('page.company-types.label-name') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="type_name" id="companyTypeName" class="form-control @error('type_name') is-invalid @enderror"
                                        value="{{ old('type_name') }}" placeholder="{{ __('page.company-types.text-create-name') }}" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-align-justify fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('type_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('type_name') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- Company Type Description --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyTypeDescription" class="form-label">
                                        {{ __('page.company-types.label-description') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="type_description" id="companyTypeDescription"  class="form-control @error('type_description') is-invalid @enderror"
                                        value="{{ old('type_description') }}" placeholder="{{ __('page.company-types.text-create-description') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-align-justify fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('type_description'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('type_description') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3">
                                    <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;
                                    {{ __('page.generic.confirmBtn') }}
                                </button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm">
                                    <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;
                                    {{ __('page.generic.cancelBtn') }}
                                </button>
                            </div>
                        </div>
                        {{-- /.Confirm/Cancel --}}
                    </form>
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
@endsection
