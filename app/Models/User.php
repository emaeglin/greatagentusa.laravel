<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'GA_User';
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