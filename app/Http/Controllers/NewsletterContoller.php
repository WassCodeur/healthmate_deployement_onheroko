<?php

namespace App\Http\Controllers;
use Newsletter;

use Illuminate\Http\Request;

class NewsletterContoller extends Controller
{
    public function newsletter(request $request)
    {
        Newsletter::subscribe('rincewind@discworld.com', ['name' => 'Rincewind'], 'newsletter');
    }
}
