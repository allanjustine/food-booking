<?php

namespace App\Http\Controllers;

use App\Models\FoodBooking;
use Illuminate\Http\Request;

class FoodBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'foods' => FoodBooking::orderBy('food_name')->get()
        ]);
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
            'food_name' => 'string|required',
            'price' => 'numeric|required',
            'quantity' => 'numeric|required',
            'cust_name' => 'string|required',
            'phone_number' => 'required|numeric|regex:/(0)[0-9]/|digits:11'
        ]);

        $food = FoodBooking::create($request->only('food_name','price','quantity','cust_name','phone_number'));

        return response()->json($food);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodBooking  $food
     * @return \Illuminate\Http\Response
     */
    public function show(FoodBooking $food)
    {
        return response()->json($food);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodBooking  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodBooking $food)
    {
        $request->validate([
            'price' => 'numeric|required',
            'quantity' => 'numeric|required',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11'
        ]);
        $food->update($request->only('food_name','price','quantity','cust_name','phone_number'));

        return response()->json($food);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodBooking  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodBooking $food)
    {
        $cust_name = $food->cust_name;
        $food_name = $food->food_name;

        $food->delete();

        return response()->json([
            'deleted' => true,
            'message' => $cust_name . "'s " . " " . $food_name . " order has been deleted."
        ]);
    }
}
