<?php

trait Worker
{
   public $nome;
   public $vendite;

   public function getShop()
   {
      return "this->nome - this->vendite";
   }


};