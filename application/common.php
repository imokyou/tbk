<?php /* 程序侠CMS淘宝客系统 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门 
-- enphp : https://git.oschina.net/mz/mzphp2
 */ error_reporting(E_ALL^E_NOTICE);define('��', '�');�ƅ���р�鋘���ܜ���ߝՓ���;$_SERVER[��] = explode('|7|$|5', 'get_config|7|$|5Config|7|$|5|7|$|5get_taobao_coupon|7|$|5format_number|7|$|5get_word|7|$|5/|7|$|5(.*?)|7|$|5/s|7|$|5object_to_array|7|$|5resource|7|$|5object|7|$|5array|7|$|5get_keywords|7|$|5pscws4.pscws4|7|$|5pscws4/etc/dict.utf8.xdb|7|$|5pscws4/etc/rules.utf8.ini|7|$|5word|7|$|5get_keywords_str|7|$|5phpanalysis.phpanalysis|7|$|5utf-8|7|$|5str_length|7|$|5mb_strlen|7|$|5/./u|7|$|5exec_curl|7|$|5HTTP_USER_AGENT|7|$|5nav_url|7|$|5https://|7|$|5http://|7|$|5attach|7|$|5get_thumb|7|$|5taobaocdn.com|7|$|5taobao.com|7|$|5alicdn.com|7|$|5tbcdn.cn|7|$|5_s|7|$|5_100x100.jpg|7|$|5_m|7|$|5_230x230.jpg|7|$|5_b|7|$|5_310x310.jpg|7|$|5show_type|7|$|5C|7|$|5淘宝|7|$|5B|7|$|5天猫|7|$|5is_json|7|$|5query|7|$|5id|7|$|5item_id|7|$|5default_item_id|7|$|5amp;id|7|$|5amp;item_id|7|$|5amp;default_item_id|7|$|5new_goods|7|$|5Y-m-d|7|$|5<span class="goods-new">新品</span>');����������ز��ʡ������ε������笊Ȣʑ�������;
 if(!function_exists($_SERVER{��}[0])){function get_config($�='',$ڍ='site_config',$�谯�=false){$���=&$_SERVER{��};if(!cache($ڍ)){model($���{0x001})->webConfig($ڍ);}$���=cache($ڍ);$���=(isset($���[$�])&& $�)?$���[$�]:($�?$���[0x0002] :$���);if($�谯�){$���=html_entity_decode($���);}return $���;}}if(!function_exists($_SERVER{��}{0x00003})){function get_taobao_coupon($��='',$��=0x001,$ރ�='',$�='100',$��=0x001){$Ҭ�=new \chengxuxiaApi\Taobao;$�=$Ҭ�->daogouCoupon($��,$��,$ރ�,$�,$��);return $�;}}if(!function_exists($_SERVER{��}[0x000004])){function format_number($���){if($���<0x064){if($���)$��=($���-intval($���)==0)?number_format($���,0):number_format($���,0x001);}if($���>=0x064){$��=number_format($���,0);}return $��;}}if(!function_exists($_SERVER{��}{0x05})){function get_word($�,$��,$մ�){$����=&$_SERVER{��};$�˟߭=$����[0x0002];$����=$����[0x006].$��.$����{0x0007}.$մ�.$����[0x00008];if(!preg_match_all($����,$�,$�)){}else{$�˟߭=$�[0x001][0];}return $�˟߭;}}if(!function_exists($_SERVER{��}{0x000009})){function object_to_array($�){$���ع=&$_SERVER{��};$�=(array)$�;foreach($� as $�ٟ=>$�){if(gettype($�)==$���ع[0x0a]){return;}if(gettype($�)==$���ع{0x00b} || gettype($�)==$���ع[0x000c]){$�[$�ٟ]=(array)object_to_array($�);}}return $�;}}if(!function_exists($_SERVER{��}{0x0000d})){function get_keywords($��,$��=0x05){$܎�=&$_SERVER{��};vendor($܎�[0x00000e]);$�=new PSCWS4();$�->set_dict(VENDOR_PATH.$܎�{0x0f});$�->set_rule(VENDOR_PATH.$܎�[0x0010]);$�->set_ignore(!0);$�->send_text($��);$ۤ�=$�->get_tops($��);$�->close();$�ͻ�=[];if(is_array($ۤ�)){foreach($ۤ� as $Ǽ�µ){$�ͻ�[]=$Ǽ�µ[$܎�{0x00011}];}}return $�ͻ�;}}if(!function_exists($_SERVER{��}[0x000012])){function get_keywords_str($���){$���=&$_SERVER{��};vendor($���{0x0000013});PhpAnalysis::$loadInit=!1;$Ҿ�=new PhpAnalysis($���[0x014],$���[0x014],!1);$Ҿ�->LoadDict();$Ҿ�->SetSource($���);$Ҿ�->StartAnalysis(!0);$��=$Ҿ�->GetFinallyResult();return $��;}}if(!function_exists($_SERVER{��}{0x0015})){function str_length($��){$��=&$_SERVER{��};if(empty($��)){return 0;}if(function_exists($��[0x00016])){return mb_strlen($��,$��[0x014]);}else{preg_match_all($��{0x000017},$��,$ڴ��);return count($ڴ��[0]);}}}if(!function_exists($_SERVER{��}[0x0000018])){function exec_curl($�����,$���=false,$�='',$�='utf8',$����='utf8',$���=''){$Д���=curl_init();curl_setopt($Д���,CURLOPT_URL,$�����);curl_setopt($Д���,CURLOPT_TIMEOUT,0x01e);curl_setopt($Д���,CURLOPT_RETURNTRANSFER,0x001);curl_setopt($Д���,CURLOPT_USERAGENT,$_SERVER[$_SERVER{��}{0x019}]);curl_setopt($Д���,CURLOPT_REFERER,$�����);curl_setopt($Д���,CURLOPT_HEADER,0);if($���)curl_setopt($Д���,CURLOPT_COOKIE,$���);if($���){curl_setopt($Д���,CURLOPT_POST,!0);curl_setopt($Д���,CURLOPT_POSTFIELDS,$�);}$��梚=curl_exec($Д���);curl_close($Д���);if($�!=$����){$��梚=Newiconv($�,$����,$��梚);}return $��梚;}}if(!function_exists($_SERVER{��}[0x001a])){function nav_url($��=''){$�=&$_SERVER{��};if(!1===strpos($��,$�{0x0001b})){if(!1===strpos($��,$�[0x00001c])){return url($��);}else{return $��;}}else{return $��;}}}if(!function_exists($_SERVER{��}{0x000001d})){function attach($���){$���=&$_SERVER{��};if(!1===strpos($���,$���{0x0001b})){if(!1===strpos($���,$���[0x00001c])){return ROOT_PATH.$���;}else{return $���;}}else{return $���;}}}if(!function_exists($_SERVER{��}[0x01e])){function get_thumb($��,$�='_thumb'){$ͮ��=&$_SERVER{��};if(!1===strpos($��,$ͮ��[0x00001c])){$����=$��;}else{if(!1!==strpos($��,$ͮ��{0x001f})|| !1!==strpos($��,$ͮ��[0x00020])|| !1!==strpos($��,$ͮ��{0x000021})|| !1!==strpos($��,$ͮ��[0x0000022])){switch($�){case $ͮ��{0x023}:$����=$��.$ͮ��[0x0024];break;case $ͮ��{0x00025}:$����=$��.$ͮ��[0x000026];break;case $ͮ��{0x0000027}:$����=$��.$ͮ��[0x028];break;}}else{$����=$��;}}return $����;}}if(!function_exists($_SERVER{��}{0x0029})){function show_type($�){$�=&$_SERVER{��};if($�){switch($�){case $�[0x0002a]:$����=$�{0x00002b};break;case $�[0x000002c]:$����=$�{0x02d};break;}return $����;}}}if(!function_exists($_SERVER{��}[0x002e])){function get_goods_id($��){$�����=&$_SERVER{��};$���=0;$���=parse_url($��);if(isset($���[$�����{0x0002f}])){parse_str($���[$�����{0x0002f}],$�®);if(isset($�®[$�����[0x000030]])){$���=$�®[$�����[0x000030]];}elseif(isset($�®[$�����{0x0000031}])){$���=$�®[$�����{0x0000031}];}elseif(isset($�®[$�����[0x032]])){$���=$�®[$�����[0x032]];}elseif(isset($�®[$�����{0x0033}])){$���=$�®[$�����{0x0033}];}elseif(isset($�®[$�����[0x00034]])){$���=$�®[$�����[0x00034]];}elseif(isset($�®[$�����{0x000035}])){$���=$�®[$�����{0x000035}];}}return $���;������������潶��������������Ѿ����Ӑ��;}}if(!function_exists($_SERVER{��}[0x002e])){function is_json($�){try{$���=json_decode($�,!0);}catch(Exception$��){return $�;}return $���;}}if(!function_exists($_SERVER{��}{0x000009})){function object_to_array($���){$����=[];$��⟔=is_object($���)?get_object_vars($���):$���;foreach($��⟔ as $��=>$�){$�=(is_array($�)|| is_object($�))?object_to_array($�):$�;$����[$��]=$�;}return $����;}}if(!function_exists($_SERVER{��}[0x0000036])){function new_goods($۬�){$��ț=&$_SERVER{��};$���=$��ț[0x0002];if(date($��ț{0x037})==date($��ț{0x037},$۬�)){$���=$��ț[0x0038];}return $���;}}