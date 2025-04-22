<?php

namespace App\Classes;

class Redirect
{
    public function redirect($redirect = null)
    {

    if(is_null($redirect)) {
        header('Location: /');
    }
    header('Location:$redirect');   
  }
}