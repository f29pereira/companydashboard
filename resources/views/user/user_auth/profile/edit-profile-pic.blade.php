@extends('adminlte::page')

@section('title', __('page.titles.user_profile_pic-edit'))

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
                        {{ __('users.edit-profile-pic') }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                        data-toggle="tooltip" data-placement="right" title="{{ __('users.tip-edit-profile_pic') }}"></i>
                    </div>
                    {{-- Edit User Photo Form --}}
                    <form action="/user/update-profile-pic/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            {{-- User Photo --}}
                            <div class="col-md-4 mb-3 mr-3">
                                <div class="form-group">
                                    <label for="userPhoto" class="form-label">
                                        {{ __('users.label-photo') }}&nbsp;&nbsp;
                                    </label>
                                    <div class="input-group">
                                        <input type="file" name="image" id="userPhoto" class="form-control @error('image') is-invalid @enderror">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-camera fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- / .User Photo --}}
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
                    {{-- / .Edit User Photo Form --}}
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
