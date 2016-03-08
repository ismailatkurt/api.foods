<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;

class SeasonController extends ApiController
{

    /**
     * List all seasons.
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'Spring',
            'Summer',
            'Fall',
            'Winter'
        ];

        return $this->responseSuccess([
            'seasons' => $data
        ]);

    }

    /**
     * Display requested resource.
     *
     * @param $season
     * @return mixed
     */
    public function show($season)
    {
        if ($products = Product::where('season', '=', $season)->first())
            return $this->responseSuccess([
                'products' => $products->toArray()
            ]);
        else
            return $this->responseNotFound();
    }

}
