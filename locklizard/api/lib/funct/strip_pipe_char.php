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
exit();}}return sg_load('21D87001A6B878ACAAQAAAAXAAAABKgAAACABAAAAAAAAAD/I3XhxLbg78/MvnIYKYbo7JbflbC+UORlQte+M1o7eSovpVpQ6GbHl5vqOP1aCMX5KgzfJVY9xYr2ltiVqzY8m3bnXKsYI1Uso5355HjWpcFFGabpgKWwvZ1M3OVdNyBNkkEIqqKMIDabrfOCMktHS9djnO8ezJMzQu4J7ZBBU6ke04hC5VWtj8f8m0bqNpY0LbWK2rF6q8P3QkrcwQ0PJojqLnJfYoQMSQAAAAgCAADKt8+LfmmU2a2HVe0B+qIW2fIC84Ji3NkqPGi0FZMc7c8/VS3wavJvJqiDi/opRdR4JzhuR6smnz2XULVOI8aSAFWBt/x8Ut77s348LStof3ZYxXHcOTvTCKJjkeUQ8N0ip/vxWQw5IO44Wtqa6qOsEoXIXwguUfyGJcDHesyM9fWq54rRsUFmHvV4fcS/o0MX+tgHL4rd9+4hVI8jsXGP3Ms/VLwgpPd0W0G2zRyzQ/APYkgVMye0mafTIYB80TKgFiA9Eg180Y4RmduYWceQmy1HcTNDtkS5vuDD6/OCM6UUPtlw5AFY97zYcvh742pAEIDqT98zLkLIP3aOSuG4LX8gNi7DXyUvwNFMofRtaTJ+sMWQ9OSTAAlm2qZxSh/fasyml7GpaRNz2nF7t6fdfEvYAY/TmRJIx0bNmvuSS3F/lw9EKtvLmcazMepJHXeZndl7ebGkhiRaldA555yPTBMia6dRr35zTs53ySabMSvy19ihR+0AqkZbonQ20e2u+4Wr7y7EPCc6cMnGF1JnOeCnDpqemnxARtd/nAGnnTz18DyiIqssuhMBU7X0x1jS6rLOmjJTgd2bQIhwbkGKl4tx9O4fq2VEwgWQmp2J+tcL42z+g2EmPB6K1Qz8PwKDwUCb8cp/E++TR24nL+eYigicVJBBjNv4IqcL7BivFgqS/bapedK0SgAAAAgCAACqcfFwEb2Khfr9ZKhwIhqYXkWrjG4esiaDTw/2MoRUq0J3OPL3Fpdy40SjSH//fqNiNn+coaASIdjZSbS8R+Rzs+vg2AVrHU7XFjiruDp5xF8ovz9VXKr6hQsv3KytucbZGHz7CE0/FMFI5UuaAjrzL7PtbRqDTw7YINBcebmSSxB8KJBRWG1iCG0QHESeyglLPhdDmbnRuGvP2sNAzxadFYd98V/n0WH6nLPlBRa5LLG0seJ8nSeDwVQExvxqwf2PSpYjWYFdMgceXTuWo6iDM/leDSlKTjVp53h/wkIWdpRock9L0QywzjmLGGh+H216+kvgclTx2BZOs4XsDNywjUyXhvJ1GYrI1RRNE6Mh/AKm/cIAr+c74gMi9Ra5Ti/qiHX+hTgoxulWe0YHFdnet5yaVHKiT2XE1pzmVpueM8Z0hA0CG/oM37LoNFxe8zIUsTsdNKUcOqvOemQhol7G6A8KhrbvaUpCUFNhO1/+9GCvWcmZL8zXg7kWdh3yAe/C2hY+gkGhR8ioUzNP6tO9xqM3SGStV1zR2ub9SIgntlDH+0+IbKED+E+notqYFrISNb8Wo52SRVnyrXE02Rm264Zts9iJOy6QN+DE2RrsECNxjEuXi4CVtmwnjjfo7mptf6mqr4+D5Jl6NHO08279oT5ZsLr4QByuOrNdT1U1zaxnjQqY8gn8AAAAAA==');
