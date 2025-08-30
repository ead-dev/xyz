<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = Client::all();
        $clients = $clients->map(function($client){
            return [
                'id'=>$client->id,
                'nom'=>$client->name,
                'telephone'=>$client->telephone,
                'email'=>$client->email
            ];
        });
        return response()->json($clients);
    }
}
