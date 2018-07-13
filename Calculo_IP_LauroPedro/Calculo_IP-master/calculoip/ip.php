<?php

 $pritrinca = $_GET['pritrinca'];
 $segtrinca = $_GET['segtrinca'];
 $tritrinca = $_GET['tritrinca'];
 $quatrinca = $_GET['quatrinca'];
 $mask    = $_GET['mask'];


 echo "<h1>O ip é: ";
  echo $pritrinca.".";
  echo $segtrinca.".";
  echo $tritrinca.".";
  echo $quatrinca."/";
  echo $mask;
  echo "</h1>";

$sobramask = 32 - $mask;
$endereco = pow (2,$sobramask);
 echo "<h1>Qtdade de sub-redes:</h1>";
$totalrange = 256/$endereco;
echo $totalrange;

echo "<h1>Qtdade de endereços por sub-rede:</h1>";
echo $endereco;

echo "<h1>Qtdade de endereços host em cada sub-rede:</h1>";
$usehost = $endereco - 2;
echo $usehost;

echo "<h1>Encontra-se na sub-rede:</h1>";
$sublocal = (int)($quatrinca/$endereco);
echo $sublocal;

echo "<h1>Rede da sub-rede onde o endereço dado está:</h1>";
$rede = $endereco * $sublocal ;
echo $rede;

echo "<h1>Primeiro endereço host da sub-rede onde o ip informado está:</h1>";
$primhost = $rede + 1;
echo $primhost;

$broadcast = ($rede + $endereco)-1;
echo "<h1>Último endereço host da sub-rede onde ip informado está:</h1>";
$ulthost = $broadcast-1;

echo $ulthost;
echo "<h1>O valor de broadcast da sub-rede em que o endereço está:</h1>";
echo $broadcast;

echo "<h1>Máscara integral:</h1>";
$maskaraint = 256 - $endereco;
echo "255.255.255.".$maskaraint;

echo "<h1>Público ou Reservado:</h1>";
if(($pritrinca == '10')
 or ($pritrinca=='127')
  or ($pritrinca=='172' and $segtrinca>='16' and $segtrinca<='32')
  or ($pritrinca == '192' and $segtrinca == '168')
){
  echo "<h4>reservado";
}else{
  echo "<h4>público";
};
echo "<h1>A classe a que o IP pertence</h1>";
if( $pritrinca>='0' and $pritrinca<='127'
and $segtrinca>='0' and $segtrinca<='255'
and $quatrinca>='0' and $quatrinca<='255'
and $tritrinca>='0' and $tritrinca<='255'
){
   echo " classe A </h4>";
 }elseif( $pritrinca>='128' and $pritrinca<='191'
      and $segtrinca>='0' and $segtrinca<='255'
      and $quatrinca>='0' and $quatrinca<='255'
      and $tritrinca>='0' and $tritrinca<='255'
 ){
   echo " classe B </h4>";
 }elseif ( $pritrinca>='192' and $pritrinca<='223'
       and $segtrinca>='0' and $segtrinca<='255'
       and $quatrinca>='0' and $quatrinca<='255'
       and $tritrinca>='0' and $tritrinca<='255'
 ){
   echo " classe C </h4>";
 }elseif ( $pritrinca>='224' and $pritrinca<='239'
       and $segtrinca>='0' and $segtrinca<='255'
       and $quatrinca>='0' and $quatrinca<='255'
       and $tritrinca>='0' and $tritrinca<='255'
 ){
   echo " classe D </h4>";
 }elseif ( $pritrinca>='240' and $pritrinca<='255'
       and $segtrinca>='0' and $segtrinca<='255'
       and $quatrinca>='0' and $quatrinca<='255'
       and $tritrinca>='0' and $tritrinca<='255'
 ){
   echo " classe E";
 }else{
   echo "numero invalido";
 }