<?php
	$query = "SELECT dad_id as codigo, dad_nome as nome, dad_instituicao as instituicao  FROM `dados` WHERE 1 order by nome"; //Alias usados pra adaptar ao ano anterior
//	$query = "SELECT * FROM `participantes";

	$host="localhost";
	$username="root";
	$password="root";
	$database="secompp";

	$db = mysql_connect($host,$username,$password);

	mysql_select_db($database) or die ("Problemas na conexão!");


	require_once("fpdf/fpdf.php"); 
	define("FPDF_FONTPATH", "fpdf/font/"); 

	$width = 108; //largura células
	$height = 17;  //altura célula
	$top = 10;      //altura primeira celula da folha
	$qr_size = 35;

	$bordas = 0; //1 pra mostrar bordas, 0 não


	$cont = 0;
	$cont2 = 0;

	$result = mysql_query($query);			

	$pdf = new FPDF('P','mm',array(215,285));
	$pdf->Open(); 
	$pdf->AddPage(); 
	$pdf->SetFont("Times", "", 9); 
	$pdf->SetLeftMargin(5);

	//Remove pasta antiga e cria nova
	exec ("rm -rf codigos");
	exec ("mkdir codigos");

	while ($entry = mysql_fetch_array($result))
	{	
		if ($cont2%7==0 && $cont2!=0) 
		{
			$pdf->AddPage();
		}

		if ($cont2%7==0) 
		{
			$pdf->Cell($width,$top,"",$bordas,0,'L');			
			$pdf->Cell($width,$top,"",$bordas,1,'L');			
		}

		$cont2++;

		$entry2 = mysql_fetch_array($result);
		//break;
		//echo 'Index: ' . $entry['codigo'] . "</br> Nome: " . $entry['nome'] . "</br> E-mail: " . $entry['email']. "</br> Instituição: " . $entry['instituicao'];			
		//$texto = sprintf( "%s\t%s\t%s\t%s",$entry['codigo'],$entry['nome'], $entry['email'], $entry['instituicao']);			

		if ($entry)
		{
			$cria_qr = "qrencode -i -o codigos/" . $entry['codigo'] . ".png \"" . $entry['codigo'] . "\"";
			exec ($cria_qr);
		}

		if ($entry2)
		{
			$cria_qr = "qrencode -i -o codigos/" . $entry2['codigo'] . ".png \"" . $entry2['codigo'] . "\"";
			exec ($cria_qr);
		}

		if ($entry)
		{
//			$pdf->Cell($width,$height,$entry['codigo'] . " - " .  $entry['nome'],$bordas,0,'L');
			$texto = $entry['nome']	;
			$texto = mb_strtoupper($texto, 'UTF-8');
			$pdf->Cell($width,$height,strtoupper(utf8_decode($entry['codigo'] . "-" . $texto)),$bordas,0,'L');			
//			echo $entry['nome']; echo "<br>";
		}

		if ($entry2)
		{
			//$pdf->Cell($width,$height,$entry2['codigo'] . " - " .  $entry2['nome'],$bordas,1,'L');
			$texto = $entry2['nome']	;
			$texto = mb_strtoupper($texto, 'UTF-8');

			$pdf->Cell($width,$height,strtoupper(utf8_decode($entry2['codigo'] . "-" . $texto)),$bordas,1,'L');
//			echo $entry['nome']; echo "<br>";
		}
		else
		{
			//$pdf->Cell($width,$height,$entry2['codigo'] . " - " .  $entry2['nome'],$bordas,1,'L');
			$texto = $entry2['nome']	;
			$texto = mb_strtoupper($texto, 'UTF-8');

			$pdf->Cell($width,$height,"",$bordas,1,'L');
		}

		if ($entry)
		{
			$texto = $entry['instituicao']	;
			$texto = mb_strtoupper($texto, 'UTF-8');
		
			$pdf->Cell($width,$height,strtoupper(utf8_decode($texto)),$bordas,0,'L');
			//$pdf->Image("codigos/" . $entry['codigo'].".png",70,7+$height*2*$cont+$top+3,$qr_size);
			$pdf->Image("barcode.php?barcode=1",70,7+$height*2*$cont+$top+3,$qr_size);
		}

		if ($entry2)
		{
			$texto = $entry2['instituicao']	;
			$texto = mb_strtoupper($texto, 'UTF-8');

			$pdf->Cell($width,$height,strtoupper(utf8_decode($texto)),$bordas,1,'L');
			$pdf->Image("codigos/" . $entry2['codigo'].".png",70+$width,7+$height*2*$cont+$top+3,$qr_size);
		}

			$cont++;

			if ($cont == 7)
			{
				$cont = 0;
			}

		}

		$pdf->Output(); 
?>
</body>
