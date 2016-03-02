<?php

namespace App\Http\Controllers;

use Response;
use Request;
use App\Http\Controllers\Controller;
use App\Models\Lead\LeadModel;

class LeadController extends Controller
{
    public function __construct()
    {
    }
    
    public function create()
    {
        return Response::json(LeadCall::create());
    }
    
    public function update ()
    {
        return Response::json(LeadCall::update());
    }
}
