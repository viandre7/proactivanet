<?php

namespace App\Http\Controllers;

use App\Models\Proactivanet;
use Illuminate\Http\Request;

class ProactivanetController extends Controller
{
    public function index() {
        return Proactivanet::all();
    }
}
