<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dzongkhag;
use App\Http\Resources\DzongkhagResource;

class DzongkhagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dzongkhags = Dzongkhag::all();

        return DzongkhagResource::collection($dzongkhags);
    }
}
