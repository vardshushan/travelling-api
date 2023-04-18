<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OpenAIController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $search = $request->input('search');
        try {
            $apiKey = env('OPENAI_API_KEY');

            $client = new \GuzzleHttp\Client();
            $response = $client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $apiKey,
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        [
                            'role' => 'user',
                            'content' => $search,
                        ],
                    ],
                    'temperature' => 0.5,
                    'max_tokens' => 200,
                    'top_p' => 1.0,
                    'frequency_penalty' => 0.52,
                    'presence_penalty' => 0.5,
                    'stop' => ['11.'],
                ],
            ]);

            $data = $response->getBody()->getContents();

            return response()->json(json_decode($data)->choices[0]->message, 200, array(), JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
