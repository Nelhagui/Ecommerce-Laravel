<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = [];
        $session_services = session('cart.service', $services);

        foreach ($session_services as $key => $value) {
            $service = Service::find($session_services[$key]['id']);
            // $service->stock = $session_services[$key]['stock'];
            $services[] = $service; 
        }
                // dd($services);
        return view('cart.cartservices')->with('services', $services);
    }

    public function remove($id, Request $request)
    {  
        // dd($request->session('cart.services'));
        // dd(collect($request->session()->get('cart.services')));
        $services = collect($request->session()->get('cart.service'));
        // dd($services);
        $services->filter(function($value, $key) use ($id) {
            return $value['id'] == $id;
        })->keys()->each(function($item) use ($request) {
            $request->session()->forget("cart.service.$item");
        });
        
        return redirect()->back();
    }


    /**        // dd($services);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
