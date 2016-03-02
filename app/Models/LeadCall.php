<?php

namespace App\Models\LeadCall;

use Illuminate\Database\Eloquent\Model;

class LeadCall extends Model
{
    protected $table = 'GA_LeadCall'; //?
    public $timestamps = false;
    
    public function create() 
    {
        return array("Status"=>"Test");
    }
    
    public function update() 
    {
        return array("Status"=>"Test");
    }
    
    public function say() 
    {
        return array("Status"=>"Test");
    }
}