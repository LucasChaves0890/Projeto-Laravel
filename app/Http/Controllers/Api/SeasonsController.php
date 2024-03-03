<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Series;

class SeasonsController extends Controller
{
    public function show(Series $series)
    {
        return $series->seasons;
    }
}
