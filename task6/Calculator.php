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
			foreach ($getNumber as $val) {			    
			    $data += $val;		    
			}
			if(count($negativeNo) > 0) {
				$negativeStr = implode(",",$negativeNo);
				return "Error: Negative numbers (".$negativeStr.") not allowed. \n"; die;
			} else {
				return $data ."\n";
		    }
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
