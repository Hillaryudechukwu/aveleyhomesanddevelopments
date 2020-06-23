<?php

namespace App\Http\Controllers;

use App\Main;
use App\Mail\Feedback;
use App\Mail\contactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view('page.home');
    }
    public function about()
    {
       return \view('page.about');
    }
    
    public function gallery()
    {
        return \view('page.gallery');
    }
    
    public function blogs()
    {
        return \view('page.blog');
    }
    public function services()
    {
        return \view('page.services');
    }

    public function mail()
    {
   $name = 'Aveleyhomesanddevelopments';
   Mail::to('info@Aveleyhomesanddevelopments.co.uk')->send(new ContactEmail());
   
   return 'Email sent Successfully';

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('page.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = \request()->validate([
            'name'  => 'required',
            'email'  => 'required|email',
            'message'  => 'required',
        ]);
        
        Mail::to('info@Aveleyhomesanddevelopments.co.uk')->send( new Feedback($data));
        return \redirect('feedback')->with('message', 'Thank you for your message, we\'ll be in touch');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(Main $main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main $main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main $main)
    {
        //
    }
}
