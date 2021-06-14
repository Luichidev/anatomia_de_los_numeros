<?php
/* FUNCIONES 
  Author: @Luichidev
  Web: https://luisalbertoarana.com
  Creation_Date: 10/06/2021
  Revision: 14/06/2021
*/
//PROTOTIPO: String encabezado(String $title)
//DESCRIPCIÓN: Devuelve un string con todo 
//            el encabezado del HTML; recibe el título 
//            de la página y la url del archivo css por parámetros.
function encabezado($title, $cssFile){
  return $result = "<!DOCTYPE html>\n
              <html lang=\"es-ES\">\n
              <head>\n
                <meta charset=\"UTF-8\">\n
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n
                <title>{$title}</title>\n
                <link rel=\"stylesheet\" href=\"{$cssFile}\">
                <link rel=\"shortcut icon\" href=\"favicon.png\" type=\"image/x-icon\">\n
              </head>\n
              <body>\n
                <main>\n
                  <h1>{$title}</h1>";

}
//PROTOTIPO: String menu(Array $links)
//DESCRIPCIÓN: Devuelve un string con todo el 
//             menu de la web, recibe como parámetro
//            los links y el nombre de las páginas.

function menu($links, $current_uri){
  $result = "<ul id=\"menu\">\n";
  if(is_array($links)){
    $long = count($links);
    foreach ($links as $menu => $file) {
      if($current_uri === $file)
        $result .= "<li class=\"active\"><a href=\"{$file}\">{$menu}</a></li>\n";
      else 
        $result .= "<li><a href=\"{$file}\">{$menu}</a></li>\n";
    }
  } else 
      return "<li>El parámetro de la función debe ser un array asociativo. ejem: [inicio => index.php]</li>\n";
  
  $result .= "</ul>\n";
  return $result;
}
//PROTOTIPO: String encabezado()
//DESCRIPCIÓN: Devuelve un string con todo el 
//             pie de página del HTML; recibe la
//            información que va en el footer 
//            por parámetros.
function pie_de_pagina($info){
  return "</main>\n
          <footer>\n
            <div class=\"footer\">\n
              <p>{$info}</p>\n
              <a href=\"#\" class=\"uptoTop\">&#9757;</a>\n
            </div>\n
          </footer>\n
        </body>\n
      </html>";
}
//PROTOTIPO: Boolean is_primo(Int $num)
//DESCRIPCIÓN: Devuelve un True en caso que el número
//            sea primo y false en caso contrario.
function is_primo($num){  
  $isPrimo = true;
  //Casos especiales
  // if($num === 0 || $num === 1 || $num === 4) $isPrimo=false;
  if($num === 0 || $num === 4) $isPrimo=false;

  for ($i=2; $i < $num/2 ; $i++) { 
    if($num % $i === 0) 
      $isPrimo = false;
  }
  return $isPrimo;
}
//PROTOTIPO: String print_divisibles(Array $divisibles)
//DESCRIPCIÓN: Devuelve un String con los numeros que contiene 
//            el array, separados por la palabra "por".
function print_divisibles($divisibles){  
  $result = "";
  $length = count($divisibles);

  for ($i=0; $i < $length; $i++) { 
    //Si solo tiene un divisor
    if ($length === 1)
      $result .= " por <strong>{$divisibles[$i]}</strong>.";
    elseif($i !== $length-1) {
     //sino es ultima vuelta
      $result .= " por <strong>{$divisibles[$i]}</strong>, ";
    }else 
      $result .= " y por <strong>{$divisibles[$i]}</strong>.";
  }

  return $result;
}
//PROTOTIPO: String my_divisibles(Int $num)
//DESCRIPCIÓN: Calcula todos sus números divisibles y devuelve 
//            un String con eso números.
function my_divisibles($num){  
  $result = "<p>El <strong>{$num}</strong> es divisible";
  $divisibles = [];

  for ($i=2; $i < $num ; $i++) { 
    //Es divisible?
    if($num%$i === 0)
      $divisibles[]= $i;
  }

  return $result . print_divisibles($divisibles) . "</p>\n";
}
//PROTOTIPO: Array has_divisibles(Int $num)
//DESCRIPCIÓN: Calcula todos los números divisibles posibles y devuelve 
//            un Array con eso números, si no es divisible por niguno 
//            devuelve un array vació.
function has_divisibles($num){  
  $divisibles = [];

  for ($i=2; $i < $num ; $i++) { 
    //Es divisible?
    if($num%$i === 0)
      $divisibles[]= $i;
  }

  return $divisibles;
}
//PROTOTIPO: String numbers_anatomy(Int $min, Int $max)
//DESCRIPCIÓN: Devuelve un String con la anatomía de los
//            los números comprendidos entres min y max 
//            que son pasados por parámetros.
function numbers_anatomy($min, $max){
  $result = "";

  for ($i=$min; $i <= $max; $i++) { 
    $numDiv = has_divisibles($i);
    $length = count($numDiv);
    if($length > 0)
      $result .= "<p>El <strong>{$i}</strong> es divisible" . print_divisibles($numDiv) . "</p>\n";
    else 
      $result .= "<p>El <strong>{$i}</strong> es un <strong>número primo.</strong></p>\n";
    
  }

  return $result;

}
/* DEPRECATED *****
function numbers_anatomy($min, $max){
  $result = "";

  for ($i=$min; $i <= $max; $i++) { 
    if(is_primo($i))
      $result .= "<p>El <strong>{$i}</strong> es un <strong>número primo</strong></p>";
    else 
      $result .= my_divisibles($i);
  }

  return $result;

}*/