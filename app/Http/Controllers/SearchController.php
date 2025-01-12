<?php

namespace App\Http\Controllers;

use App\Services\OpenAIService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function search(){
        return view('search');
    }

    public function search_query(Request $request)
    {
        $query = $request->input('query');
        // if (!$query) {
        //     return redirect()->back()->with('error', 'Please enter a query.');
        // }

        $response = $this->openAIService->search($query);

        $message = $response['choices'][0]['message']['content'] ?? 'No result found.';

        return view('search', compact('message', 'query'));
    }
}
