<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\BlogTag;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        // Create tags first
        $tags = [
            'Travel Tips',
            'Airport Transfer',
            'Europe Travel',
            'Car Rental',
            'Day Trips',
            'Multi-day Tours',
            'Slovakia',
            'Austria',
            'Czech Republic',
            'Hungary',
        ];

        $createdTags = [];
        foreach ($tags as $tagName) {
            $createdTags[] = BlogTag::firstOrCreate(
                ['slug' => Str::slug($tagName)],
                ['name' => $tagName]
            );
        }

        // Create blog posts
        $blogs = [
            [
                'title' => 'Top 10 Must-Visit Destinations in Central Europe',
                'content' => '<p>Central Europe is a treasure trove of history, culture, and breathtaking landscapes. Whether you\'re planning a multi-day tour or a quick day trip, these destinations should be on your list.</p>

<h3>1. Vienna, Austria</h3>
<p>The imperial capital offers stunning architecture, world-class museums, and delicious coffee culture. Our transfer service can take you from Bratislava to Vienna in just 1 hour.</p>

<h3>2. Prague, Czech Republic</h3>
<p>The "City of a Hundred Spires" enchants visitors with its medieval charm and vibrant nightlife. Perfect for a 2-3 day trip from Slovakia.</p>

<h3>3. Budapest, Hungary</h3>
<p>Famous for its thermal baths, ruin bars, and the stunning Parliament building. We offer comfortable transfers with optional stops at scenic viewpoints.</p>

<h3>4. Bratislava, Slovakia</h3>
<p>Our home base! Don\'t miss the charming Old Town, Bratislava Castle, and the UFO observation deck.</p>

<h3>5. Salzburg, Austria</h3>
<p>Mozart\'s birthplace and the setting for The Sound of Music. Ideal for music lovers and mountain enthusiasts.</p>

<p>Contact us to plan your perfect Central European adventure with comfortable, reliable transfers between all these amazing destinations!</p>',
                'excerpt' => 'Discover the most beautiful destinations in Central Europe and how to travel between them comfortably with our transfer services.',
                'author_name' => 'Robert Novak',
                'publish_date' => now()->subDays(30),
                'featured_image' => 'storage/blog-images/Small Europe1.jpg',
                'tags' => ['Europe Travel', 'Travel Tips', 'Multi-day Tours'],
            ],

            [
                'title' => 'Airport Transfer Guide: Vienna International Airport to Bratislava',
                'content' => '<p>Traveling between Vienna International Airport (VIE) and Bratislava? Here\'s everything you need to know about the most convenient transfer options.</p>

<h3>Why Choose Private Transfer?</h3>
<p>While public transportation is available, a private transfer offers unmatched convenience, especially after a long flight. Our drivers monitor flight arrivals and wait for you with a name sign.</p>

<h3>Journey Details</h3>
<ul>
<li><strong>Distance:</strong> Approximately 60 km</li>
<li><strong>Duration:</strong> 45-60 minutes depending on traffic</li>
<li><strong>Price:</strong> Competitive rates with no hidden fees</li>
<li><strong>Comfort:</strong> Modern, air-conditioned vehicles</li>
</ul>

<h3>What to Expect</h3>
<p>Our professional drivers will meet you at the arrivals hall, help with luggage, and ensure a smooth, comfortable ride to your destination in Bratislava. We offer free waiting time and flight tracking.</p>

<h3>Booking Tips</h3>
<p>Book in advance for the best rates and guaranteed availability. We accept online payments and offer 24/7 customer support.</p>',
                'excerpt' => 'Complete guide to traveling from Vienna Airport to Bratislava with private transfer services. Fast, comfortable, and reliable.',
                'author_name' => 'Robert Novak',
                'publish_date' => now()->subDays(25),
                'featured_image' => 'storage/blog-images/vienna-location.jpg',
                'tags' => ['Airport Transfer', 'Travel Tips', 'Slovakia', 'Austria'],
            ],

            [
                'title' => 'Best Day Trips from Bratislava: Explore Central Europe',
                'content' => '<p>Bratislava\'s central location makes it the perfect base for exploring Central Europe. Here are our top recommendations for unforgettable day trips.</p>

<h3>Vienna, Austria (1 hour)</h3>
<p>Visit the Schönbrunn Palace, stroll through the historic center, and enjoy a slice of Sachertorte. Perfect for a full-day excursion.</p>

<h3>Budapest, Hungary (2.5 hours)</h3>
<p>Experience the thermal baths, cruise on the Danube, and explore the Castle District. We recommend starting early to maximize your time.</p>

<h3>Český Krumlov, Czech Republic (3 hours)</h3>
<p>This UNESCO World Heritage site is like stepping into a fairy tale. The medieval castle and charming streets are worth the journey.</p>

<h3>Hallstatt, Austria (3.5 hours)</h3>
<p>One of the most photographed villages in the world. The alpine scenery and lakeside setting are breathtaking.</p>

<h3>Why Book with Us?</h3>
<p>Our day trip service includes flexible departure times, optional stops, English-speaking drivers, and comfortable vehicles. We handle the driving while you enjoy the scenery!</p>',
                'excerpt' => 'Discover amazing day trip destinations from Bratislava. From Vienna to Budapest, explore Central Europe with our comfortable transfer service.',
                'author_name' => 'Robert Novak',
                'publish_date' => now()->subDays(20),
                'featured_image' => 'storage/blog-images/hallstatt.jpg',
                'tags' => ['Day Trips', 'Europe Travel', 'Travel Tips', 'Slovakia'],
            ],

            [
                'title' => 'Ski Transfer Services: Your Guide to Alpine Resorts',
                'content' => '<p>Planning a ski holiday in the Alps? Our specialized ski transfer service ensures you reach the slopes safely and comfortably, even in winter conditions.</p>

                <h3>Popular Ski Destinations We Serve</h3>
                <ul>
                <li><strong>Jasná, Slovakia:</strong> The largest ski resort in Slovakia with modern facilities</li>
                <li><strong>Schladming, Austria:</strong> World Cup venue with excellent slopes</li>
                <li><strong>Zell am See, Austria:</strong> Year-round skiing with stunning lake views</li>
                <li><strong>Špindlerův Mlýn, Czech Republic:</strong> Family-friendly resort in the Giant Mountains</li>
                </ul>

                <h3>Why Choose Our Ski Transfer?</h3>
                <p>We understand the unique needs of ski travelers. Our vehicles have ample space for ski equipment, and our drivers are experienced in winter driving conditions.</p>

                <h3>Services Include</h3>
                <ul>
                <li>Door-to-door service from airports or hotels</li>
                <li>Secure ski and snowboard storage</li>
                <li>Winter tires and safety equipment</li>
                <li>Flexible pickup times</li>
                <li>Group discounts available</li>
                </ul>

                <p>Book your ski transfer early, especially during peak season (December-March), to ensure availability.</p>',
                                'excerpt' => 'Professional ski transfer services to top Alpine resorts. Safe, comfortable transportation with equipment storage for your winter holiday.',
                                'author_name' => 'Robert Novak',
                                'publish_date' => now()->subDays(15),
                                'featured_image' => 'storage/blog-images/salzburg.jpg',
                                'tags' => ['Travel Tips', 'Slovakia', 'Austria', 'Czech Republic'],
                            ],

                            [
                                'title' => 'Hourly Car Rental with Driver: Perfect for Business and Tourism',
                                'content' => '<p>Need flexible transportation for business meetings, city tours, or special events? Our hourly car rental with professional driver service offers the ultimate convenience.</p>

                <h3>How It Works</h3>
                <p>Book our service by the hour (minimum 3 hours) and enjoy the freedom to create your own itinerary. Your driver will wait for you at each location and be ready when you are.</p>

                <h3>Perfect For:</h3>
                <ul>
                <li><strong>Business:</strong> Multiple meetings across the city or region</li>
                <li><strong>Tourism:</strong> Customized sightseeing at your own pace</li>
                <li><strong>Shopping:</strong> Visit multiple locations without parking hassles</li>
                <li><strong>Events:</strong> Weddings, conferences, or special occasions</li>
                <li><strong>Photography:</strong> Reach multiple scenic locations efficiently</li>
                </ul>

                <h3>Benefits</h3>
                <ul>
                <li>No parking stress or navigation worries</li>
                <li>Professional, discreet drivers</li>
                <li>Luxury and comfort vehicles available</li>
                <li>Flexible schedule changes</li>
                <li>Transparent hourly rates</li>
                </ul>

                <h3>Popular Routes</h3>
                <p>Bratislava city tour, wine region visits, business district transfers, or create your own custom route. Our drivers know the area well and can suggest optimal routes.</p>

                <p>Contact us to discuss your needs and receive a customized quote for hourly rental services.</p>',
                'excerpt' => 'Flexible hourly car rental with professional driver. Perfect for business, tourism, and special events. Create your own schedule.',
                'author_name' => 'Robert Novak',
                'publish_date' => now()->subDays(10),
                'featured_image' => 'storage/blog-images/standard-car.png',
                'tags' => ['Car Rental', 'Travel Tips'],
            ],

            [
                'title' => '5 Reasons to Choose Private Transfer Over Public Transport',
                'content' => '<p>While public transportation has its place, private transfers offer significant advantages, especially for travelers. Here\'s why thousands of customers choose our service.</p>

                <h3>1. Time Efficiency</h3>
                <p>Direct routes mean no stops, no transfers, and no waiting. What takes 2-3 hours by public transport often takes just 1 hour with our service.</p>

                <h3>2. Comfort and Privacy</h3>
                <p>Enjoy air-conditioned vehicles, comfortable seating, and privacy for conversations or rest. Perfect after a long flight or before an important meeting.</p>

                <h3>3. Door-to-Door Service</h3>
                <p>We pick you up and drop you off exactly where you need to be. No walking with heavy luggage to bus or train stations.</p>

                <h3>4. Luggage Handling</h3>
                <p>Traveling with ski equipment, golf clubs, or multiple suitcases? Our vehicles have ample space, and drivers assist with loading.</p>

                <h3>5. Fixed Pricing</h3>
                <p>Know the cost upfront with no surprises. Unlike taxis with meters, our prices are agreed in advance and include all fees.</p>

                <h3>Additional Benefits</h3>
                <ul>
                <li>Flight tracking and free waiting time</li>
                <li>English-speaking drivers</li>
                <li>Child seats available on request</li>
                <li>24/7 customer support</li>
            <li>Clean, well-maintained vehicles</li>
                </ul>

                <p>For the small price difference, the convenience and peace of mind are invaluable, especially when traveling in unfamiliar areas.</p>',
                'excerpt' => 'Discover why private transfers are worth the investment. Compare the benefits of private transport versus public options for travelers.',
                'author_name' => 'Robert Novak',
                'publish_date' => now()->subDays(5),
                'featured_image' => 'storage/blog-images/car-pic1.png',
                'tags' => ['Travel Tips', 'Airport Transfer'],
            ],
        ];

        // Create blogs and attach tags
        foreach ($blogs as $blogData) {
            $tagNames = $blogData['tags'];
            unset($blogData['tags']);

            $slug = Str::slug($blogData['title']);
            
            $blog = Blog::firstOrCreate(
                ['slug' => $slug],
                [
                    'unique_id' => Str::uuid()->toString(),
                    'title' => $blogData['title'],
                    'content' => $blogData['content'],
                    'excerpt' => $blogData['excerpt'],
                    'author_name' => $blogData['author_name'],
                    'publish_date' => $blogData['publish_date'],
                    'featured_image' => $blogData['featured_image'],
                    'meta_title' => $blogData['title'],
                    'meta_description' => $blogData['excerpt'],
                    'is_published' => true,
                    'views_count' => rand(50, 500),
                ]
            );

            // Attach tags (sync to avoid duplicates)
            $tagIds = BlogTag::whereIn('name', $tagNames)->pluck('id');
            $blog->tags()->sync($tagIds);
        }

        $this->command->info('Blog posts and tags created successfully!');
    }
}
