<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class statusEntryController extends Controller
{
    public function test(){
        return "Dziala";
    }
}
