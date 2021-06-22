<?php

namespace App\Http\Controllers;

use Algorithmia;
use Illuminate\Http\Request;

class SentimentController extends Controller
{
    public function show_form()
    {
        return view('sentiment_detection_form');
    }

    public function predict(Request $request) 
    {
        // validate the input
        $this->validate($request, [
            'message' => 'required|string|min:2'
        ]);

        // collect the message
        $message = $request['message'];

        // add client and call the API
        $api_key = env('ALGORITHMIA_API_KEY');
        $client = Algorithmia::client($api_key);
        $model = $client->algo('joaopcnogueira4team/sentiment_score_detection/1.0.0');

        // perform prediction and save result
        $result = $model->pipe($message)->result;

        return view('sentiment_detection_result', compact(['message', 'result']));
    }
}
