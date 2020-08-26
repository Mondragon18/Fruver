<?php
class vistasModelo
{
   protected function obtener_vistas_modelo($vistas)
   { // recibi una variable para obtenr la vista
      $listaBlanca = ["login","home","out","agregaradministrador", "administrador","empresa", "agregarempresa", "clientes", "categoria", "tipo", "talla", "productos"]; // lista de las palabras permitidas como URL
      if (in_array($vistas, $listaBlanca)) { // va a ver si la palabra manda esta en la lista permitida
         if (is_file("./Views/Contenidos/" . $vistas . ".php")) { // para comprobar si ese fichero existe y mostrar el contenido 
            $contenido = "./Views/Contenidos/" . $vistas . ".php";
         } else { 
            $contenido = "login";
         }
      } elseif ($vistas == "login") { // que si vitas no es correcta me muestra el login
         $contenido = "login";
      } elseif ($vistas == "index") { // define de donde viene la URL y si no trae muestra el login
         $contenido = "login";
      } else {
         $contenido = "404"; // por defecto retorna el login
      }
      return $contenido;
   }
}