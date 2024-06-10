<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tanggalkonversi {

// konversi menjadi nama hari bahasa indonesia
function tanggal(){
  $tanggal=date("Y-m-d");
  return $tanggal; 
}



 function seminggu() {
  $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
  return $seminggu;
}

function hari(){
    $hari     = date("w");
    return $hari; 
}

function hari_ini(){ 
   $seminggu =  $this->seminggu();
   $hari_ini = $seminggu[$this->hari()];
  
  //  var_dump($hari_ini);
  // $hari_ini = $this->seminggu[$this->hari()]; // konversi menjadi hari bahasa indonesia
   return $hari_ini;
}

// format penanggalan di database MySQL
function tgl_sekarang(){
  $tgl_sekarang = date("Ymd");
  return $tgl_sekarang;
}
 function thn_sekarang(){
  $thn_sekarang = date("Y");
   return $thn_sekarang;
} 
 function jam_sekarang(){
  $jam_sekarang = date("H:i:s");
  return $jam_sekarang;
}

// fungsi untuk mengubah tanggal menjadi format bahasa indonesia, contoh: 14 Maret 2014 
  function tgl_indo($tgl){
 // var_dump(ambilbulan('12'));
	$tanggal = substr($tgl,8,2);
	$bulan   = $this->ambilbulan(substr($tgl,5,2)); // konversi menjadi nama bulan bahasa indonesia
	$tahun   = substr($tgl,0,4);
	return $tanggal.' '.$bulan.' '.$tahun;		 
}	

// fungsi untuk mengubah angka bulan menjadi nama bulan
function ambilbulan($bln){
  if ($bln=="01") return "Januari";
  elseif ($bln=="02") return "Februari";
  elseif ($bln=="03") return "Maret";
  elseif ($bln=="04") return "April";
  elseif ($bln=="05") return "Mei";
  elseif ($bln=="06") return "Juni";
  elseif ($bln=="07") return "Juli";
  elseif ($bln=="08") return "Agustus";
  elseif ($bln=="09") return "September";
  elseif ($bln=="10") return "Oktober";
  elseif ($bln=="11") return "November";
  elseif ($bln=="12") return "Desember";
} 

// fungsi untuk mengubah susunan format tanggal
function ubah_tgl($tanggal) { 
   $pisah   = explode('/',$tanggal);
   $larik   = array($pisah[2],$pisah[1],$pisah[0]);
   $satukan = implode('-',$larik);
   return $satukan;
}

function ubah_tgl2($tanggal) { 
   $pisah   = explode('-',$tanggal);
   $larik   = array($pisah[2],$pisah[1],$pisah[0]);
   $satukan = implode('/',$larik);
   return $satukan;
}

function tanggalsaja($tanggal) { 
  $pisah   = explode('-',$tanggal);
  $larik   = array($pisah[2]);
  $satukan = implode($larik);

  return $satukan;
}
function bulansaja($tanggal) { 
  $pisah   = explode('-',$tanggal);
  $larik   = array($pisah[1]);
  $bln     = implode($larik);
  if ($bln=="01") return "Jan";
  elseif ($bln=="02") return "Feb";
  elseif ($bln=="03") return "Mar";
  elseif ($bln=="04") return "Apr";
  elseif ($bln=="05") return "Mei";
  elseif ($bln=="06") return "Jun";
  elseif ($bln=="07") return "Jul";
  elseif ($bln=="08") return "Agust";
  elseif ($bln=="09") return "Sept";
  elseif ($bln=="10") return "Okt";
  elseif ($bln=="11") return "Nov";
  elseif ($bln=="12") return "Des";
  return $bln;
}

}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */