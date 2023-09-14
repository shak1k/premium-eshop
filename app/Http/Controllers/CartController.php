<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product, $cartProducts;

    public function index(Request $request, $id)
    {
        $this->product = Product::find($id);

        $this->cartProducts = Cart::content();
        if (count($this->cartProducts) > 0)
        {
            foreach ($this->cartProducts as $cartProduct)
            {
                if ($cartProduct->id == $id)
                {
                    $totalCartItem = $cartProduct->qty + $request->qty;
                    if($this->product->stock_amount < $totalCartItem)
                    {
                        if (($this->product->stock_amount - $cartProduct->qty) == 0)
                        {
                            return back()->with('message', 'Sorry ☹ You have purchased maximum amount');
                        }
                        return back()->with('message', 'Sorry ☹ You can purchase maximum '.$this->product->stock_amount - $cartProduct->qty.' amount');
                    }
                }
            }
        }


        if($this->product->stock_amount < $request->qty)
        {
            return back()->with('message', 'Sorry ☹ You can purchase maximum '.$this->product->stock_amount.' amount');
        }


        Cart::add([
            'id'        => $id,
            'name'      => $this->product->name,
            'qty'       => $request->qty,
            'price'     => $this->product->selling_price,
            'options'   => [
                'image'     => $this->product->image,
                'category'  => $this->product->category->name,
                'brand'     => $this->product->brand->name,
            ]
        ]);

        return redirect('/my-shopping-cart');
    }

    public function show()
    {
        //return Cart::content();
        return view('website.cart.index', ['cart_products' => Cart::content()]);
    }

    public function update(Request $request, $id)
    {
        $this->product = Product::find($request->id);
        if($this->product->stock_amount < $request->qty)
        {
            return back()->with('message', 'Sorry ☹ You can purchase maximum '.$this->product->stock_amount.' amount');
        }
        Cart::update($id, $request->qty);
        return back()->with('message', 'Cart product info updated successfully ☺');
    }

    public function delete($id)
    {
        Cart::remove($id);
        return back()->with('message', 'Cart product info deleted successfully ☺');
    }
}
