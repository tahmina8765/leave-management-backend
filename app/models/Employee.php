<?php

class Employee extends \Eloquent {

    protected $fillable = ['name', 'designation', 'allowed', 'used', 'remaining'];
    protected $table = 'employees';
    public static $rules = [
            
    ];

}