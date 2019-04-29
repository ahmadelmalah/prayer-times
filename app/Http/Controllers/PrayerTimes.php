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
    public function show()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://api.aladhan.com/v1/calendarByCity?city=London&country=United%20Kingdom&method=2&month=04&year=2019');
        $res = json_decode($response->getBody(), true);
        return dd($res['data'][0]['timings']);
    }
}
