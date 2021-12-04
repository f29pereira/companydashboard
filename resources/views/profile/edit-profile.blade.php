@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')

@stop

@section('content')
    @can('is_user')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header d-flex justify-content-between">
                    {{-- Return: Home --}}
                    <a href="{{ url('/user/profile') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.my-profile') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title">
                        <i class="fas fa-user-edit fa-lg"></i>&nbsp;&nbsp;&nbsp;
                        {{ __('page.users.edit-profile-title') }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                        data-toggle="tooltip" data-placement="right" title="{{ __('page.users.tip-edit-profile') }}"></i>
                    </div>
                    {{-- Edit User Form --}}
                    <form action="/user/update-profile/{{ $user->id }}" method="POST">
                        @csrf
                        <div class="row">
                            {{-- Name --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userName" class="form-label">
                                        {{ __('page.users.label-name') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="name" id="userName" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $user->name }}" placeholder="{{ __('page.users.text-name') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="far fa-address-card fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Email --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userEmail" class="form-label">
                                        {{ __('form.user.email_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="email"  id="userEmail" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ $user->email }}" placeholder="{{ __('page.users.text-email') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-envelope fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Phone --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="userPhone" class="form-label">
                                        {{ __('form.user.phone_label') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="phone" id="userPhone" class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ $user->phone }}" placeholder="{{ __('page.users.text-phone') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-phone-alt fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Role, Department, Company --}}
                        <div class="row" style="display:none">
                            <input type="text" class="form-control" value="{{ $user->user_role_id }}" name="user_role_id" id="">
                            <input type="text" class="form-control" value="{{ $user->department_id }}" name="department_id" id="">
                            <input type="text" class="form-control" value="{{ $user->company_id }}" name="company_id" id="">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
