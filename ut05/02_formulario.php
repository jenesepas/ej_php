<?php
class pagina_Web 
{
   public $titulo;
   public function __construct($titulo) {
   	$this->setTitulo($titulo);
   }
   public function setTitulo($titulo = "Titulo por defecto") {
      $this->titulo = $titulo;
   }
   public function getTitulo() {
      return $this->titulo;
   }
   public function cabecera() {
      echo ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
      <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>');
      echo $this->titulo;
      echo ("</title></head><body>");
   }
   public function cuerpo() {
      echo("Este es el cuerpo de la página Web");
   }
   public function pie() {
      echo ("</body></html>");
   }
   final public function mostrar_pagina() {
      echo $this->cabecera();
      echo $this->cuerpo();
      echo $this->pie();
   }
}

class pagina_Web_formulario extends pagina_Web {
   public function formulario_inicio($accion) {
      echo ("<form action=\"$accion\">");
   }
   public function formulario_fin() {
      echo ("</form>");
   }
   public function formulario_caja_texto($nombre) {
      echo ("$nombre <input type=\"text\" name=\"$nombre\">");	
   }
   public function formulario_boton() {
      echo ("<input type=\"submit\" name=\"Submit\" value=\"Enviar\">");
   }
   public function mostrar_pagina_formulario() {
      $this->cabecera();
      $this->formulario_inicio("index.php");
      $this->formulario_caja_texto("Nombre");
      $this->formulario_boton();
      $this->formulario_fin();
      $this->pie();
      }
}

$prueba = new pagina_Web_formulario("Página Web con formulario");
//$prueba->setTitulo("Prueba de titulo");
$prueba->mostrar_pagina_formulario();
?>