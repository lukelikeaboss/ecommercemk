<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Customerpayment;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Faker\Provider\ar_SA\Payment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $businesses = Business::count();
        $products = Product::count();
        $orders = Order::count();
        $payments = Customerpayment::count();

        $date = Carbon::today()->subDays(7);
        $recentOrders =Order::where('created_at', '>=', $date)->get();
        $recentPayment =Customerpayment::where('created_at', '>=', $date)->get();
        $recentProducts =Product::where('created_at', '>=', $date)->get();
        return view('home', compact('businesses', 'products', 'orders', 'payments' ));
    }
}
