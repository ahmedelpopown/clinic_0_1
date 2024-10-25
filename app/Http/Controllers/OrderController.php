<?php

namespace App\Http\Controllers;

use App\Events\OrderCreatEvent;
use Illuminate\Http\Request;

class OrderController extends Controller
{
 public function store(){
    $data = [
        'orderNumber' => '111-333-555-fff-444',
        'username' => 'Morad',
        'products' => [
            'mobile',
            'laptop',
            't-shirt'
        ]

    ];
    $email ='xooahmedoox21@gmail.com';
    event(new OrderCreatEvent($email,$data));

    dd( 'order created success');
 }
}
