<?php

namespace App\Http\Controllers;

use App\Models\Interaction;
use App\Http\Requests\InteractionRequest;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    public function patch(InteractionRequest $request)
    {
        $interaction = Interaction::firstOrNew(['path' => request('path')]);

        $interaction->path = request('path');
        $interaction->counter = is_null($interaction->counter) ? 1 : $interaction->counter+1;
        $interaction->save();

        return $interaction;
    }
}
