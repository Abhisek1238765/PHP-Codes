<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function aboutus(): string
    {
        return view('about_us');
    }

    public function chairmanmessage(): string
    {
        return view('chairmanmessage');
    }

    public function authorisation(): string
    {
        return view('authorization');
    }

    public function projects(): string
    {
        return view('oroavenue');
    }

    public function faq(): string
    {
        return view('faq');
    }

    public function gallery(): string
    {
        return view('gallery');
    }

    public function blog(): string
    {
        return view('blog');
    }

    public function contact(): string
    {
        return view('contact_us');
    }
}
