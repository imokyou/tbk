<?php /* 程序侠CMS淘宝客系统 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\admin\model;error_reporting(E_ALL^E_NOTICE);define('��', '��');�������������������������ň�ф��Ѕ��ᤤۣ�͂������ݫ���컆�����۫������ڡ���ؠ������⻱踿�ާЊ���̺�;$GLOBALS[��] = explode('|2|/|7', '��|2|/|7���|2|/|7|+|,|/|2|/|7site_config|+|,|/system_config|+|,|/seo_config|+|,|/api_config|+|,|/oauth_config|+|,|/score_config|+|,|/agent_config|+|,|/type|+|,|/name,value|+|,|/name|+|,|/value');ӄɍ�����𿊰��؅�獅��Ҽ��堂���������;error_reporting(E_ALL^E_NOTICE);define($GLOBALS{��}{0},$GLOBALS{��}[0x001]);���Ϟ�ɍ���Փ쥳ĸ�����䧑��Ҍ������Ƅ����ѭ����޻��������ܮ������̃��������������Ƭ����Ѫ�ؘ�֋�ُ��ʐ������Ꮢ��㱤�ɹ�՛�䈎�ҟ΁��𫢥�;$_SERVER[��]=explode($GLOBALS{��}{0x0002},$GLOBALS{��}[0x00003]);�������;use think\Model;class Config extends Model{static private function _config($����){$���=&$_SERVER{��};$��=[$���[0]=>0x001,$���{0x001}=>0x0002,$���[0x0002]=>0x00003,$���{0x00003}=>0x000004,$���[0x000004]=>0x05,$���{0x05}=>0x006,$���[0x006]=>0x0007,];return $��[$����];�����ҥ��������;���������;}public function webConfig($�){$��β=&$_SERVER{��};$���=[];�����̑�֫��������̓�����뜮�˥��䠺�ꑢ;$�Á[$��β{0x0007}]=self::_config($�);�������������哃�����ϫ�ц��è���;$����=self::where($�Á)->field($��β[0x00008])->select();if($����&& is_array($����)){foreach($���� as $�){$���[$�[$��β{0x000009}]]=json_decode($�[$��β[0x0a]])?json_decode($�[$��β[0x0a]],!0):$�[$��β[0x0a]];}}cache($�,$���);}static public function updateCofig($��,$��,$��){$��=&$_SERVER{��};$��=is_array($��)?json_encode($��):$��;��;$���=[$��{0x000009}=>$��,$��{0x0007}=>self::_config($��)];����ߨ����쭮˚�Ο;������ߝѕ���͘���������Ƽ������é��ؼ��������������Ǘ�������ޚ����;if(self::where($���)->find()){$�˳��=self::where($���)->update([$��[0x0a]=>$��]);}else{$���=[$��{0x0007}=>self::_config($��),$��{0x000009}=>$��,$��[0x0a]=>$��];$�˳��=self::create($���);}cache($��,null);if($�˳��|| $�˳��===0){return !0;}else{return !0x001;}}}