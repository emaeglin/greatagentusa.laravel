<?php
/*
 * Вынести в Lead.php
 */
namespace App\Models\Lead;

use Twilio;
use Validator;

class LeadModel
{
    static function create($request) 
    {
        /*В контролер перенести*/
        $LeadData = Validator::make($request, [
            'Name'    => 'min:4|max:256',
            'Phone'   => 'min:10|max:16',
            'Email'   => 'email',
        ]);
        //var_dump($LeadData::); exit;
        //Twilio::call($LeadData, "https://demo.twilio.com/welcome/voice/");
        return array("Status"=>"Succes");
    }
    
    static function get() 
    {
        
    }
    
    static function getList() 
    {
        
    }
}
