<?php

namespace App\Http\Controllers;


use App\Models\Request;

class RequestController extends Controller
{
    private $request;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $result = $this->request->all();
        $json = array();
        foreach ( $result as $item ) {
            $json[$item->id]['id'] =  $item->id;
            $json[$item->id]['amount'] =  $item->amount;
            $json[$item->id]['created_at'] =  date_format($item->created_at,"Y-m-d H:i");
            $json[$item->id]['items'] =  json_decode($item->items);
        }

        return json_encode($json);
    }
}
