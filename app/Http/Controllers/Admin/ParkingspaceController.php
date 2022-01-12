<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\Parkingspace;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ParkingspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['parking_space'] = Parkingspace::latest()->get();
        return view('admin.parking_space.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parking_space.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'post_code' => 'required|string',
            'address' => 'required|string',
            'price_hourly' => 'required|string',
            'price_day' => 'required|string',
            'price_monthly' => 'required|string',
            'money_type' => 'required|string',
            'parking_type' => 'required|string',
            'space_type' => 'required|string',
            'space_area' => 'required|string',
            'cancellation_terms' => 'required|string',
            'location' => 'required|string',
            'image' => 'required',
        ]);
        $parkingspace = Parkingspace::create($request->all() + [
            'user_id' => Auth::id(),
            'status' => 1,
        ]);

        $parkingspace->slug = Str::slug($request->name) . '-' . Str::random(5);

        if ($request->hasFile('image')) {
            $photo_name = $request->id . '.' . $request->image->extension();
            $request->image->move('assets/img/parking_img/', $photo_name);
            $parkingspace->image = $photo_name;
        }
        $parkingspace->save();
        Notify::success('Parking Space Successfully Published', 'Success');
        return redirect(route('space.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.parking_space.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.parking_space.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
