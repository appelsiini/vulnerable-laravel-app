<?php

namespace App\Http\Controllers\Api;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(Request $request)
    {
        // Intentionally SQL injectable query, for demonstration purposes super easy to exploit with eg. sqlmap
        $orderParam = $request->get('sort');

        $events = $orderParam ?
            Event::query()->orderByRaw($orderParam)->get() :
            Event::all();

        return response()->json($events);
    }
}
