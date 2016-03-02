<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'GA_Lead';
    public $timestamps = false;
    
    static function create(array $attributes = Array()) 
    {
        /*В контролер перенести
        $LeadData = Validator::make($request, [
            'Name'    => 'min:4|max:256',
            'Phone'   => 'min:10|max:16',
            'Email'   => 'email',
        ]);
        var_dump($LeadData::); exit;
        Twilio::call($LeadData, "https://demo.twilio.com/welcome/voice/");
        return array("Status"=>"Succes");
         * 
         */
        return array("Status"=>"Test");
    }
    
    static function get() 
    {
        return array("Status"=>"Test");
    }
    
    static function getList() 
    {
        return array("Status"=>"Test");
    }
}