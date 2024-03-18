<?php




//ABRE O ARQUIVO TXT
$ponteiro = fopen ("lista1.txt","r");

//LÊ O ARQUIVO ATÉ
//CHEGAR AO FIM 

$arr = array();

$i=0;


while (!feof ($ponteiro)) {
 
  //LÊ UMA
//LINHA DO ARQUIVO
  $linha = fgets($ponteiro,4096);
  $array[$i] = $linha;
  //IMPRIME NA TELA
//O RESULTADO
 // echo $linha."<br>";

  $i++;

}//FECHA WHILE


$posi = rand(0, $i-1);

//echo "O FILHO DA PUTA A GANHAR O LIVRO e " . $array[$posi];

//FECHA
//O PONTEIRO DO ARQUIVO
fclose ($ponteiro);


?>

<div style="width:100%; height:700px; background-color:#3300FF; padding-top: 100px; color: #FFFFFF; font-family: arial, helvetica, serif; font-size: 400;" align="center">
	<?php echo $array[$posi]; ?>
</div>