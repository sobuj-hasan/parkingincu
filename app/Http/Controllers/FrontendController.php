<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['blogs'] = Blog::inRandomOrder()->limit(4)->get();
        return view('index', $data);
    }
    
    public function contactus(){
        return view('contactus');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function service(){
        return view('service');
    }

    public function spaceBooking(){
        return view('booking');
    }

    public function searchResult(){
        return view('search_result');
    }

    public function valetParking(){
        return view('valet_parking');
    }

    public function blogdetails($slug){
        $data['single_blog'] = Blog::where('slug', $slug)->firstOrFail();
        $data['related_blog'] = Blog::where('category_id', $data['single_blog']->category_id)->where('id', '!=', $data['single_blog']->id)->limit(4)->get();
        return view('blog_details', $data);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $subscribe = Subscribe::where('email', $request->email)->count();
        if ($subscribe != 0) {
            Notify::error('This email address already exists', 'Error');
            return back();
        }
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Subscribe::create($request->except('_token') + [
                'user_id' => $user_id,
            ]);
        } else {
            Subscribe::create($request->except('_token'));
        }
        Notify::success('Successfully Subscribed our newslatter', 'Congrats, Dear');
        return back();
    }

    public function contactmessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'inquery' => 'required',
            'service' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message Successfully Submited', 'Success');
        return back();
    }


}
