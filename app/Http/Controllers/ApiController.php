<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * @var int
     */
    private $responseStatusCode = 200;

    /**
     * @return int
     */
    public function getResponseStatusCode()
    {
        return $this->responseStatusCode;
    }

    /**
     * @param int $responseStatusCode
     */
    public function setResponseStatusCode($responseStatusCode)
    {
        $this->responseStatusCode = $responseStatusCode;
    }

    /**
     * @param $message
     * @return mixed
     */
    public function response($message)
    {
        return Response::json([
            'data' =>
                $message

        ], $this->getResponseStatusCode());

    }

    /**
     * @param $message
     * @return mixed
     */
    public function responseSuccess($message = ['result' => 'success'])
    {
        $this->setResponseStatusCode(200);

        return $this->response(
            $message
        );

    }

    /**
     * @param $message
     * @return mixed
     */
    public function responseWithError($message)
    {
        return $this->response([
            'errors' => $message
        ]);

    }

    /**
     * @return mixed
     */
    public function responseNotFound()
    {
        $this->setResponseStatusCode(404);

        return $this->responseWithError([
            'error' => 'Record not found!'
        ]);

    }

    /**
     * @return mixed
     */
    public function responseCouldntBeStored()
    {
        $this->setResponseStatusCode(422);

        return $this->responseWithError([
            'error' => 'Record couldn\'t be stored!'
        ]);

    }

    /**
     * @return mixed
     */
    public function responseUnprocessableData()
    {
        $this->setResponseStatusCode(422);

        return $this->responseWithError([
            'error' => 'Unprocessable Data!'
        ]);

    }



}
