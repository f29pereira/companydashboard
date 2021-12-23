@extends('adminlte::page')

@section('title', __('page.titles.user_profile-edit'))

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
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                        data-toggle="tooltip" data-placement="right" title="{{ __('page.users.tip-edit-profile') }}"></i>
                    </div>
                    {{-- Edit User Form --}}
                    <form action="/user/update-profile/{{ $user->id }}" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            {{-- User First Name --}}
                            <div class="col-md-4 mb-3 mr-3">
                                <div class="form-group">
                                    <label for="userFirstName" class="form-label">
                                        {{ __('page.users.label-first_name') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="first_name" id="userFirstName" class="form-control @error('first_name') is-invalid @enderror"
                                        value="{{ $user->first_name }}" placeholder="{{ __('page.users.text-first_name') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="far fa-address-card fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- / .User First Name --}}
                            {{-- User Last Name --}}
                            <div class="col-md-4 mb-3 mr-3">
                                <div class="form-group">
                                    <label for="userLastName" class="form-label">
                                        {{ __('page.users.label-last_name') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="last_name" id="userLastName" class="form-control @error('last_name') is-invalid @enderror"
                                        value="{{ $user->last_name }}" placeholder="{{ __('page.users.text-last_name') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="far fa-address-card fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- / .User Last Name --}}
                        </div>
                        <div class="row">
                            {{-- User Email --}}
                            <div class="col-md-4 mb-3 mr-3">
                                <div class="form-group">
                                    <label for="userEmail" class="form-label">
                                        {{ __('page.users.label-email') }}&nbsp;&nbsp;
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
                            {{-- / .User Email --}}
                            {{-- User Phone --}}
                            <div class="col-md-4 mb-3 mr-3">
                                <div class="form-group">
                                    <label for="userPhone" class="form-label">
                                        {{ __('page.users.label-phone') }}&nbsp;&nbsp;
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
                            {{-- / .User Phone --}}
                        </div>
                        <div class="row">
                            {{-- User Profession --}}
                            <div class="col-md-4 mb-3 mr-3">
                                <div class="form-group">
                                    <label for="userProfession" class="form-label">
                                        {{ __('page.users.label-profession') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="profession" id="userProfession" class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ $user->profession }}" placeholder="{{ __('page.users.text-profession') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-briefcase fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('profession')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.User Profession --}}
                        </div>

                        {{-- Role, Department, Company --}}
                        <div class="row" style="display:none">
                            <input type="text" class="form-control" value="{{ $user->user_role_id }}" name="user_image_id" id="">
                            <input type="text" class="form-control" value="{{ $user->user_image_id }}" name="user_role_id" id="">
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
                        {{-- /.Confirm/Cancel --}}
                    </form>
                    {{-- /.Edit User Form --}}
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
@endsection
