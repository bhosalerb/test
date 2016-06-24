<?php

class Calculator
{
    public function add($argumentsNo, $argument)
    {
        if ($argumentsNo > 2) {
		    $str = $argument[2];
		    $getNumber = explode(',', $str);
		    if (strpos($str, '\\') !== false) {
		        $getDelimitor = preg_split("/[\\\\]+/", $str);
		        $str = str_replace("\\", '', $str);
		        $getNumber = explode($getDelimitor[1], $str);
		    }
			$data = 0;
			$negativeNo = array_filter($getNumber, function($v) { return $v < 0; });
			if(count($negativeNo) > 0) {
				return "Error: Negative numbers not allowed. \n"; die;
			}
			foreach ($getNumber as $val) {			
			    $data += $val;
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
