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
        return Response::json(LeadModel::create(Request::all()));
    }
}
