<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Insertion;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function showCategory(Category $category)
    {

        return view('category', compact('category'));
    }
    public function showRevisorForm()
    {
        return view('becomeRevisor');
    }

    public function showHomepage()
    {
        $insertions = Insertion::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('insertions'));
    }
    public function showProfile(){
        $insertions = Insertion::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('profile', compact('insertions'));
    }

    public function searchInsertions(Request $request)
    {
        $insertions = Insertion::search($request->searched)->where('is_accepted', true)->paginate(5);

        return view('insertion.index', compact('insertions'));
    }

    public function setLanguage($lang)
	{
		session()->put('locale', $lang);
		return redirect()->back();
	}
    public function changeAvatar(User $user, Request $request){
        $user->update([
            'avatar' => $request->file('avatar')->store('public/avatars'),
        ]);
        return redirect()->back();
    }
}
