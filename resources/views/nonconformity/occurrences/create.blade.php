@extends('adminlte::page')

@section('title', __('page.titles.occurrences-index'))

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
                        {{-- Return: Ncs/Occurrences Menu --}}
                        <a href="{{ url('/occurrences/index') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.occurrences-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-exclamation-triangle fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('occurrences.create-title') }}
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
                            data-toggle="tooltip" data-placement="right" title="{{ __('occurrences.tip-create') }}"></i>
                        </div>
                    </div>
                    {{-- /.Page Tooltip --}}

                    {{-- Create Occurrence Form --}}
                    <form action="/occurrences/store" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            {{-- Occurrence Title --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="occurrenceTitle" class="form-label">
                                        {{ __('occurrences.label-title') }} &nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    {{-- Input group --}}
                                    <div class="input-group">
                                        <input type="text" name="occurrence_title" id="occurrenceTitle" class="form-control @error('occurrence_title') is-invalid @enderror"
                                        placeholder="{{ __('occurrences.text-create-title') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-heading text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('occurrence_title'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('occurrence_title') }}</strong>
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
                                        {{ __('occurrences.label-description') }} &nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <textarea name="occurrence_description" id="summernote" class="form-control @error('occurrence_description') is-invalid @enderror"
                                    cols="30" rows="10"></textarea>
                                    {{-- Error Message --}}
                                    @error('occurrence_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- /.Error Message --}}
                                </div>
                            </div>
                            {{-- /.Occurrence Description --}}
                        </div>

                        {{-- User Sender --}}
                        <div class="row" style="display:none">
                            <input type="text" class="form-control" value="{{ Auth::user()->id }}" name="user_id" id="">
                            <input type="text" class="form-control" value="{{ $mainCompany->id }}" name="company_id" id="">
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
                    {{-- /.Create Occurrence Form --}}
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
            placeholder: {!! json_encode(__('occurrences.text-create-description')) !!},
            tabsize: 2,
            height: 150
        });
    </script>
@stop
