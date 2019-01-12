<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caripdf extends CI_Controller 
{
#===================================================================================================
/**
 * Index Page for this controller.
 *
 * Maps to the following URL
 * 		http://example.com/index.php/welcome
 *	- or -
 * 		http://example.com/index.php/welcome/index
 *	- or -
 * Since this controller is set as the default controller in
 * config/routes.php, it's displayed at http://example.com/
 *
 * So any other public methods not prefixed with an underscore will
 * map to /index.php/welcome/<method_name>
 * @see https://codeigniter.com/user_guide/general/urls.html
 */
#---------------------------------------------------------------------------------------------------
	public function semakPembolehubah($senarai,$jadual,$p='0')
	{
		echo '<pre>$' . $jadual . '=><br>';
		if($p == '0') print_r($senarai);
		if($p == '1') var_export($senarai);
		echo '</pre>';//*/
		//$this->semakPembolehubah($ujian,'ujian',0);
		#http://php.net/manual/en/function.var-export.php
		#http://php.net/manual/en/function.print-r.php
	}
#---------------------------------------------------------------------------------------------------
	public function index()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		$this->load->model('Caripdf_model','Pdf');
		$this->senarai = $this->Pdf->data();
		//$this->semakPembolehubah($senarai,'senarai',0);
		//$this->load->view('caripdf/a4');
		# Pergi papar kandungan
		$this->load->library('Pdf');
		$this->load->view('caripdf/contoh003');
	}
#---------------------------------------------------------------------------------------------------
	public function dataapa()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		$this->load->model('Caripdf_model','Pdf');
		$this->senarai = $this->Pdf->panggilData();
		//$this->semakPembolehubah($senarai,'senarai',0);
		//$this->load->view('caripdf/a4');
		# Pergi papar kandungan
		$this->load->library('Pdf');
		$this->load->view('caripdf/contoh003');//*/
	}
#---------------------------------------------------------------------------------------------------
#===================================================================================================
}
