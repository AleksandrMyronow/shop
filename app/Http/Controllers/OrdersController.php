<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class OrdersController extends Controller
{
    public function buyAction($id) {
        $product = Goods::find($id);
        if($product) {
            return view('order', ['goods_id' => $id]);
        }
    }

    public function finishAction($id) {
        $allData = Input::all();
        $order = new Orders();
        $order->customer_name = $allData->customer_name;
        $order->phone_number = $allData->customer_name;
        $order->city = $allData->customer_name;
        $order->email = $allData->customer_name;
        $order->comment = $allData->customer_name;
        $order->amount = $allData->customer_name;
        $order->save();

    }
}
