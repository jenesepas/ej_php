<?php
class pagina_Web 
{
   public $titulo;
   function setTitulo($titulo = "Titulo por defecto") {
      $this->titulo = $titulo;
   }
   function getTitulo() {
      return $this->titulo;
   }
   function cabecera() {
      echo ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
      <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>');
      echo $this->titulo;
      echo ("</title></head><body>");
      }
      function cuerpo() {
         echo("Este es el cuerpo de la página Web");
      }
      function pie() {
         echo ("</body></html>");
      }
      function mostrar_pagina() {
         echo $this->cabecera();
         echo $this->cuerpo();
         echo $this->pie();
      }
}
$prueba = new pagina_Web();
$prueba->setTitulo("Prueba de titulo");
$prueba->mostrar_pagina();
?>