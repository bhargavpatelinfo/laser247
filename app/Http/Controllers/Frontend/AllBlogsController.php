<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SiteSetting;

class AllBlogsController extends Controller
{
    public function allBlogs()
    {
        $blogs = Post::all();
        $siteSettings = SiteSetting::first();
        $title = "Latest Blogs | " . $siteSettings->site_title;
        
        // Generate full image URL for Open Graph
        $image = asset("uploads/logo/" . $siteSettings->logo_dark);
    
        return view('frontend.blogs.index', compact('blogs', 'title', 'image'));
    }
    
}
