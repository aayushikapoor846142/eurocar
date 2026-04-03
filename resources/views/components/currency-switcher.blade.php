<!-- Currency Switcher -->
<div class="currency-switcher dropdown">
    <a href="javascript:void(0)" class="currency-toggle" onclick="toggleCurrencyDropdown(event)">
        <span><i class="feather feather-dollar-sign" style="font-size: 14px;"></i></span>
        {{ session('currency', config('app.default_currency')) }}
    </a>
    <ul class="dropdown-menu currency-dropdown-menu" id="currencyDropdownMenu">
        @foreach(config('app.available_currencies') as $currency)
            <li>
                <a class="dropdown-item {{ session('currency') == $currency ? 'active' : '' }}" 
                   href="{{ route('currency.switch', $currency) }}">
                    {{ config('app.currency_symbols')[$currency] ?? '' }} {{ $currency }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<style>
.currency-switcher {
    position: relative;
    display: inline-block;
}

.currency-switcher .currency-toggle {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
    padding: 5px 10px;
}

.currency-switcher .currency-toggle:hover {
    color: #ffc107;
}

.currency-switcher .currency-toggle span {
    display: inline-flex;
    align-items: center;
}

.currency-switcher .currency-dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    z-index: 10000;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    margin-top: 10px;
    padding: 5px 0;
    min-width: 120px;
    list-style: none;
}

.currency-switcher .currency-dropdown-menu.show {
    display: block !important;
}

.currency-switcher .currency-dropdown-menu li {
    margin: 0;
    padding: 0;
}

.currency-switcher .dropdown-item {
    display: block;
    padding: 8px 15px;
    color: #333;
    text-decoration: none;
    white-space: nowrap;
}

.currency-switcher .dropdown-item:hover {
    background-color: #f8f9fa;
}

.currency-switcher .dropdown-item.active {
    background-color: #007bff;
    color: white;
}
</style>

<script>
function toggleCurrencyDropdown(event) {
    event.preventDefault();
    event.stopPropagation();
    
    // Close language dropdown if open
    const langMenu = document.getElementById('languageDropdownMenu');
    if (langMenu) {
        langMenu.classList.remove('show');
    }
    
    // Toggle currency dropdown
    const menu = document.getElementById('currencyDropdownMenu');
    if (menu) {
        menu.classList.toggle('show');
    }
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    const switcher = document.querySelector('.currency-switcher');
    const menu = document.getElementById('currencyDropdownMenu');
    if (menu && switcher && !switcher.contains(e.target)) {
        menu.classList.remove('show');
    }
});
</script>
