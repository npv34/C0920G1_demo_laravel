<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function index($location = 'hanoi') {
        $response = Http::get('http://api.openweathermap.org/data/2.5/weather',[
            "q" => $location,
            "appid" => config('app.weather_api')
        ]);

        $data = json_decode($response->body());

        $celsius = $data->main->temp - 273;
        $cityName = $data->name;
        $weather = $data->weather;
        $weatherDesc = $weather[0]->main;

        return view('weather',compact('celsius',
            'cityName','weatherDesc'));
    }
}
