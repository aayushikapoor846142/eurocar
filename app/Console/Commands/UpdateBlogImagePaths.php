<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Blog;

class UpdateBlogImagePaths extends Command
{
    protected $signature = 'blog:update-image-paths';
    protected $description = 'Update blog image paths to use common format';

    public function handle()
    {
        $blogs = Blog::all();
        $updated = 0;

        foreach ($blogs as $blog) {
            if ($blog->featured_image) {
                // Remove 'public/' prefix if exists
                $newPath = str_replace('public/storage/', 'storage/', $blog->featured_image);
                
                if ($newPath !== $blog->featured_image) {
                    $blog->featured_image = $newPath;
                    $blog->save();
                    $updated++;
                }
            }
        }

        $this->info("Updated {$updated} blog image paths.");
        return 0;
    }
}
