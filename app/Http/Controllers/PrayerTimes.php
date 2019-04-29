<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PrayerTimes extends Controller
{
    /**
     * Show the prayer times for a given city.
     *
     * @return Array
     */
    public function show(Request $request)
    {
        $year = date("Y");
        $month = date("m");
        $day = date('d');

        $city = $request->input('city', 'Espoo') ?? 'Espoo';
        $country = $request->input('country', 'Finland') ?? 'Finland';
        $method = $request->input('method', 2) ?? 2;
        
        $client = new Client();
        $response = $client->request('GET', "http://api.aladhan.com/v1/calendarByCity?city={$city}&country={$country}&method={$method}&month={$month}&year={$year}");
        $res = json_decode($response->getBody(), true);
        return dd($res['data'][$day-1]['timings']);
    }
}
