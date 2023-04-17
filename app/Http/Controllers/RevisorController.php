<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Insertion;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function __construct(){
        $this->middleware('isRevisor')->except('becomeRevisor', 'makeRevisor');
    }
    public function index()
    {
        $insertion_to_check = Insertion::where('is_accepted', null)->first();
        return view('revisor.index', compact('insertion_to_check'));
    }
    public function show(Insertion $insertion)
    {
        $current_insertion = Insertion::find('id', $insertion->id);
        return view('revisor.index', compact('current_insertion'));
    }

    public function acceptInsertion(Insertion $insertion){
        $insertion->setAccepted(true);
        return redirect()->back()->with('message', __('ui.acceptedInsertion'));
    }
    public function denyInsertion(Insertion $insertion){
        $insertion->setAccepted(false);
        return redirect()->back()->with('message', __('ui.denyedInsertion'));
    }
    public function undo()
    {
        $insertion = Insertion::where('is_accepted', '!=', NULL)->orderBy('updated_at', 'DESC')->first();
        $insertion->setAccepted(NULL);
        return redirect()->back()->with('message', __('ui.undoLast'));
    }

    public function becomeRevisor(Request $request){
        $extra_informations = User::find(Auth::user()->id)->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'date' => $request->date,
            'description' => $request->description
        ]);
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('Message', __('ui.revisorRequestSent'));
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ['email'=>$user->email]);
        return redirect('/')->with('message', __('ui.revisorRequestAccepted'));
    }
}

