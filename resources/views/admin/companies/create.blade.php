@extends('adminlte::page')

@section('title', 'Criar Empresa')

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
                    <a href="{{ url('/companies/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.goTo.company-index') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="far fa-building fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('card.companies.title-create') }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.companies.create') }}"></i>
                        </div>
                    </div>
                    {{-- Create Company Form --}}
                    <form action="/companies/store" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            {{-- Company Name --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyName" class="form-label">
                                        {{ __('form.company.company_name_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="company_name" id="companyName" class="form-control @error('company_name') is-invalid @enderror"
                                        value="{{ old('company_name') }}" placeholder="{{ __('form.company.company_name_placeholder') }}" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="far fa-building text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('company_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('company_name') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- Company Bussiness Sector --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companySector" class="form-label">
                                        {{ __('form.company.sector_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="sector" id="companySector" class="form-control @error('sector') is-invalid @enderror"
                                        value="{{ old('sector') }}" placeholder="{{ __('form.company.sector_placeholder') }}" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-briefcase text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('sector'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sector') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- Company Phone --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyPhone" class="form-label">
                                        {{ __('form.company.company_phone_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="company_phone" id="companyPhone" class="form-control @error('company_phone') is-invalid @enderror"
                                        value="{{ old('company_phone') }}" placeholder="{{ __('form.company.company_phone_placeholder') }}" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-phone-alt text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('company_phone'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('company_phone') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- Company Headquarters --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyHeadquarters" class="form-label">
                                        {{ __('form.company.headquarters_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="headquarters" id="companyHeadquarters" class="form-control @error('headquarters') is-invalid @enderror"
                                        value="{{ old('headquarters') }}" placeholder="{{ __('form.company.headquarters_placeholder') }}" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-map-marked-alt text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('headquarters'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('headquarters') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- Company Website --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyWebsite" class="form-label">
                                        {{ __('form.company.website_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="url" name="website" id="companyWebsite" class="form-control @error('website') is-invalid @enderror"
                                        value="{{ old('website') }}" placeholder="{{ __('form.company.website_placeholder') }}" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-desktop text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Company Type --}}
                            <div class="col-md-4 mb-3 mr-5">
                                <div class="form-group">
                                    <label for="companyType" class="form-label">
                                        {{ __('form.company.company_types_id_label') }} {{ $mainCompany->company_name }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        {{-- <select class="form-control" name="company_types_id" id="companyType"> --}}
                                        <select name="company_types_id" id="companyType" class="custom-select @error('company_types_id') is-invalid @enderror">
                                            <option value="">{{ __('form.company.company_types_id_placeholder') }}</option>
                                            @foreach ($companyTypes as $companyType)
                                                <option value="{{ $companyType->id }}">{{ $companyType->type_name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="far fa-handshake text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('company_types_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                {{-- Company Description --}}
                                <div class="form-group">
                                    <label for="summernote">
                                        {{ __('form.company.company_description_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                    </label>
                                </div>
                                <textarea class="form-control" name="company_description" id="summernote" cols="30" rows="10"></textarea>
                                {{-- Error Message --}}
                                @error('company_description')
                                    <div class="text-danger">
                                        <small><strong>{{ $message }}</strong></small>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3"><i class="far fa-check-square fa-lg">
                                    </i>&nbsp;&nbsp;{{ __('form.generic.confirmBtn') }}
                                </button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm"><i class="far fa-window-close fa-lg">
                                    </i>&nbsp;&nbsp;{{ __('form.generic.cancelBtn') }}
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

@section('css')

@endsection

@section('js')
    <script>
        //Summernote
        $('#summernote').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            placeholder: '(...)',
            tabsize: 2,
            height: 100
      });
    </script>
@endsection
