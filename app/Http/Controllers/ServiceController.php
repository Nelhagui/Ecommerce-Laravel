<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;
class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $services = $user->services;
        return view('services')->with('services', $services);
    }

    public function allservices() 
    {
        $services = Service::paginate(8);
        return view('services.allservices')->with('services', $services);
    }

    public function addCart(Request $request)
    {    
        	    	
    	$request->session()->push('cart.service', [
    		'id' => $request->id,
    	]);
        // dd(session('cart.service'));
    	return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('services.addservice')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('imagedescription'))
        {
            $image = $request->file('imagedescription')->store('public/services');
        } else {
            $image = '/services/defaultservice.jpg';
        }
        // dd($image);
        $id = Auth::id();

        $this->validate($request, [
            "name" => 'required',
            "price"  => 'required',
            "description" => 'required',
            "category" => 'required',
        ]);

        $service = new Service ([
            'name' => $request->input("name"),
            'price' => $request->input("price"),
            'description' => $request->input("description"),
            'category_id' => $request->input("category"),
            'user_id' => $id,
            'imagedescription' => $image,
        ]);

        $service->save();

        return redirect()->route('services-list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view ('services.detailservice')->with('service', $service);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $service = Service::find($id);
        $category = Category::find($service->category_id);
        return view('services.editservice')
            ->with('service', $service)
            ->with('categories', $categories)
            ->with('category', $category);
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
        $service = Service::find($id);

        if($request->hasFile('imagedescription'))
        {
            $service->imagedescription = $request->file('imagedescription')->store('public/services');
        }


        $service->name = $request->input('name');
        $service->price = $request->input('price');
        $service->description = $request->input('description');
        $service->category_id = $request->input('category');

        $service->update();
        return redirect("/servicios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect('/servicios');
    }
}
