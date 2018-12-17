<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use App\Http\Requests;
//use Session;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Cart;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function addItem(Request $request, $id)
    {
        // $product = Product::find($id);
        $product = [
            0 => ['id' => 1,
                'name' => 'BELT',
                'image' => 'public/img/products/s1.jpg',
                'description' => 'Vaimo BELT BB',
                'price' => '79.00']
        ];
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->Add($product, $id);
        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        // return redirect()->route('index');
        return back();
    }
    public function get()
    {
        $data = [
            'totalItems' => rand(1,20),
            'totalPrice' => $this->formatPrice(rand(300, 1000)),
            'items' => [
                [
                    'name' => 'Bag',
                    'price' => $this->formatPrice(rand(75, 500)),
                    'qty' => rand(1,10),
                    'imgSrc' => 'img/products/bag.jpg'
                ],
                [
                    'name' => 'Scarf',
                    'price' => $this->formatPrice(rand(75, 500)),
                    'qty' => rand(1,10),
                    'imgSrc' => 'img/products/scarf.jpg'
                ]
            ]
        ];

        return response()->json($data);
    }

    private function formatPrice($price)
    {
        return number_format($price, 2);
    }
    //
}
