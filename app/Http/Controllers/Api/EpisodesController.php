<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Series;

class EpisodesController extends Controller
{
    public function show(Series $series) 
    {
        return $series->episodes;
    }
}
