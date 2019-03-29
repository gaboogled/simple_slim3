<?php
namespace MVC\Controllers;
class mvcController
{
   protected $container;
   public function __construct($container){
       $this->container = $container;
   }
}
