<?php

namespace App\Http\Controllers;

use App\Category;
use App\Setting;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::take(4)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('first_highlight', Category::where('name', 'PHP')->first())
            ->with('second_highlight', Category::where('name', 'Laravel')->first())
            ->with('third_highlight', Category::where('name', 'Magento')->first())
            ->with('settings', Setting::first());
    }

    /**
     * Display a single post
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $prevId = Post::where('id', '<', $post->id)->max('id');
        $nextId = Post::where('id', '>', $post->id)->min('id');

        return view('single')->with('post', $post)
            ->with('title', $post->title)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(4)->get())
            ->with('prev', Post::find($prevId))
            ->with('next', Post::find($nextId));
    }

    /**
     * Display post for a single category
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $category = Category::find($id);

        return view('category')
            ->with('category', $category)
            ->with('title', $category->name)
            ->with('categories', Category::take(4)->get())
            ->with('settings', Setting::first());
    }

    /**
     * Display posts for a single tag
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')
            ->with('tag', $tag)
            ->with('title', $tag->tag)
            ->with('categories', Category::take(4)->get())
            ->with('settings', Setting::first());
    }
}
