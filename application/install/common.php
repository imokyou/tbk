<?php /* 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门
-- enphp : https://git.oschina.net/mz/mzphp2
 */ error_reporting(E_ALL^E_NOTICE);define('��', '���');������Β;$_GET[��] = explode('|$|=|2', 'os|$|=|2title|$|=|2操作系统|$|=|2limit|$|=|2不限制|$|=|2current|$|=|2icon|$|=|2am-icon-check am-text-success|$|=|2php|$|=|2PHP版本|$|=|25.4+|$|=|2upload|$|=|2附件上传|$|=|2file_uploads|$|=|2upload_max_filesize|$|=|2未知|$|=|2gd|$|=|2GD库|$|=|22.0+|$|=|2disk|$|=|2磁盘空间|$|=|2100M+|$|=|2am-icon-close am-text-danger|$|=|2error|$|=|2gd_info|$|=|2GD Version|$|=|2未安装|$|=|2disk_free_space|$|=|2./|$|=|2M|$|=|2B|$|=|2type|$|=|2dir|$|=|2name|$|=|2./application/|$|=|2path|$|=|2可写|$|=|2./application/database.php|$|=|2extra|$|=|2./data/|$|=|2data|$|=|2./runtime/|$|=|2不可写|$|=|2不存在|$|=|2ext|$|=|2pdo|$|=|2支持|$|=|2isMust|$|=|2pdo_mysql|$|=|2func|$|=|2curl_init|$|=|2file_get_contents|$|=|2mb_strlen|$|=|2不支持|$|=|2com|$|=|2which |$|=|2shell_exec');�����������вĊ�;
 function checkEnv(){$�=&$_GET{��};$����=[$�[0] =>[$�{0x001} =>$�[0x0002],$�{0x00003} =>$�[0x000004],$�{0x05} =>PHP_OS,$�[0x006] =>$�{0x0007},],$�[0x00008] =>[$�{0x001} =>$�{0x000009},$�{0x00003} =>$�[0x0a],$�{0x05} =>PHP_VERSION,$�[0x006] =>$�{0x0007},],$�{0x00b} =>[$�{0x001} =>$�[0x000c],$�{0x00003} =>$�[0x000004],$�{0x05} =>ini_get($�{0x0000d})?ini_get($�[0x00000e]):$�{0x0f},$�[0x006] =>$�{0x0007},],$�[0x0010] =>[$�{0x001} =>$�{0x00011},$�{0x00003} =>$�[0x000012],$�{0x05} =>$�{0x0f},$�[0x006] =>$�{0x0007},],$�{0x0000013} =>[$�{0x001} =>$�[0x014],$�{0x00003} =>$�{0x0015},$�{0x05} =>$�{0x0f},$�[0x006] =>$�{0x0007},],];if($����[$�[0x00008]][$�{0x05}]<5.4){$����[$�[0x00008]][$�[0x006]]=$�[0x00016];session($�{0x000017},!0);}$԰=function_exists($�[0x0000018])?gd_info():array();if(empty($԰[$�{0x019}])){$����[$�[0x0010]][$�{0x05}]=$�[0x001a];$����[$�[0x0010]][$�[0x006]]=$�[0x00016];session($�{0x000017},!0);}else{$����[$�[0x0010]][$�{0x05}]=$԰[$�{0x019}];}unset($԰);if(function_exists($�{0x0001b})){$�=floor(disk_free_space($�[0x00001c])/(0x00000400*0x00000400)).$�{0x000001d};$����[$�{0x0000013}][$�{0x05}]=$�.$�[0x01e];if($�<0x064){$����[$�{0x0000013}][$�[0x006]]=$�[0x00016];session($�{0x000017},!0);}}return $����;}function checkDirFile(){$�����=&$_GET{��};$��=[[$�����{0x001f} =>$�����[0x00020],$�����{0x000021} =>$�����[0x0000022],$�����{0x023} =>realpath(APP_PATH),$�����{0x001} =>$�����[0x0024],$�����[0x006] =>$�����{0x0007},],[$�����{0x001f} =>$�����[0x00020],$�����{0x000021} =>$�����{0x00025},$�����{0x023} =>realpath(APP_PATH).DS.$�����[0x000026] .DS,$�����{0x001} =>$�����[0x0024],$�����[0x006] =>$�����{0x0007},],[$�����{0x001f} =>$�����[0x00020],$�����{0x000021} =>$�����{0x0000027},$�����{0x023} =>ROOT_PATH.$�����[0x028],$�����{0x001} =>$�����[0x0024],$�����[0x006] =>$�����{0x0007},],[$�����{0x001f} =>$�����[0x00020],$�����{0x000021} =>$�����{0x0029},$�����{0x023} =>RUNTIME_PATH,$�����{0x001} =>$�����[0x0024],$�����[0x006] =>$�����{0x0007},],];���ň����茽��ّ�߅����������͟���;foreach($�� as &$�){$�=$�[$�����{0x023}];������������ĴǏ������զ�ڎ;if($�����[0x00020] ===$�[$�����{0x001f}]){if(!is_writable($�)){if(is_dir($�)){$�[$�����{0x001}]=$�����[0x0002a];$�[$�����[0x006]]=$�����[0x00016];session($�����{0x000017},!0);}else{$�[$�����{0x001}]=$�����{0x00002b};$�[$�����[0x006]]=$�����[0x00016];session($�����{0x000017},!0);}}}else{if(file_exists($�)){if(!is_writable($�)){$�[$�����{0x001}]=$�����[0x0002a];$�[$�����[0x006]]=$�����[0x00016];session($�����{0x000017},!0);}}else{if(!is_writable(dirname($�))){$�[$�����{0x001}]=$�����{0x00002b};$�[$�����[0x006]]=$�����[0x00016];session($�����{0x000017},!0);}}}}return $��;������ص������������Ҧ������ɸȪ�ܚ��򛍖������ӿЖ�������˯���������;}function checkMySQL(){$�=&$_GET{��};$��ϐ�=[[$�{0x001f} =>$�[0x000002c],$�{0x000021} =>$�{0x02d},$�{0x001} =>$�[0x002e],$�{0x05} =>extension_loaded($�{0x02d}),$�[0x006] =>$�{0x0007},$�{0x0002f} =>!0],[$�{0x001f} =>$�[0x000002c],$�{0x000021} =>$�[0x000030],$�{0x001} =>$�[0x002e],$�{0x05} =>extension_loaded($�[0x000030]),$�[0x006] =>$�{0x0007},$�{0x0002f} =>!0],];�����ϱ������І�����������ɺ���͕�����������;return baseCheck($��ϐ�);}function checkOther(){$��=&$_GET{��};$ɜ�=[[$��{0x001f} =>$��{0x0000031},$��{0x000021} =>$��[0x032],$��{0x001} =>$��[0x002e],$��[0x006] =>$��{0x0007},$��{0x0002f} =>!0],[$��{0x001f} =>$��{0x0000031},$��{0x000021} =>$��{0x0033},$��{0x001} =>$��[0x002e],$��[0x006] =>$��{0x0007},$��{0x0002f} =>!0],[$��{0x001f} =>$��{0x0000031},$��{0x000021} =>$��[0x00034],$��{0x001} =>$��[0x002e],$��[0x006] =>$��{0x0007},$��{0x0002f} =>!0],];������ع���䠯��݌��β�������;return baseCheck($ɜ�);}function baseCheck($�����){$�=&$_GET{��};foreach($����� as &$���){switch($���[$�{0x001f}]){case $�[0x000002c]:if(!$���[$�{0x05}]){$���[$�{0x001}]=$�{0x000035};$���[$�[0x006]]=$�[0x00016];if($���[$�{0x0002f}]){session($�{0x000017},!0);}}break;case $�{0x0000031}:if(!function_exists($���[$�{0x000021}])){$���[$�{0x001}]=$�{0x000035};$���[$�[0x006]]=$�[0x00016];if($���[$�{0x0002f}]){session($�{0x000017},!0);}}break;�׍�ߒ������Į����������;case $�[0x0000036]:$ʎ׉=$�{0x037}.$���[$�{0x000021}];���������;if(!function_exists($�[0x0038])){$���[$�{0x001}]=$�{0x000035};$���[$�[0x006]]=$�[0x00016];session($�{0x000017},!0);}else{if(shell_exec($ʎ׉)==null){$���[$�{0x001}]=$�{0x000035};$���[$�[0x006]]=$�[0x00016];if($���[$�{0x0002f}]){session($�{0x000017},!0);}}}break;�������ֿ��फ़������̵�����;}}return $�����;�������ϒ��̇�����߇���;}function showMsg($�,$̆��=''){usleep(0x04e20);echo "<script type=\"text/javascript\">showMsg(\"{$�}\", \"{$̆��}\")</script>";ob_flush();flush();����ѳ������������;}