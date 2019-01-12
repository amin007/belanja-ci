<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Caripdf_model extends CI_Model
{
#===================================================================================================
#---------------------------------------------------------------------------------------------------
	function __construct()
	{
		parent::__construct();
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
	}
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
	function data()
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		//$ujian = $this->db->query('SELECT * FROM senarai_belanja');
		$ujian = array ('senarai_belanja' => 
			array (
				0 => 
				array (
				  'no' => '6',
				  'nohp' => '0147852369',
				  'tarikh' => '2018-12-03',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				1 => 
				array (
				  'no' => '7',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-01-12',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				2 => 
				array (
				  'no' => '8',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-02-12',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '11',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				3 => 
				array (
				  'no' => '9',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-03-12',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				4 => 
				array (
				  'no' => '10',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-04-12',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				5 => 
				array (
				  'no' => '11',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-05-14',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				6 => 
				array (
				  'no' => '12',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-06-12',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				7 => 
				array (
				  'no' => '13',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-07-12',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
				8 => 
				array (
				  'no' => '14',
				  'nohp' => '0147852369',
				  'tarikh' => '2019-08-12',
				  'belanja_keterangan' => 'topup maxis',
				  'amaun_rm' => '30.00',
				  'nilai_sebenar' => '1',
				  'punca' => '20',
				  'tukarduit' => '04',
				  'edagang' => '2',
				  'catatan' => 'test',
				),
			  ),
			);
		//$this->semakPembolehubah($ujian,'ujian',0);
		return $ujian;
	}
#---------------------------------------------------------------------------------------------------
#===================================================================================================
}