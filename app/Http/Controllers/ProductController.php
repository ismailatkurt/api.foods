<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ProductController extends ApiController
{

    /**
     * List all products.
     *
     * @return mixed
     */
    public function index()
    {
        if ($products = Product::get())
            return $this->responseSuccess(
                $products->toArray()
            );
        else
            return $this->responseNotFound();

    }

    /**
     * Display requested resource.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        if ($product = Product::where('id', '=', $id)->first())
            return $this->responseSuccess([
                'product' => $product->toArray()
            ]);
        else
            return $this->responseNotFound();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     */
    public function store()
    {
        $data = Input::all();

        if($data)
        {
            if($product = Product::create($data))
            {
                return $this->responseSuccess(
                    [
                        'result' => $product->toArray()
                    ]
                );
            } else {

                return $this->responseCouldntBeStored();
            }

        } else {

            return $this->responseUnprocessableData();
        }
    }
}
