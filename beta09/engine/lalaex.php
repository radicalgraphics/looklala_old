

<?php

/*$file = 'http://www.oanda.com/currency/converter/'; 
$handle = fopen($file, "r"); 
$input = fread($handle, filesize($file)); 
fclose($handle); 

$pattern = 'USD'; 
preg_match($pattern,$input,$regs); 
$session = $regs[0]; // Now I have the 10 digits number stored in $session 


*/
$html = implode('', file('http://www.oanda.com/currency/converter/'));

$pattern = '(/amount/)i'; 
preg_match($pattern,$html,$regs); 
$session = $regs[0]; // Now I have the 10 digits number stored in $session

print_r($regs);echo;


preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
$host = $matches[1];

print_r($host);echo;

// The "i" after the pattern delimiter indicates a case-insensitive search
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}


?>