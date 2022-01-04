@extends('adminlte::page')

@section('title', __('page.titles.companies-edit'))

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
                            {{-- Return: Companies List --}}
                            <a href="{{ url('/companies/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.company-index') }}">
                                <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                            </a>
                            {{-- Card Title --}}
                            <h3 class="card-title">
                                <i class="far fa-building fa-lg"></i>&nbsp;&nbsp;&nbsp;
                                {{ __('page.companies.edit-title') }}
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
                        <div class="mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                             data-toggle="tooltip" data-placement="right" title="{{ __('page.companies.tip-edit') }}"></i>
                        </div>
                        {{-- Edit Company Form --}}
                        <form action="/companies/update/{{ $company->id }}" method="POST" novalidate>
                            @csrf
                            <div class="row">
                                {{-- Company Name --}}
                                <div class="col-md-4 mb-3  mr-5">
                                    <div class="form-group">
                                        <label for="companyName" class="form-label">
                                            {{ __('page.companies.label-name') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="company_name" id="companyName" class="form-control @error('company_name') is-invalid @enderror"
                                            value="{{ $company->company_name }}" placeholder="{{ __('page.companies.text-update-name') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span><i class="far fa-building text-info"></i></span>
                                                </div>
                                            </div>
                                            {{-- Error Message --}}
                                            @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Company Name --}}
                                {{-- Company Activity Sector --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companySector" class="form-label">
                                            {{ __('page.companies.label-sector') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="sector" id="companySector" class="form-control @error('sector') is-invalid @enderror"
                                            value="{{ $company->sector }}" placeholder="{{ __('page.companies.text-update-sector') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span><i class="fas fa-briefcase text-info"></i></span>
                                                </div>
                                            </div>
                                            {{-- Error Message --}}
                                            @error('sector')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Company Activity Sector --}}
                            </div>
                            <div class="row">
                                {{-- Company Phone --}}
                                <div class="col-md-4 mb-3 mr-5">
                                    <div class="form-group">
                                        <label for="companyPhone" class="form-label">
                                            {{ __('page.companies.label-phone') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="company_phone" id="companyWebsite"  class="form-control @error('company_phone') is-invalid @enderror"
                                            value="{{ $company->company_phone }}" placeholder="{{ __('page.companies.text-update-phone') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span><i class="fas fa-phone-alt text-info"></i></span>
                                                </div>
                                            </div>
                                            {{-- Error Message --}}
                                            @error('company_phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Company Phone --}}
                                {{-- Company Headquarters --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companyHeadquarters" class="form-label">
                                            {{ __('page.companies.label-headquarters') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="headquarters" id="companyHeadquarters" class="form-control @error('headquarters') is-invalid @enderror"
                                            value="{{ $company->headquarters }}" placeholder="{{ __('page.companies.text-update-headquarters') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span><i class="fas fa-map-marked-alt text-info"></i></span>
                                                </div>
                                            </div>
                                            {{-- Error Message --}}
                                            @error('headquarters')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Company Headquarters --}}
                            </div>
                            <div class="row">
                                {{-- Company Website --}}
                                <div class="col-md-4 mb-3 mr-5">
                                    <div class="form-group">
                                        <label for="companyWebsite" class="form-label">
                                            {{ __('page.companies.label-phone') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="url" name="website"  id="companyWebsite" class="form-control @error('website') is-invalid @enderror"
                                            value="{{ $company->website }}" placeholder="{{ __('page.companies.text-update-website') }}">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span><i class="fas fa-desktop text-info"></i></span>
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
                                {{-- /.Company Website --}}
                                {{-- Company Type --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companyType" class="form-label">
                                            {{ __('page.companies.label-type') }} {{ $mainCompany->company_name }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-control" name="company_types_id" id="companyType">
                                                @foreach ($companyTypes as $companyType)
                                                    <option value="{{ $companyType->id }}" {{ $companyType->id == $company->company_types_id ? 'selected' : ''}}>
                                                        {{ $companyType->type_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="far fa-handshake text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('company_types_id')
                                            <div><p class="text-danger">{{ $message }}</p></div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- /.Company Type --}}
                            </div>
                            <div class="row">
                                {{-- Company Description --}}
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="summernote" class="form-label">
                                            {{ __('page.companies.label-description') }}
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                        </label>
                                    </div>
                                    <textarea name="company_description" id="summernote" class="form-control @error('company_description') is-invalid @enderror"
                                    cols="30" rows="10"></textarea>
                                    {{-- Error Message --}}
                                    @error('company_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- /.Company Description --}}
                            </div>
                            {{-- Confirm/Cancel --}}
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="submit" class="btn bg-gradient-success btn-sm mr-3">
                                        <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.confirmBtn') }}
                                    </button>
                                    <button type="reset" class="btn bg-gradient-danger btn-sm">
                                        <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.cancelBtn') }}
                                    </button>
                                </div>
                            </div>
                            {{-- /.Confirm/Cancel --}}
                        </form>
                        {{-- /.Edit Company Form --}}
                    </div>
                    {{-- /.Card Body --}}
                </div>
                {{-- /.Card --}}
            </div>
        </div>
    @endcan
@stop

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
            tabsize: 2,
            height: 100
      });

      //Company description
      var content = {!! json_encode($company->company_description) !!};

      //Summernote content
      $('#summernote').summernote('code', content);
    </script>
@stop
