<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\MailRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function mail(ContactFormRequest $request)
    {
        $data = $request->all();
//            dd($data);
        Mail::to('jonasvanreeth@gmail.com')->send(new MailRequest($data["mail"],$data["name"],$data["content"]));
    }
}
