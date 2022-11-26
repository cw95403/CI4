<?php

namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'user';
    
    protected $allowedFields = ['name','email'];
    
    protected $returnType = 'App\Entities\User';

    protected $useTimestamps = true;

    protected $validationRules = [
        'name'  =>  'required',
        'email' =>  'required'
    ];
    
    protected $validationMessages = [
        'name' => [
            'required' => 'Please enter a name'
        ],
        'email' => [
            'required' => 'Please enter an email'
        ]
    ];
}