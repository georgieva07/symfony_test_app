<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController {

    public function number(){

        $number=random_int(0,100);

        return new Response(
            '<html><body>Your lucky number is: ' . $number . '</body></html>'
        );
    }
}