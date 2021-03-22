<?php

//is_array
/*
$array =   array();
$retorno = is_array( $array );

if( $retorno ){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
*/
//------------------------------------

//in_array

/*$array =   array('mac', 'linux', 'windows');
$retorno = in_array( 'solaris', $array );

if( $retorno ){
	echo "Verdadeiro";
}else{
	echo "Falso";
}
*/
//-----------------------------------------------------

//array_keys
/*$produtos = array(10=>'Notebook', 11=>'Teclado');
$chaves_array = array_keys($produtos);

var_export($chaves_array);
*/
//------------------------------------------------------

//sort

//$frutas  = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');


//sort($frutas);
//var_export($frutas);

//asort
//asort($frutas);
//var_export($frutas);

//----------------------------------------------------------

//count
/*
$frutas  = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');

$itens_array = count($frutas);
echo $itens_array;
*/


//----------------------------------------------------------
//array_merge
/*
$array1  = array('mac', 'linux' );
$array2 = array('window', 'solaris');
$array3 = array('nitendo', 'xbox');

$novo_array = array_merge($array1,$array2,$array3);
var_export($novo_array);
*/
//-----------------------------------------------------------

//explode

$string = '20/10/2020';
$retorno = explode("/", $string);

//var_export($retorno);

//implode

$nova_string = implode("-",$retorno);
echo $nova_string;



?>