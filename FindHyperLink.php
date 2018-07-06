<?php
	class FindHyperLink{
		
		function findLinks($fileContent){
			$i=0;
#			$file = file_get_contents($fileContent);
#			$str = explode('\n',$file);
			$file = fopen($fileContent,'r');
			
#			var_dump();
			while(! feof($file)){
				
				$str = fgets($file);
				if(strpos($str,"href=")){
					$i++;
					$count = strpos($str,"href=");
#					echo $count;
					$count+= 6;
					
					while(strcmp($str[$count],'"')!==0){
						
						echo $str[$count];
						$count++;

					}	
				
					echo "\n";				

				}
			}
		echo "\n\n$i \n\n";
		}	
	}

