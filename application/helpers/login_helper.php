<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

function cek_login(){
      $CI   =& get_instance();
      if($CI->session->userdata('status_login') !='Oke'){
          redirect('adminweb');
      }
}

?>
