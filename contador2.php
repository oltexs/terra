<html>
<title>&#8244; &#119966;l&#8520;&#120162;u&#120098;s &#8482; Someone &reg;</title>
<link href="http://download.seaicons.com/icons/hopstarter/malware/96/Infect-icon.png" rel="shortcut icon" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {background-image:url('https://cdn1.iconfinder.com/data/icons/computer-and-internet/512/hack_hacker_web_website-512.png');}
body,td,th {
	color: #00ff3c;
	font-family: Verdana;
	font-size: 14px;
}
body {
	background-color: #12263c;
}
.style1 {
	font-size: 15px;
	font-weight: bold;
}
.style2 {
	font-size: 14px;
	color: #ff00f6;
}
.style3 {
	font-size: 34px;
	color: #000000;
}
.style4 {color: #afd8d1}
.style5 {font-size: 15px; font-weight: bold; color: #afd8d1; }
.style8 {color: #00ff3c; font-size: 34px; font-weight: bold; }
.style9 {color: #CCCCCC}
.style11 {color: #ff0000; font-size: 34px;}
.style12 {color: #00ff3c}
.style15 {color: #afd8d1; font-size: 34px; }
.style16 {color: #ffffff }
.style17 {color: #000000}
-->
</style><body link="#FF0000" vlink="#FF0000" alink="#FF0000">
<center>
  <table width="476" border="0">
    <tr>
      <td width="470" <div align="center"><span class="style15"> CONTADOR NEW 2017 - <span class="style12">By Someone</span></span> </div></td>
    </tr>
  </table>
  <p><span class="style5">CONTADOR DE CLIQUES<br>
    <br>  
    <span class="style5">==========================================================</span><br>
    </span><br>
    <span class="style4">VOC&Ecirc; POSSUI <span class="style9">-</span> </span>
    </h1>
    <span class="style8">
    <?php
    error_reporting(0);
 
    function conta($directory)
    {
      $filecount = 0;
      $files = glob($directory . "*.txt");
      if ($files){
       $filecount = count($files);
       return $filecount; 
      }
    }

  echo " " . conta("total/") ;//mostra na tela o numero de visitantes
?>
     </span>                        <span class="style4"> CLIQUES</span> <br>
    <br>
   
    <table width="568" border="0">
    <tr>
      <td <div align="center"><span class="style4">CONTADOR v10.1 - DESENVOLDI POR<span class="style12">  Someone</span></span></div></td>
    </tr>
  </table>
  <p><br>
  </p>
 </div></td>
<br><br>

    <span class="style16"><strong>Cliques Liberados:</strong> </span><br>
    <span class="style8">
 <?php
 echo " " . conta("lib/") ;
?>
</span>
<br><br>
  
<?php
  $caminho = "lib.txt";//nome do arquivo que vai guardar  os visitantes
  //$arquivo = fopen($caminho, "r");//abre o arquivo
  $total = file_get_contents($caminho); //pega o numero de visitas
  //fclose($arquivo);//fecha o arquivo

  echo str_replace("\n","<br>",$total);//mostra na tela o numero de visitantes

?>
<br>
   <span class="style16"><strong>Cliques Bloqueados:</strong> </span><br>
   <span class="style11">
 <?php
 
 echo " " . conta("bloq/") ;
?>
</span></span>
  <meta http-equiv='Refresh' content='60'; URL='contador.php'>
</center>

</body>
</head>
</html>