@extends('adminlte::page')

@section('title', 'Editar Empresa')

@section('content_header')

@stop

@section('content')
    {{-- Permisson: Administrator --}}
    @can('is_admin')
        <div class="row">
            <div class="col m-3">
                {{-- Card --}}
                <div class="card card-warning">
                    {{-- Card Header --}}
                    <div class="card-header d-flex justify-content-between">
                        {{-- Return: Companies List --}}
                        <a href="{{ url('/companies/menu') }}" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.goTo.company-menu') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title"><i class="far fa-building fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('card.companies.title-edit') }}</h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                             data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.companies.edit') }}"></i>
                        </div>
                        {{-- Edit Company Form --}}
                        <form action="/companies/update-main-company/{{ $company->id }}" method="POST" novalidate>
                            @csrf

                            <div class="row">
                                {{-- Company Name --}}
                                <div class="col-md-4 mb-3  mr-5">
                                    <div class="form-group">
                                        <label for="companyName" class="form-label">
                                            {{ __('form.company.company_name_label') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="company_name" id="companyName" class="form-control @error('company_name') is-invalid @enderror"
                                            value="{{ $company->company_name }}" placeholder="{{ __('form.company.company_name_placeholder') }}">
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
                                {{-- Company Bussiness Sector --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companySector" class="form-label">
                                            {{ __('form.company.sector_label') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="sector" id="companySector" class="form-control @error('sector') is-invalid @enderror"
                                            value="{{ $company->sector }}" placeholder="{{ __('form.company.sector_placeholder') }}">
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
                            </div>
                            <div class="row">
                                {{-- Company Website --}}
                                <div class="col-md-4 mb-3 mr-5">
                                    <div class="form-group">
                                        <label for="companyPhone" class="form-label">
                                            {{ __('form.company.company_phone_label') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="company_phone" id="companyPhone"  class="form-control @error('company_phone') is-invalid @enderror"
                                            value="{{ $company->company_phone }}" placeholder="{{ __('form.company.company_phone_placeholder') }}">
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
                                {{-- Company Headquarters --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companyHeadquarters" class="form-label">
                                            {{ __('form.company.headquarters_label') }}&nbsp;&nbsp;
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="headquarters" id="companyHeadquarters" class="form-control @error('headquarters') is-invalid @enderror"
                                            value="{{ $company->headquarters }}" placeholder="{{ __('form.company.headquarters_placeholder') }}">
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
                                            value="{{ $company->website }}" placeholder="{{ __('form.company.website_placeholder') }}">
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
                                {{-- Company Type --}}
                                <div style="display: none">
                                    <input type="text" name="company_types_id" value="{{ $company->company_types_id }}" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{-- Company Description --}}
                                    <div class="form-group">
                                        <label for="summernote" class="form-label">
                                            {{ __('form.company.company_description_label') }}
                                            <i class="fas fa-asterisk text-danger fa-sm"
                                            data-toggle="tooltip" data-placement="right" title="{{ __('form.generic.requiredField') }}"></i>
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
                            </div>
                            {{-- Confirm/Cancel --}}
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="submit" class="btn bg-gradient-success btn-sm mr-3">
                                        <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('form.generic.confirmBtn') }}
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

@section('js')
    <script>
        //Summernote
        $('#summernote').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontname', ['fontname']],
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
@endsection
