<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::all();
        return view('orders.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('orders.create-order');
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
        $rules = [
            'name'=>'required',
            'product'=>'required',
            'quantity'=>'required',
            'customer_id'=>'required'
        ];
        if ($request->hasFile('image_url')){
            $filename = ImageController::addFile($request->file('image_url'));

            if ($filename == "Failed"){
                return redirect()->back()->withInput();
            }

        }
        else{
            $filename = null;
        }
        Orders::create([
            'name'=>$request->name,
            'product'=>$request->product,
            'customer_id'=> 1,
            'business_id'=>1,
            'category_id' => 1,
            'quantity'=>$request->quantity,
        ]);
        return redirect()->route('orders');
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
        $orders = Order::findOrFail($id);
        return view('Orders.order-details', compact('orders'));
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
        $orders = Orders ::findOrFail($id);

        return view('orders.edit-orders', compact('orders'));
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
        $orders = Orders::findOrFail($id);

        $orders->update(['name' =>$request->name,
        ]);
        return redirect()->route('orders');
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
        $orders = Orders::findOrFail($id);
        $default_order = Orders::findOrFail(1);

//        if($orders->id===1){
//
//            //here we check if the user is trying to delete the default category with an alert message
//            return redirect()->back()->with('error', "You cannot delete the default category order");
//        }
//        else{
//            $products = Product::where('category_id', $category->id);
//            foreach ($products as $product){
//                //changes the current value of category id to default category
//
//                $product->category_id = $category->id;
//                $product
//                    ->save();//makes the changes to the database.
//            }
//        }
        $orders->delete();
        return redirect()->back()->with("message", "order deleted successfully");

    }
}
