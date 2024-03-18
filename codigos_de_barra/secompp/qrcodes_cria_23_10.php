<?php
	$query = "SELECT u.usr_id as codigo, dad_nome as nome FROM usuario u, dados d WHERE d.usr_id = u.usr_id and u.usr_id>195  ORDER BY dad_nome;"; //Alias usados pra adaptar ao ano anterior

	$host="localhost";
	$username="secompp";
	$password="scomp_2*12";
	$database="secompp";

	$db = mysql_connect($host,$username,$password);

	mysql_select_db($database) or die ("Problemas na conexão!");

	require_once("fpdf/fpdf.php");

	define("FPDF_FONTPATH", "fpdf/font/"); 

	$width = 74; //largura células
	$height = 13.3;  //altura célula
	$qr_size = 35;

	$bordas = 0; //1 pra mostrar bordas, 0 não

	$cont = 0;
	$cont2 = 0;

	$result = mysql_query($query);			

	$pdf = new FPDF('P','mm',array(215,300));
	$pdf->Open(); 

		$pdf->SetFont("Times", "", 8); 
		$pdf->SetTopMargin(10);
		$pdf->SetLeftMargin(0);

	$pdf->AddPage(); 

	//Remove pasta antiga e cria nova
	//exec ("rm -rf codigos");
	//exec ("mkdir codigos");

	while ($entry = mysql_fetch_array($result))
	{	
		$pdf->SetFont("Times", "", 8 ); 
		$pdf->SetTopMargin(10);
		$pdf->SetLeftMargin(4);
	
		if ($cont2%10==0 && $cont2!=0) 
		{
			$pdf->AddPage();
		}
		
		if ($cont2%10==0) 
		{
			$pdf->Cell($width,0,"",$bordas,0,'L');			
			$pdf->Cell($width,0,"",$bordas,0,'L');
			$pdf->Cell($width,0,"",$bordas,1,'L');						
		}
		

		$cont2++;

		$entry2 = mysql_fetch_array($result);
		$entry3 = mysql_fetch_array($result);

		/*
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
		*/


		if ($entry)
		{
			$texto = $entry['nome'];
			$texto = mb_strtoupper($texto);
//			$pdf->Cell($width,$height,strtoupper(utf8_decode($entry['codigo'] . "-" . $texto)),$bordas,0,'L');
//			$pdf->Cell($width,$height,strtoupper(utf8_decode($texto)),$bordas,0,'L');
			$pdf->Cell($width,$height,strtoupper(($texto)),$bordas,0,'L');												
		}

		if ($entry2)
		{
			$texto = $entry2['nome'];
			$texto = mb_strtoupper($texto);
//			$pdf->Cell($width,$height,strtoupper(utf8_decode($entry2['codigo'] . "-" . $texto)),$bordas,0,'L');
			$pdf->Cell($width,$height,strtoupper(($texto)),$bordas,0,'L');												
		}
		else
		{
			$texto = $entry2['nome'];
			$texto = mb_strtoupper($texto, 'UTF-8');
			$pdf->Cell($width,$height,"",$bordas,0,'L');
		}

		if ($entry3)
		{
			$texto = $entry3['nome'];
			$texto = mb_strtoupper($texto);
//			$pdf->Cell($width,$height,strtoupper(utf8_decode($entry3['codigo'] . "-" . $texto)),$bordas,1,'L');
			$pdf->Cell($width,$height,strtoupper(($texto)),$bordas,1,'L');												
		}
		else
		{
			$texto = $entry3['nome']	;
			$texto = mb_strtoupper($texto, 'UTF-8');
			$pdf->Cell($width,$height,"",$bordas,1,'L');
		}

		//Instituição
		if ($entry)
		{
			//$texto = $entry['instituicao']	;
			//$texto = mb_strtoupper($texto, 'UTF-8');
			$pdf->Cell($width,$height,"",$bordas,0,'L');
			$pdf->Image("codigos/".$entry['codigo'].".jpg",20,16+$height*2*$cont+$top+3,$qr_size);
		}

		if ($entry2)
		{
			//$texto = $entry2['instituicao']	;
			//$texto = mb_strtoupper($texto, 'UTF-8');
			$pdf->Cell($width,$height,"",$bordas,0,'L');
			$pdf->Image("codigos/".$entry2['codigo'].".jpg",94,16+$height*2*$cont+$top+3,$qr_size);
			//$pdf->Image('codigos/'.$entry2['codigo'].'.jpg',70,7+$height*2*$cont+$top+3,$qr_size);
		}

		if ($entry3)
		{
			//$texto = $entry3['instituicao']	;
			//$texto = mb_strtoupper($texto, 'UTF-8');
			$pdf->Image("codigos/".$entry3['codigo'].".jpg",168,16+$height*2*$cont+$top+3,$qr_size);
			$pdf->Cell($width,$height,"",$bordas,1,'L');
		}


			$cont++;

			if ($cont == 10)
			{
				$cont = 0;
			}

		}

		$pdf->Output(); 
?>
</body>
