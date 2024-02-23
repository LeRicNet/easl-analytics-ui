<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request)
    {
//        $x = $request->input('x');
        $x = 0;

        $client = new Client();
        $response = $client->request('POST', 'http://140.226.123.129:8004/ocpu/library/easlanalytics/R/test/json', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'x' => $x,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return response()->json([
            'statusCode' => $statusCode,
            'body' => json_decode($body),
        ]);
    }
}