<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(){
        $detalle=[
            'title'=>'correo de advertensia ',
            'body'=>'se elimino una bodega '
        ];

        Mail::to("tomasduh421@gmail.com")->send(new TestMail($detalle));
    }
}
