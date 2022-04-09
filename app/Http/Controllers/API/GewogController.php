<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gewog;
use App\Http\Resources\GewogResource;

class GewogController extends Controller
{
    public function index() {
        
        $dzo_id = request('dzo_id');
        // return $dzo_id;

        $gewogs = Gewog::where('dzo_id', $dzo_id)->get();

        return GewogResource::collection($gewogs);
    }
}
