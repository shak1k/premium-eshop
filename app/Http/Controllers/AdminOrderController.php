<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    private $order;

    public function index()
    {
        return view('admin.order.index', ['orders' => Order::orderBy('id', 'desc')->get()]);
    }

    public function detail($id)
    {
        return view('admin.order.detail', ['order' => Order::find($id)]);
    }

    public function edit($id)
    {
        return view('admin.order.edit', ['order' => Order::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this->order = Order::find($id);
        if ($request->order_status == 'Pending')
        {
            $this->order->order_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->save();
        }
        elseif ($request->order_status == 'Processing')
        {
            $this->order->order_status      = $request->order_status;
            $this->order->delivery_status   = $request->order_status;
            $this->order->delivery_address  = $request->delivery_address;
            $this->order->delivery_media    = $request->delivery_media;
            $this->order->payment_status    = $request->order_status;
            $this->order->save();
        }

        elseif ($request->order_status == 'Complete')
        {
            $this->order->order_status      = $request->order_status;
            $this->order->delivery_status   = $request->order_status;
            $this->order->payment_status    = $request->order_status;
            $this->order->save();
        }

        elseif ($request->order_status == 'Cancel')
        {
            $this->order->order_status      = $request->order_status;
            $this->order->delivery_status   = $request->order_status;
            $this->order->payment_status    = $request->order_status;
            $this->order->save();
        }
        return redirect('/admin/all-order')->with('message', 'Order status info updated successfully.');
    }

    public function invoice($id)
    {
        return view('admin.order.invoice', ['order' => Order::find($id)]);
    }

    public function downloadInvoice($id)
    {
        $pdf = PDF::loadView('admin.order.download-invoice', ['order' => Order::find($id)]);
        return $pdf->stream('invoice-'.$id.'.pdf');
    }

    public function delete($id)
    {

    }
}
