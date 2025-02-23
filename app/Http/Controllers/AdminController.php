<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){

            $request->validate([
                'admin_name' => 'required|string|max:255',
                'hotel_name' => 'required|string|max:255',
                'hotel_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'hotel_website' => 'nullable|url',
                'owner_name' => 'required|string|max:255',
                'establishment_date' => 'required|date',
                'legally_registered' => 'required|in:yes,no',
                'contact_number' => 'required|string|max:15',
                'email' => 'required|email|unique:admins',
                'address' => 'required|string',
                'password' => 'required|min:6'
            ]);

            $hotelImage = null;
            if($request->hasFile('hote_image')){
                $hotelImage = $request->file('hotel_image')->store('hotel_image', 'public');
            }


             Admin::create([
                'admin_name' => $request->admin_name,
                'hotel_name' => $request->hotel_name,
                'hotel_image' => $hotelImage,
                'hotel_website' => $request->hotel_website,
                'owner_name' => $request->owner_name,
                'establishment_date' => $request->establishment_date,
                'legally_registered' => $request->legally_registered,
                'contact_number' => $request->contact_number,
                'email' => $request->email,
                'address' => $request->address,
                'password' => Hash::make($request->password), // Password encrypt ho raha hai
             ]);


             return redirect()->back()->with('success', 'Admin Registrered successfully');
    }
}
