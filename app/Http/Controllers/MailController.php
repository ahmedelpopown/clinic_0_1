<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreatedMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $data = [
            'orderNumber' => '111-333-555-fff-444',
            'username' => 'Morad',
            'products' => [
                'mobile',
                'laptop',
                't-shirt'
            ]

        ];

        Mail::to('xooahmedoox21@gmail.com')->send(new OrderCreatedMail($data));

    }
}
