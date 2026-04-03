<!-- Language Switcher -->
<div class="language-switcher dropdown">
    <a href="javascript:void(0)" class="lang-toggle" onclick="toggleLanguageDropdown(event)">
        <span><i class="feather feather-globe" style="font-size: 14px;"></i></span>
        {{ strtoupper(session('locale', config('app.locale'))) }}
    </a>
    <ul class="dropdown-menu" id="languageDropdownMenu">
        @foreach(config('app.available_locales') as $locale)
            <li>
                <a class="dropdown-item {{ session('locale') == $locale ? 'active' : '' }}" 
                   href="{{ route('locale.switch', $locale) }}">
                    @switch($locale)
                        @case('en')
                            🇬🇧 English
                            @break
                        @case('sk')
                            🇸🇰 Slovenčina
                            @break
                        @case('de')
                            🇩🇪 Deutsch
                            @break
                        @case('fr')
                            🇫🇷 Français
                            @break
                        @case('es')
                            🇪🇸 Español
                            @break
                        @default
                            {{ strtoupper($locale) }}
                    @endswitch
                </a>
            </li>
        @endforeach
    </ul>
</div>

<style>
.language-switcher {
    position: relative;
    display: inline-block;
}

.language-switcher .lang-toggle {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
}

.language-switcher .lang-toggle:hover {
    color: #ffc107;
}

.language-switcher .lang-toggle span {
    display: inline-flex;
    align-items: center;
}

.language-switcher .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    z-index: 9999;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    margin-top: 10px;
    padding: 5px 0;
    min-width: 150px;
    list-style: none;
}

.language-switcher .dropdown-menu.show {
    display: block;
}

.language-switcher .dropdown-menu li {
    margin: 0;
    padding: 0;
}

.language-switcher .dropdown-item {
    display: block;
    padding: 8px 15px;
    color: #333;
    text-decoration: none;
    white-space: nowrap;
}

.language-switcher .dropdown-item:hover {
    background-color: #f8f9fa;
}

.language-switcher .dropdown-item.active {
    background-color: #007bff;
    color: white;
}
</style>

<script>
function toggleLanguageDropdown(event) {
    event.preventDefault();
    event.stopPropagation();
    
    // Close currency dropdown if open
    const currencyMenu = document.getElementById('currencyDropdownMenu');
    if (currencyMenu) {
        currencyMenu.classList.remove('show');
    }
    
    // Toggle language dropdown
    const menu = document.getElementById('languageDropdownMenu');
    if (menu) {
        menu.classList.toggle('show');
    }
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    const switcher = document.querySelector('.language-switcher');
    const menu = document.getElementById('languageDropdownMenu');
    if (menu && switcher && !switcher.contains(e.target)) {
        menu.classList.remove('show');
    }
});
</script>
