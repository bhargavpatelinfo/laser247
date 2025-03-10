<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            [
                'loc' => url('/'),
                'lastmod' => now()->toAtomString(),
                'priority' => '1.0'
            ],
            [
                'loc' => url('/privacy-policy'),
                'lastmod' => now()->toAtomString(),
                'priority' => '0.5'
            ],
            [
                'loc' => url('/terms-and-conditions'),
                'lastmod' => now()->toAtomString(),
                'priority' => '0.5'
            ],
        ];

        $blogs = Post::latest()->get();
        foreach ($blogs as $blog) {
            $urls[] = [
                'loc' => url('/blog/' . $blog->slug),
                'lastmod' => $blog->updated_at->toAtomString(),
                'priority' => '0.5'
            ];
        }

        return Response::view('frontend.sitemap.index', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}
