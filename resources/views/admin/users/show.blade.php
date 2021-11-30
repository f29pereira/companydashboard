@extends('adminlte::page')

@section('title', 'Detalhes Utilizador')

@section('content_header')

@stop

@section('content')
    @can('is_admin')
        <div class="row">
            <div class="col m-3">
                {{-- Card --}}
                <div class="card card-success">
                    {{-- Card Header --}}
                    <div class="card-header d-flex justify-content-between">
                        {{-- Return: Home --}}
                        <a href="{{ url('/users/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.goTo.user-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title"><i class="far fa-address-book fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('card.users.title-show') }}</h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <h4><i class="far fa-address-card text-info"></i>&nbsp;<strong>{{ __('form.user.name_label') }}</strong></h4>
                                    <p>{{ $user->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <h4><i class="fas fa-envelope text-info"></i>&nbsp;<strong>{{ __('form.user.email_label') }}</strong></h4>
                                    <p>{{ $user->email }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <h4><i class="fas fa-phone-alt text-info"></i>&nbsp;<strong>{{ __('form.user.phone_label') }}</strong></h4>
                                    <p>{{ $user->phone }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <h4><i class="far fa-building text-info"></i>&nbsp;<strong>{{ __('form.user.company_label') }}</strong></h4>
                                    <p>{{ $user->company->company_name }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <h4><i class="fas fa-user-tie text-info"></i>&nbsp;<strong>{{ __('form.user.department_label') }}</strong></h4>
                                    <p>{{ $user->department->department_name }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="text-center">
                                    <h4><i class="fas fa-users-cog text-info"></i>&nbsp;<strong>{{ __('form.user.role_label') }}</strong></h4>
                                    <p>{{ $user->userRole->role_name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@endsection
