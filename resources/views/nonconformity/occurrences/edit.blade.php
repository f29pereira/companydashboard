@extends('adminlte::page')

@section('title', __('page.titles.occurrences-edit'))

@section('content_header')
@stop

@section('content')
    {{-- Permission: Administrator --}}
    @can('is_admin')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        {{-- Return: Occurrences List --}}
                        <a href="{{ url('/occurrences/index') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.occurrence-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-exclamation-triangle fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('oc/edit.title') }}
                        </h3>
                        <div></div>
                    </div>
                </div>
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    {{-- Page Tooltip --}}
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right" title="{{ __('oc/edit.tip') }}"></i>
                        </div>
                    </div>
                    {{-- /.Page Tooltip --}}

                    {{-- Edit Occurrence Form --}}
                    <form action="/occurrences/update/{{ $occurrence->id }}" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            {{-- Occurrence Title --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="occurrenceTitle" class="form-label">
                                        {{ __('oc/edit.label-title') }} &nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    {{-- Input group --}}
                                    <div class="input-group">
                                        <input type="text" name="oc_title" id="occurrenceTitle" class="form-control @error('oc_title') is-invalid @enderror"
                                        value="{{ $occurrence->oc_title }}" placeholder="{{ __('oc/edit.text-title') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-heading text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('oc_title'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('oc_title') }}</strong>
                                        </div>
                                        @endif
                                        {{-- /.Error Message --}}
                                    </div>
                                    {{-- /.Input group --}}
                                </div>
                            </div>
                            {{-- /.Occurrence Title --}}
                        </div>
                        <div class="row">
                            {{-- Occurrence Description --}}
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="summernote" class="form-label">
                                        {{ __('oc/edit.label-description') }} &nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <textarea name="oc_description" id="summernote" class="form-control @error('oc_description') is-invalid @enderror"
                                    cols="30" rows="10"></textarea>
                                    {{-- Error Message --}}
                                    @error('oc_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- /.Error Message --}}
                                </div>
                            </div>
                            {{-- /.Occurrence Description --}}
                        </div>
                        <div class="row">
                            {{-- Occurrence Company --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="occurrenceCompany" class="form-label">
                                        {{ __('oc/edit.label-company') }} &nbsp;&nbsp;
                                    </label>
                                    {{-- Input group --}}
                                    <div class="input-group">
                                        <select class="form-control" name="company_id" id="occurrenceCompany">
                                            @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" {{ $company->id == $occurrence->company_id ? 'selected' : '' }}>
                                                {{ $company->company_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="far fa-building text-info"></span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- /.Input group --}}
                                </div>
                            </div>
                            {{-- /.Occurrence Company --}}
                        </div>
                        <div class="row">
                            {{-- Occurrence Resolution State --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="occurrenceState" class="form-label">
                                        {{ __('oc/edit.label-state') }} &nbsp;&nbsp;
                                    </label>
                                    <i class="fas fa-asterisk text-danger fa-sm"
                                    data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    {{-- Input group --}}
                                    <div class="input-group">
                                        <select class="form-control" name="resolution_state_id" id="occurrenceState">
                                            @foreach ($states as $state)
                                            <option value="{{ $state->id }}" {{ $state->id == $occurrence->resolution_state_id ? 'selected' : '' }}>
                                                {{ $state->state_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-check text-info"></span>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- /.Input group --}}
                                    {{-- Error Message --}}
                                    @error('resolution_state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- /.Error Message --}}
                                </div>
                            </div>
                            {{-- /.Occurrence Resolution State --}}
                        </div>

                        {{-- User Sender --}}
                        <div class="row" style="display:none">
                            <input type="text" class="form-control" value="{{ $occurrence->user_id }}" name="user_id" id="">
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
                    {{-- /.Edit Occurrence Form --}}
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
    {{-- /.Permission: Administrator --}}
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
            placeholder: {!! json_encode(__('oc/edit.text-description')) !!},
            tabsize: 2,
            height: 150
      });

      //Occurrence description
      var content = {!! json_encode($occurrence->oc_description) !!};

      //Summernote content
      $('#summernote').summernote('code', content);
    </script>
@stop



