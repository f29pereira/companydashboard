{{-- Current Language --}}
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{-- Country Flag --}}
    <img src="{{ asset('images/countries/'.App::currentLocale().'.png') }}"
    alt="{{ Config::get('languages')[App::getLocale()]['display'] }}" width="25" height="15">
</a>
{{-- Languages Dropdown --}}
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    {{-- Dropdown Header --}}
    <h3 class="dropdown-header">
        <i class="fas fa-language fa-lg text-info"></i>&nbsp;&nbsp;&nbsp;
        <strong>{{ __('page.generic.language') }}</strong>
    </h3>
    {{-- /.Dropdown Header --}}
    {{-- Dropdown Items --}}
    @foreach (Config::get('languages') as $language => $language_name)
        @if ($language !== App::currentLocale())
        <a class="dropdown-item" href="{{ url('/language/'. $language) }}">
            {{-- Country Flag --}}
            <img src="{{ asset('images/countries/'.$language.'.png') }}"
            alt="{{$language_name['display']}}" width="25" height="15">
        </a>
        @endif
        @endforeach
    {{-- /.Dropdown Items --}}
</div>

