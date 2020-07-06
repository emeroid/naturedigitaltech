<?php

namespace App\Http\Controllers\Order;

use App\Models\Transaction\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::LatestFirst()->paginate(15);
        return view('Backend.Order.index', compact('orders'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Response  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
        //dd($order->ref);
        $client = new Client();
        $api_response = $client->request('GET','http://voguepay.com/?v_transaction_id='.$order->ref.'&type=json&demo=true',
            ['verify' => false,]
        );

        $response = json_decode($api_response->getBody());
        //dd($response);

        return view('Backend.Order.invoice', compact('response','order'));
    }

    public function markDelivered(Request $request){

        $order = Order::findOrFail($request->order_id);
        //dd($order);
        if($order->order_status === 'Transit'){
            $order->order_status = 'Delivered';
            $order->save();

            return redirect()->back()->with('success', 'Item Marked as Delivered');
        }

        return redirect()->back()->with('warning', 'Item was not Marked as Delivered');
    }

    public function markReturned(Request $request){

        $order = Order::findOrFail($request->order_id);

        if($order->order_status === 'Failed' || $order->order_status === 'Transit'){
            $order->order_status = 'Returned';
            $order->save();

             return redirect()->back()->with('success', 'Item Marked as Returned');
        }
             return redirect()->back()->with('warning', 'Item was not Marked as Returned');

    }

    public function markTransit(Request $request){

        $order = Order::findOrFail($request->order_id);
        //dd($request->order_id);
        if($order->order_status === 'Approved'){
            $order->order_status = 'Transit';
            $order->save();

            return redirect()->back()->with('success', 'Item Marked as Transit');

        }

        return redirect()->back()->with('warning', 'Item was not Marked as Transit');
    }
}
