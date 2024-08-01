<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biens;
use GuzzleHttp\Client;

class MapController extends Controller
{
    public function index()
    {
        $biens = Biens::all();
        return view('map', compact('biens'));
    }

    private function geocodeAddress($adresse)
    {
        $client = new Client();
        $apiKey = env('GOOGLE_MAPS_API_KEY');
        $response = $client->get("https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($adresse) . "&key=" . $apiKey);
        $data = json_decode($response->getBody(), true);

        if ($data['status'] == 'OK') {
            $location = $data['results'][0]['geometry']['location'];
            return ['lat' => $location['lat'], 'lng' => $location['lng']];
        }

        return null;
    }
}
