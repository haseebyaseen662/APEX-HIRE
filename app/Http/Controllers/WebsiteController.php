<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }

    public function about()
    {
        return view('website.pages.about-us');
    }

    public function contact()
    {
        return view('website.pages.contact-us');
    }

    public function success()
    {
        return view('website.pages.success-stories');
    }

    public function browse()
    {
        return view('website.pages.browse-jobs');
    }

    public function privacy()
    {
        return view('website.pages.privacy-policy');
    }

    public function terms()
    {
        return view('website.pages.terms-condition');
    }
}
