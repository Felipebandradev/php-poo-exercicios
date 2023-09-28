<?php

require_once "Livro.php";

class Tecnico extends Livro{

    private array $formato = ["Digital","Fisico"];


    
    public function getFormato(): array
    {
        return $this->formato;
    }

    public function setFormato(array $formato): self
    {
        $this->formato = $formato;

        return $this;
    }


   /* 
   
   Uma das Formas de resolver para facilitar o uso da função
   é tranformar o array em uma string
   
   public function getFormato(): string
    {
        return  implode(" , ", $this->formato);
    } 
    
    */


}