<?php
	$fileContent= file_get_contents('https://www.unicourt.com/');
#	$fileContent= file_get_contents('http://www.example.com/');
#	echo strstr($fileContent,"<a");
	$check = preg_match_all("/<a(.*)href=\"(.*)\">(.*)<\/a>/",$fileContent,$match);
	if($check){
#		var_dump($match);
#		var_dump($match[2]);
		foreach($match[2] as $val){
			$str=explode(" ",$val);
			echo $str[0]."\n";
		}
	}

?>
