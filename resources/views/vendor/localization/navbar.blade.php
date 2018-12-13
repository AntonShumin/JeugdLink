@if (count(Localization::getSupportedLocales()) > 1)
    <div class="dropdown">
        <a class="dropdown-toggle btn-link btn" type="button" id="languages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            {{ strtoupper(Localization::getCurrentLocale()) }}
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="languages">
            @foreach(Localization::getSupportedLocales() as $key => $locale)
                <li class="{{ localization()->getCurrentLocale() == $key ? 'active' : '' }}">
                    <a href="{{ localization()->getLocalizedURL($key) }}" rel="alternate" hreflang="{{ $key  }}">
                        {{ $locale->key() }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif