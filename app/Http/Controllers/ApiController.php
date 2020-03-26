<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function provinsi()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        return $response->json();
    }

    public function summary()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        return $response->json();
    }
}
