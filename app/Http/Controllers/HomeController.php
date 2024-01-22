<?php

namespace App\Http\Controllers;

use App\Services\GetGoogleSearch;
use App\Services\Contents;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function about()
    {
        $post = Contents::get('pages/hakkimizda');

        return view('about', compact('post'));
    }

    public function tos()
    {
        $post = Contents::get('pages/sartlar-ve-kosullar');

        return view('about', compact('post'));
    }

    public function gp()
    {
        $post = Contents::get('pages/gizlilik-politikasi');

        return view('about', compact('post'));
    }

    public function contact()
    {
        $post = Contents::get('pages/bize-ulasin');

        return view('about', compact('post'));
    }

    public function author($slug=null)
    {
        if (isset($slug)){
            $author = Contents::get('authors/'.$slug);
            return view('author-list', compact('author'));
        }else{
            $authors = Contents::get('authors');
            return view('author-detail', compact('authors'));
        }
    }

    public function page($categorySlug, $postSlug=null)
    {
        if (isset($postSlug)){
            Contents::get('category/'.$categorySlug);
            $post = Contents::get('contents/'.$postSlug);
            return view('post',compact('post'));
        }else{
            $category = Contents::get('category/'.$categorySlug)[0];
            return view('category',compact('category'));
        }
    }
}
