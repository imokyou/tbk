<?php /* 程序侠CMS淘宝客系统 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门 
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\m\controller;error_reporting(E_ALL^E_NOTICE);define('Û�', '��');��ꕅ����ձ�슦;$GLOBALS[Û�] = explode('|7|<|8', '�|7|<|8��|7|<|8|:|8|$|7|<|8cid|:|8|$|:|8|$price|:|8|$sort|:|8|$new|:|8|$coupon_price|:|8|$egt|:|8|$start_time|:|8|$eq|:|8|$Y-m-d|:|8|$GoodsCate|:|8|$status|:|8|$id|:|8|$in|:|8|$live|:|8|$status&index_status|:|8|$cateList');�݄�����顷���ό��������ʇ��Ǿ������諤���⃾������͚�;error_reporting(E_ALL^E_NOTICE);define($GLOBALS{Û�}{0},$GLOBALS{Û�}[0x001]);������ろ���������ע��������慣�����������;$GLOBALS[�]=explode($GLOBALS{Û�}{0x0002},$GLOBALS{Û�}[0x00003]);��雲���ӂ�������؜ޞ�ԕ��������Ö�Ϫ���췞������ӈ��ܣ�⧕����ħ�Ѥ���񞒦��ϣ�װ���̙��;use think\Db;use app\common\model\GoodsCate as GoodsCateModel;use app\common\controller\Mobile;class Live extends Mobile{public function _initialize(){parent::_initialize();���;���ފ����󁈗������������֥݀�;}public function index(){$����=&$GLOBALS{�};$�诤=input($����[0],$����{0x001});�ㆪ��䁏Ĕ������;$�ê=input($����[0x0002],$����{0x001});�٤��ɍ���ɚį;��������;$�Ѭ=input($����{0x00003},$����[0x000004]);��������ė���ꀱ����������ӄ���Կ��ɩ���������Ņ���菧�;���吰���ᓍ��������Ҷ�׭;$��=[];������������ꫜ����������������ƃ��������Ћ������غ������ܽ̓���򴆖�����̗�;��;��Ǆ���闹��ک�����٘����݆����쾭�Ģ��������;if($�ê){$��[$����{0x05}]=[$����[0x006],$�ê];}$��[$����{0x0007}]=[$����[0x00008],strtotime(date($����{0x000009},time()))];if($�诤){!Db::name($����[0x0a])->where([$����{0x00b}=>0x001,$����[0x000c]=>$�诤])->count($����[0x000c])&& $this->_404();$��=GoodsCateModel::getChildIds($�诤);if($��){$��[$����[0]]=[$����{0x0000d},$��];}else{$��[$����[0]]=$�诤;}}$��[$����{0x00b}]=0x001;����Ã�������Ҭ��ȋ�ы�����߫·��̄�ϲ����ڍ�Ѳ������;if($this->request->isAjax()){$this->filterGoods($����[0x00000e],$��,$�Ѭ);}$�����=Db::name($����[0x0a])->where($����{0x0f},0x001)->select();$this->assign($����[0x0010],$�����);�΋��;$this->assign($����[0],$�诤);$this->_seo($����[0x00000e]);��أ���Ĵ�����;����Ə���������ɕ��ӌҮ���Ƃ܇��̇����𡱫쩎;return $this->fetch();}}