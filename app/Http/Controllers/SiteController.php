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

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $products = [
            0 => [
                'id' => 1,
                'name' => 'BELT',
                'image' => 'public/img/products/s1.jpg',
                'description' => 'Vaimo BELT BB',
                'price' => '79.00'
            ],
            1 => [
                'id' => 2,
                'name' => 'HAT',
                'image' => 'public/img/products/s2.jpg',
                'description' => 'Vaimo HAT BB',
                'price' => '59.00'
            ],
            2 => [
                'id' => 3,
                'name' => 'SCARF',
                'image' => 'public/img/products/s3.jpg',
                'description' => 'Vaimo SCARF BB',
                'price' => '79.00'
            ],
            3 => [
                'id' => 4,
                'name' => 'BAG',
                'image' => 'public/img/products/s4.jpg',
                'description' => 'Vaimo BAG BB',
                'price' => '80.00'
            ]
        ];

        // Sort the products alphabetically from A-Z
        $products = collect($products)->sortBy('name')->toArray();

        return view('index', compact('products'));
    }
}
