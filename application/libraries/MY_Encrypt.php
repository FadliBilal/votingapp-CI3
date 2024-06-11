<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Encrypt extends CI_Encrypt {

    private $cipher = 'aes-128-cbc';
    private $key;

    public function __construct() {
        parent::__construct();
        $this->key = config_item('encryption_key'); 
    }

    function encode($string, $key = "", $url_safe = TRUE) {
        if (empty($key)) {
            $key = $this->key;
        }

        $iv_size = openssl_cipher_iv_length($this->cipher);
        $iv = openssl_random_pseudo_bytes($iv_size);
        $ciphertext = openssl_encrypt($string, $this->cipher, $key, OPENSSL_RAW_DATA, $iv);
        $ret = base64_encode($iv . $ciphertext);

        if ($url_safe) {
            $ret = strtr($ret, array('+' => '.', '=' => '-', '/' => '~'));
        }

        return $ret;
    }

    function decode($string, $key = "") {
        if (empty($key)) {
            $key = $this->key;
        }

        $string = strtr($string, array('.' => '+', '-' => '=', '~' => '/'));
        $ciphertext = base64_decode($string);
        $iv_size = openssl_cipher_iv_length($this->cipher);
        $iv = substr($ciphertext, 0, $iv_size);
        $ciphertext = substr($ciphertext, $iv_size);
        $plaintext = openssl_decrypt($ciphertext, $this->cipher, $key, OPENSSL_RAW_DATA, $iv);

        return $plaintext;
    }
}
?>
