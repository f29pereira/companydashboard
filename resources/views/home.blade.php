@extends('adminlte::page')

@section('title', __('page.titles.home'))

@section('content_header')
@stop

@section('content')
    @can('is_user')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div></div>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-home fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('page.home.card-title') }}
                        </h3>
                        {{-- /.Card Title --}}
                        <div></div>
                    </div>
                </div>
                {{-- /.Card Header --}}
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <h3>
                            {{ __('page.home.welcome-msg') }}
                            {{ $userName }}
                        </h3>
                    </div>
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endsection

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@endsection
