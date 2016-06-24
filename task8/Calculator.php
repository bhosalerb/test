<?php

class Calculator
{
    public function add($argumentsNo, $argument)
    {
        if ($argumentsNo > 2) {
			$action = $argument[1];
		    $str = $argument[2];
		    $getNumber = explode(',', $str);
		    if (strpos($str, '\\') !== false) {
		        $getDelimitor = preg_split("/[\\\\]+/", $str);
		        $str = str_replace("\\", '', $str);
		        $getNumber = explode($getDelimitor[1], $str);
		    }
			$data = 0;
			$getNumber = array_filter($getNumber, function($v) { return $v < 1000; });
			switch ($action) {					
                case 'multiply':
                    $getNumber = array_filter($getNumber, function($v) { return $v > 0; });
                    $data = array_product($getNumber);
                    break;
                default:
                    foreach ($getNumber as $val) {
                        $data += $val;
                    }			    
                    break;				
			}	
			return $data ."\n";
		} else {
		    return 0 . "\n";
		}	    
    }
}

$argumentsNo = $argc;
$argument = $argv;
$getData = new Calculator();
echo $getData->add($argumentsNo, $argument);

?>
