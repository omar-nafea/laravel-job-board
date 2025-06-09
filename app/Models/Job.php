<?php

namespace App\Models;

class Job 
{
    public static function all(){
        return [
            ['Title' => 'Software Engineer', 'Salary' => '1000'],
            ['Title' => 'Graphic Designer', 'Salary' => '2000'],
        ];
    }
}
