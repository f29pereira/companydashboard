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
                                    <label for="departmentName" class="form-label">Nome</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="department_name" id="departmentName" placeholder="Nome do Departamento">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-user-tie fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('department_name')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
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
