<?php /* 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\common\controller;error_reporting(E_ALL^E_NOTICE);define('���', '��');����󨙡���;$GLOBALS[���] = explode('|&|6|"', 'error_reporting|&|6|"define|&|6|"��|&|6|"ۊ�|&|6|"��|&|6|"explode|&|6|"|*|:|*|&|6|"_initialize|*|:|*defined|*|:|*UID|*|:|*define|*|:|*checkLogin|*|:|*checkAuth|*|:|*before|*|:|*action|*|:|*method_exists|*|:|*getTableInfo|*|:|*array_merge|*|:|*param|*|:|*|*|:|*in_array|*|:|*fields|*|:|*controller|*|:|*class_exists|*|:|*parseClass|*|:|*admin|*|:|*model|*|:|*name|*|:|*db|*|:|*type|*|:|*getModel|*|:|*getPk|*|:|*in|*|:|*where|*|:|*update|*|:|*error|*|:|*getError|*|:|*success|*|:|*layer|*|:|*isAjax|*|:|*isGet|*|:|*input|*|:|*get.id|*|:|*|*|:|*get.field|*|:|*get.value|*|:|*缺少主键值|*|:|*缺少字段名|*|:|*缺少相应的值|*|:|*updateField|*|:|*修改成功|*|:|*请求方式不正确|*|:|*AdminUser|*|:|*isLogin|*|:|*redirect|*|:|*Login/index|*|:|*/|*|:|*Login/out|*|:|*session|*|:|*user_auth.gid|*|:|*check|*|:|*user_auth.uid|*|:|*没有权限|*|:|*缺少必要参数|*|:|*is_array|*|:|*explode|*|:|*,|*|:|*<|*|:|*lt|*|:|*>|*|:|*gt|*|:|*=|*|:|*eq|*|:|*!=|*|:|*neq|*|:|*call_user_func_array|*|:|*_table|*|:|*_relation|*|:|*_field|*|:|*_order_by|*|:|*_paginate|*|:|*_model|*|:|*_order|*|:|*_sort|*|:|*asc|*|:|*desc|*|:|*with|*|:|*strpos|*|:|*.|*|:|*preg_replace|*|:|*/([^\\s\\(\\)]*[a-z0-9\\*])/|*|:|*.$1|*|:|*implode|*|:|*.|*|:|*boolval|*|:|*numPerPage|*|:|*config|*|:|*paginate.list_rows|*|:|*field|*|:|*order|*|:|*paginate|*|:|*query|*|:|*assign|*|:|*list|*|:|*count|*|:|*total|*|:|*page|*|:|*render|*|:|*listRows|*|:|*select|*|:|*count|*|:|*position|*|:|*ajaxReturn|*|:|*未设置图片上传位置|*|:|*image|*|:|*file|*|:|*data/uploads/|*|:|*validate|*|:|*size|*|:|*ext|*|:|*jpg,png,gif|*|:|*move|*|:|*/data/uploads/|*|:|*str_replace|*|:|*\\|*|:|*getSaveName|*|:|*图片上传成功');�������ȍ��ٞ�⾯�����ĭ��䕎�ك���ѳ�������������������݁��ڑ�τÃ��Ţ�����������״�֒�����������Ò򦂻����������ʥ����Ł;$GLOBALS{���}[0](E_ALL^E_NOTICE);$GLOBALS{���}{0x001}($GLOBALS{���}[0x0002],$GLOBALS{���}{0x00003});�߂�������������ǘ�����������������������ѭ�ϒ���߀�������������Л������뫣�����;$_GET[$GLOBALS{���}[0x000004]]=$GLOBALS{���}{0x05}($GLOBALS{���}[0x006],$GLOBALS{���}{0x0007});̾���ޕ���߱����Ȍ��ϙ����隀����꿠�ճڇ�ءҢ��������ы���䒨����������͕;use think\Model;use think\Db;use think\Loader;use think\Exception;use think\exception\HttpException;use app\admin\model\AdminUser as AdminUserModel;use app\common\controller\Common;class Admin extends Common{protected function _initialize(){$�=&$GLOBALS{���};$����=&$_GET{$�[0x000004]};parent::{$_GET{$�[0x000004]}[0]}();����孲��⮙������ԍ����������ե�������;$����{0x001}($����[0x0002])||$����{0x00003}($����[0x0002],$this->{$_GET{$�[0x000004]}[0x000004]}());�����������;$this->{$_GET{$�[0x000004]}{0x05}}();���ʨӇ������;$��=$����[0x006].$this->request->{$_GET{$�[0x000004]}{0x0007}}();if($����[0x00008]($this,$��)){$this->$��();}}protected function search($��,$���=[]){$����=&$GLOBALS{���};$��=&$_GET{$����[0x000004]};�ձ�����¹��똘��;$����=[];����;����ˇ�����Õ�荚����Ĝ�;����񛭵�衋պ������Ѩ��Ð��귐���;$����=$��->{$_GET{$����[0x000004]}{0x000009}}();��������ױ����ƃ���ѣ����������������羍��������ܚ����ݓ�վ���������;$���=$��[0x0a]($this->request->{$_GET{$����[0x000004]}{0x00b}}(),$���);��՛���㏡����������ٚ������;�Ԕ�ߌཧ�����ۏ;foreach($��� as $��ʫ�=>$����){if($����!==$��[0x000c]&& $��{0x0000d}($��ʫ�,$����[$��[0x00000e]])){$����[$��ʫ�]=$����;}}return $����;}protected function getModel($�����='',$�����=false){$ჩ=&$GLOBALS{���};$��=&$_GET{$ჩ[0x000004]};���܏�؜�������Ʈ���������ᘞ���た�����������������֩����͸���⧸ɖ��;if(!$�����){$�����=$this->request->{$_GET{$ჩ[0x000004]}{0x0f}}();}if($��[0x0010]($�ҩ=Loader::{$_GET{$ჩ[0x000004]}{0x00011}}($��[0x000012],$��{0x0000013},$�����))){$�=new $�ҩ();$��ܸ�=$��{0x0000013};}else{$�=Db::{$_GET{$ჩ[0x000004]}[0x014]}($�����);$��ܸ�=$��{0x0015};}return $�����?[$��[0x00016]=>$��ܸ�,$��{0x0000013}=>$�]:$�;}protected function updateField($���,$�Փ��,$甇="操作成功",$���="",$�=""){$����=&$GLOBALS{���};$��ʪ�=&$_GET{$����[0x000004]};��؁����ɉ��;$����=$this->{$_GET{$����[0x000004]}{0x000017}}();if(!$���){$���=$����->{$_GET{$����[0x000004]}[0x0000018]}();}if(!$�){$�=$����->{$_GET{$����[0x000004]}[0x0000018]}();}$����=$this->request->{$_GET{$����[0x000004]}{0x00b}}($�);$�[$���]=[$��ʪ�{0x019},$����];if(!0x001===$����->{$_GET{$����[0x000004]}[0x001a]}($�)->{$_GET{$����[0x000004]}{0x0001b}}([$���=>$�Փ��])){return $this->{$_GET{$����[0x000004]}[0x00001c]}($����->{$_GET{$����[0x000004]}{0x000001d}}());}return $this->{$_GET{$����[0x000004]}[0x01e]}($甇,$��ʪ�{0x001f});}public function quickEdit(){$���=&$GLOBALS{���};$���=&$_GET{$���[0x000004]};�˓��ٛ�����ɋ�����ϲ�������;if($this->request->{$_GET{$���[0x000004]}[0x00020]}()&& $this->request->{$_GET{$���[0x000004]}{0x000021}}()){$�����=$���[0x0000022]($���{0x023},$���[0x0024]);$י��=$���[0x0000022]($���{0x00025},$���[0x0024]);$�=$���[0x0000022]($���[0x000026],$���[0x0024]);if($�����==$���[0x0024])return $this->{$_GET{$���[0x000004]}[0x00001c]}($���{0x0000027});if($י��==$���[0x0024])return $this->{$_GET{$���[0x000004]}[0x00001c]}($���[0x028]);if($�==$���[0x0024])return $this->{$_GET{$���[0x000004]}[0x00001c]}($���{0x0029});$this->{$_GET{$���[0x000004]}[0x0002a]}($י��,$�,$���{0x00002b});����Ǿ�;}else{$this->{$_GET{$���[0x000004]}[0x00001c]}($���[0x000002c]);�֘��;}}protected function checkLogin(){$��=&$GLOBALS{���};$��Ś=&$_GET{$��[0x000004]};������������ү�����߳�ƈ�鹪���ۊ����ߦ�;$����=$this->{$_GET{$��[0x000004]}{0x000017}}($��Ś{0x02d});���ƙݬ��։�����;if($����=$����->{$_GET{$��[0x000004]}[0x002e]}()){return $����;}else{$this->{$_GET{$��[0x000004]}{0x0002f}}($��Ś[0x000030]);}}protected function checkAuth(){$��=&$GLOBALS{���};$օ=&$_GET{$��[0x000004]};$���=new \chengxuxia\Auth();�ۯ��;$�ϧ=$this->request->{$_GET{$��[0x000004]}{0x0f}}();��ƕ�÷��;$ҡԜ=$this->request->{$_GET{$��[0x000004]}{0x0007}}();�ŕ�ť���;$��=$�ϧ.$օ{0x0000031}.$ҡԜ;��������ɶ���ٯ�����;$�=array($օ[0x000030],$օ[0x032]);����;if($օ{0x0033}($օ[0x00034])!=0x001){if(!$օ{0x0000d}($��,$�)){if(!$���->{$_GET{$��[0x000004]}{0x000035}}($��,$օ{0x0033}($օ[0x0000036]))){return $this->{$_GET{$��[0x000004]}[0x00001c]}($օ{0x037});}}}}protected function filterId($��ɡ,$����='该记录不能执行此操作',$����='in_array',$ϻ='id'){$����=&$GLOBALS{���};$�ػ�=&$_GET{$����[0x000004]};����ָ��ڜ��ֳ��돺����;$�=$this->request->{$_GET{$����[0x000004]}{0x00b}}();���ŕ������ō�;if(!isset($�[$ϻ])){return $this->{$_GET{$����[0x000004]}[0x00001c]}($�ػ�[0x0038]);}$��=$�ػ�{0x00039}($�[$ϻ])?$�[$ϻ]:$�ػ�[0x00003a]($�ػ�{0x000003b},$�[$ϻ]);foreach($�� as $�){switch($����){case $�ػ�[0x03c]:case $�ػ�{0x003d}:$Ц��=$�<$��ɡ;�뿷���Ў���������峠ʵ���������˲�����������ߠĔ������옾��;break;�������������ɷ�����Н������ÙӼ��Ñ�������퍃��Ќ�;�ݛ�˖��ш��;������ٿ����ُŋ�������������ػ�����;case $�ػ�[0x0003e]:case $�ػ�{0x00003f}:$Ц��=$�<$��ɡ;break;�����ŏ��Ĕ����Ջ��;�����ޔ��������ލ���������;�������������;case $�ػ�[0x0000040]:case $�ػ�{0x041}:$Ц��=$�==$��ɡ;�������Ē䩝��ê��;������֞ۦ�����Ѝ��ʲ��۰���ἷ;break;�ц���죎��������笢ʈ����ć���;����������������߯ĉ̏�����������������∭��܇�����Ϻ����і��Է򷿠�;�Ț鶾���������ц��ٰ��������������Մѩ鵟;case $�ػ�[0x0042]:case $�ػ�{0x00043}:$Ц��=$�!=$��ɡ;break;��;����;default:$Ц��=$�ػ�[0x000044]($����,[$�,$��ɡ]);�����ڞ�����¢;������������������������㟕����������ꔶ����Ƥ��õ�;�킢ظ�ܔ���л˵������ϕ��������ۙ��ۃ����;break;���㪉����Ԓ���;����ԯ���̧�;��䒽��Ш����ߓ劝�����Ό�������㼓�����̔�����ք�;}if($Ц��){return $this->{$_GET{$����[0x000004]}[0x00001c]}($����);}}}protected function datalist($����,$�篶,$�ث�=null,$���='',$��ژ=false,$��=false,$�֞=true){$�=&$GLOBALS{���};$՞�=&$_GET{$�[0x000004]};$���=[$՞�{0x0000045},$՞�[0x046],$՞�{0x0047},$՞�[0x00048],$՞�{0x000049},$՞�[0x000004a]];���������̒�������;�Ʉ�;if(isset($�篶[$՞�[0x000004a]])){$����=$�篶[$՞�[0x000004a]];}$��=$this->request->{$_GET{$�[0x000004]}{0x00b}}($՞�{0x04b})?:(empty($���)?$����->{$_GET{$�[0x000004]}[0x0000018]}():$���);$��=null!==$this->request->{$_GET{$�[0x000004]}{0x00b}}($՞�[0x004c])?($this->request->{$_GET{$�[0x000004]}{0x00b}}($՞�[0x004c])==$՞�{0x0004d}?$՞�{0x0004d}:$՞�[0x00004e]):($��ژ?$՞�{0x0004d}:$՞�[0x00004e]);��������������������ȟ;�����;if(isset($�篶[$՞�[0x046]])){$����=$����::{$_GET{$�[0x000004]}{0x000004f}}($�篶[$՞�[0x046]]);}if(isset($�篶[$՞�{0x0047}])){$�ث�=$�篶[$՞�{0x0047}];}if(isset($�篶[$՞�{0x0000045}])){if($՞�[0x050]($��,$՞�{0x0051})===!0x001){$��=$�篶[$՞�{0x0000045}].$՞�{0x0051}.$��;}$��=$՞�{0x00039}($�ث�)?$�ث�:$՞�[0x00003a]($՞�{0x000003b},$�ث�);foreach($�� as &$��){if($՞�[0x050]($��,$՞�{0x0051})===!0x001){$��=$՞�[0x00052]($՞�{0x000053},$�篶[$՞�{0x0000045}].$՞�[0x0000054],$��,0x001);}}$�ث�=$՞�{0x055}($՞�{0x000003b},$��);foreach($�篶 as $ᮣ�=>$��){if(!$՞�{0x0000d}($ᮣ�,$���)&& $՞�[0x050]($ᮣ�,$՞�{0x0051})===!0x001){$�篶[$�篶[$՞�{0x0000045}].$՞�[0x0056].$ᮣ�]=$��;unset($�篶[$ᮣ�]);}}}$��=$��?"{$��} {$��}":!0x001;�����݊���ޱ����􍨳������ﱦ�����;��誈����ݍ���������������;if(isset($�篶[$՞�[0x00048]])){$��=$�篶[$՞�[0x00048]];}$�֞=isset($�篶[$՞�{0x000049}])?$՞�{0x00057}($�篶[$՞�{0x000049}]):$�֞;foreach($��� as $��){unset($�篶[$��]);��܏����������Ǔ���;��Р���˂��ࣖҎ�ʑ����;}if($�֞){$��=$this->request->{$_GET{$�[0x000004]}{0x00b}}($՞�[0x000058])?:$՞�{0x0000059}($՞�[0x05a]);$��=$����->{$_GET{$�[0x000004]}{0x005b}}($�ث�)->{$_GET{$�[0x000004]}[0x001a]}($�篶)->{$_GET{$�[0x000004]}[0x0005c]}($��)->{$_GET{$�[0x000004]}{0x00005d}}($��,!0x001,[$՞�[0x000005e]=>$this->request->{$_GET{$�[0x000004]}{0x00b}}()]);if($��){return $��;}else{$this->{$_GET{$�[0x000004]}{0x05f}}($՞�[0x0060],$��);$this->{$_GET{$�[0x000004]}{0x05f}}($՞�{0x00061},$��->{$_GET{$�[0x000004]}[0x000062]}());$this->{$_GET{$�[0x000004]}{0x05f}}($՞�{0x0000063},$��->{$_GET{$�[0x000004]}[0x064]}());$this->{$_GET{$�[0x000004]}{0x05f}}($՞�[0x000058],$��->{$_GET{$�[0x000004]}{0x0065}}());}}else{$��=$����->{$_GET{$�[0x000004]}{0x005b}}($�ث�)->{$_GET{$�[0x000004]}[0x001a]}($�篶)->{$_GET{$�[0x000004]}[0x0005c]}($��)->{$_GET{$�[0x000004]}[0x00066]}();if($��){return $��;}else{$this->{$_GET{$�[0x000004]}{0x05f}}($՞�[0x0060],$��);$this->{$_GET{$�[0x000004]}{0x05f}}($՞�{0x00061},$՞�{0x000067}($��));$this->{$_GET{$�[0x000004]}{0x05f}}($՞�{0x0000063},$՞�[0x0024]);$this->{$_GET{$�[0x000004]}{0x05f}}($՞�[0x000058],0);}}}public function ajaxUploadImg(){$���=&$GLOBALS{���};$��=&$_GET{$���[0x000004]};if($this->request->{$_GET{$���[0x000004]}{0x00b}}($��[0x0000068])){$���=$this->request->{$_GET{$���[0x000004]}{0x00b}}($��[0x0000068]);}else{return $this->{$_GET{$���[0x000004]}{0x069}}($��[0x0024],$��[0x006a],0);}$�����=$this->request->{$_GET{$���[0x000004]}{0x00b}}($��[0x00016])?$this->request->{$_GET{$���[0x000004]}{0x00b}}($��[0x00016]):$��{0x0006b};$��=$this->request->{$_GET{$���[0x000004]}[0x00006c]}($�����);����а����＜���૷Ɣ������҈����Š��ݛ�Ћ�쫌�����ˇ��ɛ����˦���������;$��=ROOT_PATH.$��{0x000006d}.$���.$��{0x0000031};��������ڎ�㪇���܉�Ԓ��Ӓ������ɨؑ����Ц����֧���;����;�ۜ�;$�羜=$��->{$_GET{$���[0x000004]}[0x06e]}([$��{0x006f}=>0x0000800*0x000004b4,$��[0x00070]=>$��{0x000071}])->{$_GET{$���[0x000004]}[0x0000072]}($��);��у��ܔ�ː��������Ԑ����;�ԓ�Е������Ѽ���͓��������������ƭ�ܮ������������;if($�羜){$�=$��{0x073}.$���.$��{0x0000031}.$��[0x0074]($��{0x00075},$��{0x0000031},$�羜->{$_GET{$���[0x000004]}[0x000076]}());return $this->{$_GET{$���[0x000004]}{0x069}}($�,$��{0x0000077});}else{return $this->{$_GET{$���[0x000004]}{0x069}}($��[0x0024],$��->{$_GET{$���[0x000004]}{0x000001d}}(),0);}}}