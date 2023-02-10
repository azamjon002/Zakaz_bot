<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BotController extends Controller
{
    public function getBotInformation()
    {
        $result = Http::get('https://api.telegram.org/bot6158259501:AAFLeTgnV1KRqFs9sdyEemHTAxbrWFU8i8o/getMe');
        dd($result);
    }
}
