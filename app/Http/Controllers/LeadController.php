<?php

namespace App\Http\Controllers;

use Response;
use Request;
use App\Http\Controllers\Controller;
use App\Models\Lead\LeadModel;

class CallController extends Controller
{
    public function __construct()
    {
    }
    
    public function create()
    {
        return Response::json(Lead::create());
    }
}
