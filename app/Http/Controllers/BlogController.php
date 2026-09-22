<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    /**
     * Show the blogs page.
     */
    public function index(Request $request): View
    {
        $activeNews = Blog::where('active', true)->with(['category', 'user'])->first();
        $query = Blog::where('active', false);

        if ($request->has('category')) {
            $category = BlogCategory::where('name', $request->category)->first();
            if ($category) {
                $query->where('blog_category_id', $category->id);
            }
        }

        $blogs = $query->with('category')->orderBy('created_at', 'desc')->paginate(3);
        $categories = BlogCategory::all();
        
        return view('blogs',
        [
            'activeNews'=> $activeNews,
            'blogs'=>$blogs,
            'categories'=>$categories,
        ]);
    }

    /**
     * Show the blog details page.
     */
    public function show(string $slug): View
    {
        $blog = Blog::where('slug', $slug)->with(['category', 'user'])->firstOrFail();
        $recentBlogs = Blog::where('id', '!=', $blog->id)
            ->with('category')
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get();

        return view('blog_details', [
            'blog' => $blog,
            'recentBlogs' => $recentBlogs,
        ]);
    }
}
