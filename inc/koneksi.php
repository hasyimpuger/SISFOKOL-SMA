<?php
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
/////// SISFOKOL_SMA_v5.0_(PernahJaya)                          ///////
/////// (Sistem Informasi Sekolah untuk SMA)                    ///////
///////////////////////////////////////////////////////////////////////
/////// Dibuat oleh :                                           ///////
/////// Agus Muhajir, S.Kom                                     ///////
/////// URL 	:                                               ///////
///////     * http://omahbiasawae.com/                          ///////
///////     * http://sisfokol.wordpress.com/                    ///////
///////     * http://hajirodeon.wordpress.com/                  ///////
///////     * http://yahoogroup.com/groups/sisfokol/            ///////
///////     * http://yahoogroup.com/groups/linuxbiasawae/       ///////
/////// E-Mail	:                                               ///////
///////     * hajirodeon@yahoo.com                              ///////
///////     * hajirodeon@gmail.com                              ///////
/////// HP/SMS/WA : 081-829-88-54                               ///////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////



//KONEKSI ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$koneksi = mysql_connect($xhostname, $xusername, $xpassword) or die(mysql_error());
mysql_select_db($xdatabase);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//Detail Sekolah ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$qdti = mysql_query("SELECT * FROM set_sekolah");
$rdti = mysql_fetch_assoc($qdti);
$sek_nama = balikin($rdti['sek_nama']);
$sek_alamat = balikin($rdti['sek_alamat']);
$sek_kontak = balikin($rdti['sek_kontak']);
$sek_kota = balikin($rdti['sek_kota']);
$sek_filex = $rdti['filex'];



//nek null foto
if (empty($sek_filex))
	{
	$sek_filexx = "$sumber/img/foto_blank.jpg";
	}
else
	{
	$sek_filexx = "$sumber/filebox/logo/$sek_filex";
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>