<?php

namespace App\Http\Controllers;

use App\Http\Requests;

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
}
