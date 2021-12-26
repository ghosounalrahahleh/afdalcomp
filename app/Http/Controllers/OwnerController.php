<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Models\Admin;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::paginate(3);
        $categories = Category::all();
        return view('publicSite.companies', compact(['owners', 'categories']));
    }

    public function getcompanies()
    {
        $users         = User::all();
        $owner         = Owner::all();
        $category      = Category::all();
        $reviews       = Review::all();
        $owner_counter = count($owner);
        $users_counter = count($users);
        $reviews_counter = count($reviews);
        return view('publicSite.index', compact(['owner', 'category', 'owner_counter', 'users_counter', 'reviews_counter']));
    }
    public function search(Request $request){
        // Get the search value from the request

        $search = $request->input('search');
        // dd($search);
        // Search in the title and body columns from the owner table
        $owner = Owner::query()
            ->where('company_name', 'LIKE', "%{$search}%")
            ->orWhere('owner_email', 'LIKE', "%{$search}%")
            ->orWhere('owner_name', 'LIKE', "%{$search}%")
            ->orWhere('desc', 'LIKE', "%{$search}%")
            ->orWhere('logo', 'LIKE', "%{$search}%")
            ->orWhere('address', 'LIKE', "%{$search}%")
            ->get();

            return view('publicSite.search',compact('owner'));

        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $categories = Category::all();
        $singleOwners = Owner::find($id);
        return view('publicSite.singleCompany', compact('categories', 'singleOwners'));
    }

    public function showcompany(Owner $owner)
    {
        $category = Category::all();
        return view('publicSite.userProfile', compact(['owner', 'category']));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOwnerRequest  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        //
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:5|max:30',
        ]);
        $email = $request->email;
        $password = $request->password;

        $owners = Owner::all();
        $admins = Admin::all();


        foreach ($owners as $owner) {
            if ($owner->email === $email) {
                if (Hash::check($password, $owner->password)) {
                    return redirect()->route('owner');
                }
            } else {
                return redirect()->route('adminLogin');
            }
        }
    }
}
