<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security_1 
{

  // cek value angka atau bukan
  function isKata($kata)
	{
		if (preg_match("/^\w+$/i", $kata))
		{
			return $kata;
		} else {
			return false;
		}
  }
  
  //cek panjang string value yang diperbolehkan masuk berapa banyak
  function checkLength($value, $maxLength, $minLength = 0)
	{
		if (!(strlen($value) > $maxLength) && !(strlen($value) < $minLength)) {
			return $value;
		} else {
			return false;
		}
  }
  
  //ngecek angka itu positif apa bukan
  function checkNegative($value)
	{
		if (!($value <= 0))
			return $value;
		else
			return false;
  }
  
 // escape string postgre query
  function sanitize($string)
	{
		$string = trim(strip_tags(stripslashes($string)));
		return $string;
	}

	function convertimg($gambar)
    {
        $image = $gambar;
        // Read image path, convert to base64 encoding
        $imageData = base64_encode(file_get_contents($image));
        // Format the image SRC:  data:{mime};base64,{data};
        $src = 'data:image/jpg'.mime_content_type($image).';base64,'.$imageData;
        return $src;
        
        
        // Echo out a sample image contoh penulisan
        //echo '<img src="'.$src.'">';

    }
  

}

/* End of file Security.php */
/* Location: ./system/application/libraries/Security.php */