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
                <div class="card card-info">
                    {{-- Card Header --}}
                    <div class="card-header d-flex justify-content-between">
                        {{-- Return: Companies List --}}
                        <a href="{{ url('/companies/index') }}" data-toggle="tooltip" data-placement="right" title="Lista de Empresas">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title"><i class="far fa-building fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Editar Empresa</h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                             data-toggle="tooltip" data-placement="right" title="Editar dados de empresa"></i>
                        </div>
                        {{-- Edit Company Form --}}
                        <form action="/companies/update/{{ $company->id }}" method="POST">
                            @csrf

                            <div class="row">
                                {{-- Company Name --}}
                                <div class="col-md-4 mb-3  mr-5">
                                    <div class="form-group">
                                        <label for="companyName" class="form-label">Empresa</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="company_name" value="{{ $company->company_name }}" id="companyName">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="far fa-building text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('company_name')
                                            <div><p class="text-danger">{{ $message }}</p></div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Company Bussiness Sector --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companySector" class="form-label">Setor de Atividade</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="sector" value="{{ $company->sector }}" id="companySector">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-briefcase text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('sector')
                                            <div><p class="text-danger">{{ $message }}</p></div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                {{-- Company Website --}}
                                <div class="col-md-4 mb-3 mr-5">
                                    <div class="form-group">
                                        <label for="companyPhone" class="form-label">Telefone</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="company_phone" value="{{ $company->company_phone }}" id="companyPhone">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-phone-alt text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('company_phone')
                                            <div><p class="text-danger">{{ $message }}</p></div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Company Headquarters --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companyHeadquarters" class="form-label">Localização</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="headquarters" value="{{ $company->headquarters }}" id="companyHeadquarters">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-map-marked-alt text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('headquarters')
                                            <div><p class="text-danger">{{ $message }}</p></div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 {{-- Company Website --}}
                                 <div class="col-md-4 mb-3 mr-5">
                                    <div class="form-group">
                                        <label for="companyWebsite" class="form-label">Website</label>
                                        <div class="input-group">
                                            <input type="url" class="form-control" name="website" value="{{ $company->website }}" id="companyWebsite">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-desktop text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('website')
                                            <div><p class="text-danger">{{ $message }}</p></div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Company Type --}}
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="companyType" class="form-label">Relação com {{ $mainCompany->company_name }}</label>
                                        <div class="input-group">
                                            <select class="form-control" name="company_types_id" id="companyType">
                                                @foreach ($companyTypes as $companyType)
                                                    <option value="{{ $companyType->id }}" {{ $companyType->id == $company->company_types_id ? 'selected' : ''}}>
                                                        {{ $companyType->type_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="far fa-handshake text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('company_types_id')
                                            <div><p class="text-danger">{{ $message }}</p></div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    {{-- Company Description --}}
                                    {{-- <div id="summernote" name="company_description"></div> --}}
                                    <div class="form-group">
                                        <label for="">Descrição</label>
                                    </div>
                                    <textarea name="company_description" id="summernote" cols="30" rows="10"></textarea>
                                    {{-- Error Message --}}
                                    @error('company_description')
                                    <div><p class="text-danger">{{ $message }}</p></div>
                                @enderror
                                </div>
                            </div>
                            {{-- Confirm/Cancel --}}
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="submit" class="btn bg-gradient-success btn-sm mr-3"><i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;Confirmar</button>
                                    <button type="reset" class="btn bg-gradient-danger btn-sm"><i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;Cancelar</button>
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
