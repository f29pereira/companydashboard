@extends('adminlte::page')

@section('title', 'Criar Departamento')

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
                    <a href="{{ url('/departments/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.goTo.department-index') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="fas fa-user-tie fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('card.departments.title-create') }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.departments.create') }}"></i>
                        </div>
                    </div>
                    {{-- Create Department Form --}}
                    <form action="/departments/store" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="departmentName" class="form-label">
                                        {{ __('form.department.department_name_label') }}&nbsp;&nbsp;<strong><i class="fas fa-asterisk text-danger fa-sm"></i></strong>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="department_name" id="departmentName" class="form-control {{ $errors->has('department_name') ? 'is-invalid' : '' }}"
                                        value="{{ old('department_name') }}" placeholder="{{ __('form.department.department_name_placeholder') }}" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user-tie text-info"></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @if($errors->has('department_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('department_name') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Required Fields --}}
                        <div class="row">
                            <div class="col-md-3 mb-4">
                                <strong>
                                    <i class="fas fa-asterisk text-danger fa-sm"></i>
                                    &nbsp;{{ __('form.generic.requiredField') }}
                                </strong>
                            </div>
                        </div>
                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3">
                                    <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('form.generic.confirmBtn') }}
                                </button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm">
                                    <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('form.generic.cancelBtn') }}
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
