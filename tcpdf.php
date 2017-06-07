Step1: download ttf font
2:convert that font
  ---> php tcpdf_addfont.php  -b -t ipagp -f 32 -i D:\ipagp.ttf
created 3 file in fonts (tcpdf folder) ctg.z  .php .z  
<?php

require(APPPATH_USERFILE.'../assets/tcpdf/tcpdf.php'); // TCPDF
 
$pdf = new \TCPDF("L", "mm", "A4", true, "UTF-8" );
$font = new \TCPDF_FONTS();
$pdf->setFontSubsetting(true);
$pdf->SetTextColor(245,245,0);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->SetFont('ipagp', '', 30); // フォントをセット
$pdf->Text( 10, 10, "フォントをセット" );
$pdf->Text( 30, 30, "asdfasdf" );
$pdf->Output("test.pdf", "I");
die("done");
?>
