<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use App\Models\Neighborhost;
use App\Models\Parkingspace;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['parking_spaces'] = Parkingspace::where('status', 1)->get();
        $data['blogs'] = Blog::inRandomOrder()->limit(3)->get();
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

    public function spaceBooking($slug){
        $data['single_space'] = Parkingspace::where('slug', $slug)->firstOrFail();
        return view('booking', $data);
    }

    public function searchResult(Request $request){

        $query = Parkingspace::query();
        if ($request->parking_space) {
            $data['parking_space'] = $request->parking_space;
            $query          = $query->where('name', "$request->parking_space");
        }
        if ($request->parking_city) {
            $data['parking_city'] = $request->parking_city;
            $query =  $query->where('city', $request->parking_city);
        }
        if ($request->parking_address) {
            $data['parking_address'] = $request->parking_address;
            $query =  $query->where('address', $request->parking_address);
        }
        $data['search_results'] = $query->where('status', 1)->limit(12)->get();

        $data['parking_spaces'] = Parkingspace::where('status', 1)->inRandomOrder()->limit(12)->get();
        return view('search_result', $data);
    }

    public function valetParking(){
        return view('valet_parking');
    }

    public function blogdetails($slug){
        $data['single_blog'] = Blog::where('slug', $slug)->firstOrFail();
        $data['related_blog'] = Blog::where('category_id', $data['single_blog']->category_id)->where('id', '!=', $data['single_blog']->id)->limit(3)->get();
        return view('blog_details', $data);
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $subscribe = Subscribe::where('email', $request->email)->count();
        if ($subscribe != 0) {
            Notify::success('This email address already exists', 'Already Exists');
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
    
    public function neighborhost(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'parking_rate' => 'required',
            'money_type' => 'required',
            'parking_type' => 'required',
            'message' => 'required',
        ]);

        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Neighborhost::create($request->except('_token') + [
                'user_id' => $user_id,
            ]);
        } else {
            Subscribe::create($request->except('_token'));
        }
        Notify::success('Your Parking Host request Submitted, We will contact You', 'Success');
        return back();
    }
    
}








