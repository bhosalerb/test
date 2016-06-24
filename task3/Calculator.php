<?php

class Calculator
{
    public function add($argumentsNo, $argument)
    {
        if ($argumentsNo > 2) {
		    $str = $argument[2];
		    $strData = str_replace("n", ',', $str);
			$getNumber = explode(',', $strData);
			$data = 0;
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
