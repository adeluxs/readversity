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
exit();}}return sg_load('21D87001A6B878ACAAQAAAAXAAAABKgAAACABAAAAAAAAAD/I3XhxLbg78/MvnIYKYbo7JbflbC+UORlQte+M1o7eSovpVpQ6GbHl5vqOP1aCMX5KgzfJVY9xYr2ltiVqzY8m3bnXKsYI1Uso5355HjWpcFFGabpgKWwvZ1M3OVdNyBNkkEIqqKMIDabrfOCMktHS9djnO8ezJMzQu4J7ZBBU6ke04hC5VWtj8f8m0bqNpY0LbWK2rF6q8P3QkrcwQ0PJojqLnJfYoQMSQAAAOgBAAB4Zq8uBJtOsBB7yQZ8MV0bKAumK5G+NMSWDIMznLxdZ3QZ9UHzyif2tkGglv0U3jYYhwQk8GeB4bJ0b2EXAEluvmqnlDmzRaU5aR74jqob6pF1dUq52KyxXIgRo2qe8aSblzVoZ2G7dN0XtKsGqZuIbi6UkXD4NC7GcQ041qnJ5s7bdONVh0ocUvgN/myOmwJuubcTazqIBM+MTR/HbtmISFrmTlnDNqaZdPMgOlsqp672/B4xTJEPdkpfjU0blscTEc35gZrtYOS0pydgX53JwPJvlP3kUOnFPGRToo8htksTqvOFE+fpDpE1ivuc7IQrkeq5eHuSiSyjzbuGVOIB8G9ChfMoGGWBjGDH7oqUAQQ1pZPFPxZt5rO+r9kZe8zYScywW06W9UXHzf4/TZb9xSxTLEqykZ6rzU4nfiIHhCawkaUAEJHCKk1PjK8x9kXvUVpK6LHhzsJ3Dlz3BfoBa3eJQxxSF+A47xoSaB/PXGrStIEehWObLVK3Stn1z4Jq75ABuoqSSlXNDWI+iE+DqBwPRUaBMePMUnez94vEfzJq+9ZEvpzXH+kLbdfngKg1ta1nck6bwjjUaKeqNcs/DVhE7oQvOvgYv2r6yAzR6dijsYs3LOiHRFB39OSOwH0hRmtDXHDZ7UoAAADgAQAALAHvKreNJ4Ix+cUpAyLdqzzFVbYFs0OGAuyJD13l8B/7R4G8nPsaiLTuoLNLfUEhE7MIbtF4z/+jTHAQ+Tuyv1jxdfJho1Iy3W+iraLaQ+1ExcWtIhbKfZHXdAlI8tGhDnH2V4KbTcEDXWhmYhzOWqMeXZIQ/qFSY0qFUFJUgwn6WJ5g4lZCfvYicIGjwzVxzWMPUPj9Au6bC1neW4P0c/ZR7ZwbgFBxNt1ur5Y3Dai5cW7w3Za2wwWgpjL+WYET0Bunnek6TbAx4hmLzhbrR5qhBAskGsDakh9kXgkU9opL1PnjTsqQAOR4OED25ZKasWHHLm+wQpuDLsEchrl9yY/GGhsYi8/MKZbTqQcnFNsU9uqDFQEyaeyB7b+tDkKbvdrHk+Um64xdxDnbFJ8/NIYwOZq4c8q89kSP5ijI+5fISwp6ZB0ev7uxbi3wP0snMgoYTerFJr4lBNpsTzGCtRLZD66SzPv2JZQoX9qSV4Mk+ecWhYj35lM2NZuO04OKM1rUtVcL+iah04XBwchBYpoIWtLy15XGz0tWbz83Is/uqvJURXOLkM9zj5mxA6tbzYd3cjA43q0etjYOxEbenBcR9TMHm8Ckra+Kym0T+hnVK/8gn7Pzf/GZHLupRdlgAAAAAA==');
