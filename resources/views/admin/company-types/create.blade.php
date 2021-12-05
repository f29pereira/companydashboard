@extends('adminlte::page')

@section('title', 'Criar Relação de Negócio')

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
                    <a href="{{ url('/company-types/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.company_types-index') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="far fa-handshake fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('page.company-types.create-title') }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right" title="{{ __('page.company-types.tip-create') }}"></i>
                        </div>
                    </div>
                    {{-- Create Company Type Form  --}}
                    <form action="/company-types/store" method="POST">
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
                                        @error('type_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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
                                        @error('type_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3"><i class="far fa-check-square fa-lg">
                                    </i>&nbsp;&nbsp;{{ __('page.generic.confirmBtn') }}
                                </button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm"><i class="far fa-window-close fa-lg">
                                    </i>&nbsp;&nbsp;{{ __('page.generic.cancelBtn') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
