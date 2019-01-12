<?php
//$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$tajuk = 'Ini-Semua_Adalah-Cubaan';
$pdf->SetTitle($tajuk);
$pdf->SetHeaderMargin(5);
$pdf->SetTopMargin(5);
$pdf->setFooterMargin(5);
//$pdf->SetAutoPageBreak(true);
//$pdf->SetAuthor('Author');
//$pdf->SetDisplayMode('real', 'default');

$pdf->AddPage('L', 'A4');# A4 LANDSCAPE
#---------------------------------------------------------------------------------------------------
//$pdf->Write(5, 'Some sample text');
#---------------------------------------------------------------------------------------------------
# set pembolehubah
require 'atas/pilih_jadual_bootstrap.php';
list($tajuk,$jadual) = ulangTable($this->senarai);
#---------------------------------------------------------------------------------------------------
$jadual = <<<EOD
<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
.fa-input {font-family: FontAwesome}
</style>
<br>
$jadual
<br>
EOD;

$pdf->writeHTML($jadual, true, false, false, false, '');
#---------------------------------------------------------------------------------------------------

$pdf->Output($tajuk . '.pdf', 'I');