<?php

namespace App\Controllers;

use App\Classes\Uri;
use Error;

class Controller
{
    const NAMESPACE_CONTROLLER = 'App\\Controllers\\';

    const FOLDERS_CONTROLLER = ['Site', 'Admin'];

    const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroController';

   private $controller;
   private $uri;

   public function __construct()
   {
       $this->uri = new Uri;
   }

   public function getController()
   {
    if(!$this->uri->emptyUri())
    {
          $explodeUri = array_filter(explode('/', $this->uri->getUri()));
          return ucfirst($explodeUri[1]).'Controller';
      
    }
       return ucfirst(DEFAUT_CONTROLLER).'Controller';
   }

    public function controller ()
    {
      $controller = $this->getController();
      foreach(self::FOLDERS_CONTROLLER as $folderController) 
      {
         if(class_exists(self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller))
         {
            return self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller;
         }
      }
      return self::ERROR_CONTROLLER;
    }
}