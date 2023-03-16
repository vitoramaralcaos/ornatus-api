<?php

namespace App\Http\Controllers;


use App\Models\Product;

class ProductController extends Controller
{
    private $product;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $result = $this->product->all();
        $json = array();
        foreach ( $result as $item ) {
            $json[$item->id]['id'] =  $item->id;
            $json[$item->id]['name'] =  $item->name;
            $json[$item->id]['price'] =  $item->price;
            $json[$item->id]['created_at'] = date_format($item->created_at,"Y-m-d H:i");
        }

        return json_encode($json);
    }
}
