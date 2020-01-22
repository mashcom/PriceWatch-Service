<?php

namespace App\Http\Controllers;

use App\OauthClient;
use Illuminate\Http\Request;

class OauthClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oauth_clients = OauthClient::all();
        return view("oauth.index", ["oauth_clients" => $oauth_clients]);
    }
}
