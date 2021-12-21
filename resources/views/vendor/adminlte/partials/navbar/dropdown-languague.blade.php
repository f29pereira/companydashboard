<li class="nav-item dropdown">
    {{-- Current Language --}}
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{-- Country Flag --}}
        <img src="{{ asset('images/countries/'.App::currentLocale().'.png') }}" alt="" width="30" height="20">
        {{-- Country Name --}}
        {{ Config::get('languages')[App::getLocale()]['display'] }}
    </a>
    {{-- Languages Dropdown --}}
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @foreach (Config::get('languages') as $language => $language_name)
            @if ($language !== App::currentLocale())
            <a class="dropdown-item" href="{{ url('/language/'. $language) }}">
                {{-- Country Flag --}}
                <img src="{{ asset('images/countries/'.$language.'.png') }}"
                alt="" width="30" height="20">
                {{-- Country Name --}}
                 {{$language_name['display']}}
            </a>
            @endif
        @endforeach
    </div>
</li>
