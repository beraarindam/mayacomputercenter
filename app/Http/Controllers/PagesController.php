<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home
    public function index()
    {
        return view('frontend.index');
    }

    // About
    public function director()
    {
        return view('frontend.director');
    }

    public function teacher()
    {
        return view('frontend.teacher');
    }


    // Verification
    public function registration()
    {
        return view('frontend.registration');
    }

    public function icard()
    {
        return view('frontend.icard');
    }

    public function result()
    {
        return view('frontend.result');
    }

    public function certificate()
    {
        return view('frontend.certificate');
    }

    public function typing()
    {
        return view('frontend.typing');
    }

    // Downloads
    public function franchisee()
    {
        return view('frontend.franchisee');
    }

    public function admission()
    {
        return view('frontend.admission');
    }

    public function companyCertificate()
    {
        return view('frontend.company-certificate');
    }

    public function pancard()
    {
        return view('frontend.pancard');
    }

    public function udyam()
    {
        return view('frontend.udyam');
    }

    public function startup()
    {
        return view('frontend.startup');
    }

    public function iso()
    {
        return view('downloads.iso');
    }

    public function trademark()
    {
        return view('frontend.trademark');
    }

    // Gallery
    public function gallery()
    {
        return view('frontend.gallery');
    }

    // Contact
    public function contact()
    {
        return view('frontend.contact');
    }
}
