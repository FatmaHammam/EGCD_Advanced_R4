<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cust_orders()
    {
        $orders = Customer::find(19)->orders;
        foreach ($orders as $order) {
            echo "Total Amount is: " . $order->amount . " Date is: " . $order->order_date;
            echo "<br>";
        }
    }

    public function cust_data()
    {
        $customer = Order::find(5)->customer;
        echo $customer->name;
    }
}
