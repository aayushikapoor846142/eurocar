# Usage Examples - Europe Car Transfer

## Currency Conversion in Blade Templates

### Method 1: Using the @currency Blade Directive (Recommended)
```blade
<!-- Simple usage - converts from EUR to user's selected currency -->
<div class="price">@currency($car->price)</div>

<!-- This will automatically:
  1. Convert from EUR to user's selected currency
  2. Format with proper decimals
  3. Add currency symbol
-->
```

### Method 2: Using the Helper Class Directly
```blade
<!-- Convert and format -->
<div class="price">
    {{ \App\Helpers\CurrencyHelper::format(
        \App\Helpers\CurrencyHelper::convert($car->price, 'EUR', session('currency', 'EUR'))
    ) }}
</div>

<!-- Just convert (no formatting) -->
<div class="price">
    {{ \App\Helpers\CurrencyHelper::convert($car->price, 'EUR', 'USD') }}
</div>

<!-- Get current currency -->
<div>Current currency: {{ \App\Helpers\CurrencyHelper::current() }}</div>
```

### Example: Update Car Price Display
In `resources/views/frontend/cars/index.blade.php`, replace:
```blade
<!-- OLD -->
<div class="text-slate">{{ number_format($car->price, 2) }} €</div>

<!-- NEW -->
<div class="text-slate">@currency($car->price)</div>
```

---

## Translation in Blade Templates

### Using Translation Keys
```blade
<!-- Simple translation -->
<h1>@trans('messages.welcome')</h1>

<!-- With parameters -->
<p>{{ __('messages.greeting', ['name' => $user->name]) }}</p>

<!-- In forms -->
<label>{{ __('forms.pickup_location') }}</label>
```

### Create Translation Files
Create these files:

**resources/lang/en/messages.php**
```php
<?php
return [
    'welcome' => 'Welcome to Europe Car Transfer',
    'search' => 'Search',
    'book_now' => 'Book Now',
    'pickup_location' => 'Pick up Location',
    'dropoff_location' => 'Drop off Location',
];
```

**resources/lang/sk/messages.php**
```php
<?php
return [
    'welcome' => 'Vitajte v Europe Car Transfer',
    'search' => 'Hľadať',
    'book_now' => 'Rezervovať',
    'pickup_location' => 'Miesto vyzdvihnutia',
    'dropoff_location' => 'Miesto odovzdania',
];
```

---

## WhatsApp Integration Examples

### Custom WhatsApp Message
```blade
<!-- In any view -->
<a href="https://wa.me/{{ config('app.whatsapp_number') }}?text={{ urlencode('I need a transfer from Airport to Hotel') }}" 
   target="_blank">
    Contact us on WhatsApp
</a>
```

### Dynamic Message with Car Details
```blade
<a href="https://wa.me/{{ config('app.whatsapp_number') }}?text={{ urlencode('I am interested in ' . $car->title . ' for ' . $car->price . '€') }}" 
   target="_blank" 
   class="btn btn-success">
    <i class="fa fa-whatsapp"></i> Inquire via WhatsApp
</a>
```

---

## Search Form Examples

### Transfer Search
```blade
<form action="{{ route('cars.search') }}" method="GET">
    <input type="hidden" name="type" value="transfer">
    <input type="text" name="pickup_location" placeholder="Pick up location">
    <input type="text" name="dropoff_location" placeholder="Drop off location">
    <input type="date" name="pickup_date">
    <select name="adults">
        <option value="1">1 Adult</option>
        <option value="2">2 Adults</option>
    </select>
    <button type="submit">Search</button>
</form>
```

### Day Trip Search
```blade
<form action="{{ route('cars.search') }}" method="GET">
    <input type="hidden" name="type" value="daytrip">
    <input type="text" name="destination" placeholder="Destination">
    <input type="date" name="trip_date">
    <select name="adults">
        <option value="1">1 Adult</option>
    </select>
    <button type="submit">Search</button>
</form>
```

---

## Blog Integration

### Display Latest Blog Posts
```blade
<!-- In any view -->
@php
    $latestPosts = \App\Models\Blog::where('is_published', true)
                                   ->latest()
                                   ->take(3)
                                   ->get();
@endphp

<div class="blog-section">
    <h2>Latest Travel Tips</h2>
    <div class="row">
        @foreach($latestPosts as $post)
        <div class="col-md-4">
            <div class="blog-card">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                <h3>{{ $post->title }}</h3>
                <p>{{ Str::limit($post->excerpt, 100) }}</p>
                <a href="{{ route('blog.show', $post->slug) }}">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
```

### Blog Post with Tags
```blade
<!-- In blog detail page -->
<article>
    <h1>{{ $post->title }}</h1>
    <div class="meta">
        <span>{{ $post->created_at->format('M d, Y') }}</span>
        <div class="tags">
            @foreach($post->tags as $tag)
                <a href="{{ route('blog.tag', $tag->slug) }}" class="badge">
                    {{ $tag->name }}
                </a>
            @endforeach
        </div>
    </div>
    <div class="content">
        {!! $post->content !!}
    </div>
</article>
```

---

## Price Range Display (For Estimated Pricing)

### Show Price Range Instead of Fixed Price
```blade
<!-- If you want to show "From X to Y" pricing -->
<div class="price-range">
    <span class="label">Price Range:</span>
    <span class="range">
        From @currency($car->price_from) to @currency($car->price_to)
    </span>
    <a href="#" class="btn btn-outline">Request Quote</a>
</div>

<!-- Or show "Starting from" -->
<div class="starting-price">
    <span class="label">Starting from</span>
    <span class="price">@currency($car->price)</span>
    <small>*Final price upon request</small>
</div>
```

---

## Middleware Usage

### Register Locale Middleware
Add to `bootstrap/app.php` or `app/Http/Kernel.php`:

```php
protected $middlewareGroups = [
    'web' => [
        // ... other middleware
        \App\Http\Middleware\SetLocale::class,
    ],
];
```

---

## Controller Examples

### Get Cars with Currency Conversion
```php
public function index()
{
    $cars = Car::where('is_active', true)->get();
    
    // Convert prices for display
    $cars->transform(function($car) {
        $car->display_price = CurrencyHelper::format(
            CurrencyHelper::convert($car->price, 'EUR', CurrencyHelper::current())
        );
        return $car;
    });
    
    return view('cars.index', compact('cars'));
}
```

### Search with Filters
```php
public function search(Request $request)
{
    $query = Car::query();
    
    // Filter by type
    if ($request->has('type')) {
        switch($request->type) {
            case 'transfer':
                // Add transfer-specific logic
                break;
            case 'daytrip':
                // Add day trip logic
                break;
        }
    }
    
    // Filter by passengers
    $totalPassengers = $request->adults + $request->children;
    if ($totalPassengers > 0) {
        $query->where('seats', '>=', $totalPassengers);
    }
    
    $cars = $query->paginate(12);
    
    return view('cars.index', compact('cars'));
}
```

---

## JavaScript Examples

### WhatsApp Widget Toggle
```javascript
// Already included in whatsapp-widget.blade.php
document.getElementById('whatsappButton').addEventListener('click', function() {
    document.getElementById('whatsappChatBox').classList.toggle('active');
});
```

### Currency Switcher with AJAX (Optional Enhancement)
```javascript
// Update prices without page reload
document.querySelectorAll('.currency-switcher a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const currency = this.dataset.currency;
        
        fetch(`/currency/${currency}`)
            .then(() => {
                // Reload prices via AJAX or refresh page
                location.reload();
            });
    });
});
```

---

## Testing Commands

```bash
# Clear cache after changes
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Test routes
php artisan route:list | grep cars
php artisan route:list | grep blog

# Run migrations (if you add new fields)
php artisan migrate

# Seed test data
php artisan db:seed
```

---

## Quick Checklist

- [ ] Add WhatsApp number to .env
- [ ] Add WhatsApp avatar image
- [ ] Test all 4 search categories
- [ ] Test language switcher
- [ ] Test currency switcher
- [ ] Create translation files for your languages
- [ ] Test blog functionality
- [ ] Test WhatsApp widget on mobile
- [ ] Update car prices display with @currency directive
- [ ] Test search filters

---

Need help with any of these? Just ask!
