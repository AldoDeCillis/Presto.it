<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BuyerMail;
use App\Models\Insertion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InsertionController extends Controller
{  public function __construct(){
    $this->middleware('auth')->except('index','show');
}

      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insertions = Insertion::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(4) ;
        return view('insertion.index', compact('insertions'));
    }

    public function create()
    {
        return view('insertion.create');
    }


    public function show(Insertion $insertion)
    {
        return view('insertion.show', compact('insertion'));
    }


    public function edit(Insertion $insertion)
    {
        return view('insertion.edit', compact('insertion'));
    }

    public function contactSeller(Insertion $insertion){
        $seller = User::find($insertion->user_id);
        $sellerEmail = $seller->email;
        Mail::to($sellerEmail)->send(new BuyerMail($insertion));
        return redirect()->back()->with('mailSent', 'Il venditore è stato contattato, riceverai una risposta a breve!');
    }
}
