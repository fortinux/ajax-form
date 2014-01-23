<?php 
	$cpf = $_GET['cpf'];   

	$pessoas['000.000.000-00']['nome'] = "João dos Santos"; 
	$pessoas['000.000.000-00']['dataNascimento'] = "01/01/1969"; 
  
	$pessoas['111.111.111-11']['nome'] = "Maria da Silva";
	$pessoas['111.111.111-11']['dataNascimento'] = "11/11/1911";
   
	$pessoas['222.222.222-22']['nome'] = "Carlos Nascimento"; 
	$pessoas['222.222.222-22']['dataNascimento'] = "22/02/1922";   

echo $pessoas[$cpf]['nome'] ."-". $pessoas[$cpf]['dataNascimento']; 
?>