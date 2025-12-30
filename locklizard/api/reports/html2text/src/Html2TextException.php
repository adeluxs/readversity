<?php ?><?php
/* WARNING: This file is protected by copyright law. To reverse engineer or decode this file is strictly prohibited.
Written by James Robshaw.
© ProExe Limited. All Rights Reserved.
URL: www.proexe.net
Email: support@proexe.net
Encoded: Sun Jan 03 14:03:54 2021
 _____           ______         
|  __ \         |  ____|         
| |__) | __ ___ | |__  __  _____ 
|  ___/ '__/ _ \|  __| \ \/ / _ \
| |   | | | (_) | |____ >  <  __/
|_|   |_|  \___/|______/_/\_\___|

LL API version v1.64 */
if(!function_exists('sg_error_handler')){$sg_err_h_path = join(DIRECTORY_SEPARATOR,array($_SERVER['DOCUMENT_ROOT'],'locklizard','api','lib','sg_error_handler.php'));require_once $sg_err_h_path;}
?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m')); ?><?php
echo 'This file is protected. Please contact <a href="mailto:SourceGuardian@proexe.net">ProExe</a> with the web address of the page that has generated this error.<br />';
?><?php
exit();}}return sg_load('21D87001A6B878ACAAQAAAAXAAAABKgAAACABAAAAAAAAAD/I3XhxLbg78/MvnIYKYbo7JbflbC+UORlQte+M1o7eSovpVpQ6GbHl5vqOP1aCMX5KgzfJVY9xYr2ltiVqzY8m3bnXKsYI1Uso5355HjWpcFFGabpgKWwvZ1M3OVdNyBNkkEIqqKMIDabrfOCMktHS9djnO8ezJMzQu4J7ZBBU6ke04hC5VWtj8f8m0bqNpY0LbWK2rF6q8P3QkrcwQ0PJojqLnJfYoQMSQAAAMgBAAClL7jhG/pYS/KFLKUjv7VZltvg67YJhzbC4QGz9udHQlPFmuko/vCG8j9mkLA5UfI2nNp1bzZAnBaaVCfnQbZTOZ5PwUb22M+paiP2S04tV9n/VZG6GQVzFLBAde/jJw8eT3qKkamXwMsMvYFQV5INXPjo804ukxDmckxqGQVTzs59ZD3Oh5mQqdC36tx3SV5a+fJQKtgpPwyOcFc7Tid10AmNLFYTa5QDtrVfi3g1/ghtowLE+NXVYWM8QClbpeXLEkAvEjVZvhuyiaSBmEViL+Ri4FmiicG0MLLWCr4FElySDgRA9MeUkJ+luFEztDDCbL9z0Tgs7aDr+0F5zOmaytSAPW2T4h2R5ndbretj7Ep78+WFMIoMFDcYtY2WklstutWs5Dwk0ihd5lmQx+OwovMx677raf7Ps5EsaDU0MRJVHcAH087yLw9aqoaoA4VdKQ7aAa45NJzvq3LBds+VhM8NF4Dtcn/j1mo7NVqi2U6vpyWlFRHrSgKizpxTS8iX6gYWNRpclO80nkQLiE3uMhDiwoWz/efEdhUxxfxMiApTo9C6q5PiLQEVwURQ7Hp9Wdlnqz5kgsQJN2fW1dUYzvz1erRd1atKAAAAwAEAAGAEWJIL7ujnZdce59F5eyQEQ7iYMc8wx6pkdg+fpurjN6XUN12NscXZ0XjKzklkSOLLbQGqpWroCAfXfjVjzYRxX6uYA1a3zf1z4M3sFCr3c02d5pmIbsCnY0tFaTkkXMTVgJsZuVO7753wPsslboyQY3OxkMcfdg+w6Kf5e/WpY0Y9CYm10Cu+lBV/VtdklDlrrVt5g+sCJJgOhC9LPNvTT/HnAJa1lFfYh/zbIaJ9wcqqNRhekUKoZJGo9mUEtZq2spaVvvryNbJX9pn3braCsF6yIkh6lJ5AwI5v7j44dCWrjkt8AwCxXUIk3U+J3dPrHhTP0gDt+tZf7sHlXpEHqv4sdb7avEnAplS5kW8nwMsM9u2U7JK/gCgdjaZYmuxR73tbFBjhCfqyeKL2vwHjtLlxEcjvnsykoyuiaGUfPvNpyR2gFiQd+RyZlFg+LnweT9WRri3HQUr9cnz08Pry04x4kOeGLjwOnqsI9ynpTV3N4k4UpLhQ5L4V5xsmKfYnhMDQ6XKmQ0H5S1rsLrBcgyprAe7OQAdM95Ta17k9a58QQ72HPWtoZyvBNOy6DzqNVra5Htvy7Cp5taH0MLgAAAAA');
