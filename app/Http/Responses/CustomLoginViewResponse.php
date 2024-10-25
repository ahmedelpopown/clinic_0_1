<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginViewResponse;

class CustomLoginViewResponse implements LoginViewResponse
{
    public function toResponse($request)
    {
        return view('login.show'); // تأكد من أن المسار صحيح
    }
}
