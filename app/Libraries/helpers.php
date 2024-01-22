<?php

use App\Services\Contents;
use Illuminate\Support\Facades\Cache;

if (!function_exists('menu')) {
    function menu(){

        if (Cache::has('menuList')) {
            $menuList = Cache::get('menuList');
        } else {
            $menuList = Contents::get('menu');
            Cache::forever('menuList', $menuList);
        }

        return $menuList;
    }
}

if (!function_exists('category')) {
    function category(){

        if (Cache::has('categoryList')) {
            $categoryList = Cache::get('categoryList');
        } else {
            $categoryList = Contents::get('category');
            Cache::forever('categoryList', $categoryList);
        }

        return $categoryList;
    }
}

if (!function_exists('home')) {

    function home($cacheMin=null){

        if (Cache::has('homeList')) {
            $homeList = Cache::get('homeList');
        } else {
            $homeList = Contents::get('accounts/homepage');
            Cache::put('homeList', $homeList, $cacheMin);
        }

        return $homeList;
    }
}

if (!function_exists('footer')) {
    function footer($index){

        if (Cache::has('footer')) {
            $footer = Cache::get('footer');
        } else {
            $first = Contents::get('footer?page=1');
            $second = Contents::get('footer?page=2');
            $third = Contents::get('footer?page=3');
            $footer = [$first,$second,$third];
            Cache::put('footer', $footer);
        }

        return $footer[$index];
    }
}

if (!function_exists('lasest')) {
    function lasest($index){

        if (Cache::has('lasest')) {
            $lasest = Cache::get('lasest');
        } else {
            $first = Contents::get('footer?page=4');
            $second = Contents::get('footer?page=5');
            $third = Contents::get('footer?page=6');
            $lasest = [$first,$second,$third];
            Cache::put('lasest', $lasest);
        }

        return $lasest[$index];
    }
}


if (!function_exists('image')) {

    function image($url, $width, $height){
        return $url.'?fm=webp&w='.$width.'&h='.$height.'&fit=crop';
    }
}
