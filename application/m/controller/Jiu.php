<?php /* 程序侠CMS淘宝客系统 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门 
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\m\controller;error_reporting(E_ALL^E_NOTICE);define('���', '�');�ܸ�Յ����ʜ����Ŗ�Ȫ���������𲓳�����փ�����������Ă�������ڲ���ڇ�ޥ�����ʐ蔆�������˻��퉛ԡ�ܑՂ��;$_SERVER[���] = explode('|;|=|.', '��|;|=|.��|;|=|.|;|5|,|;|=|.cid|;|5|,|;|5|,price|;|5|,sort|;|5|,default|;|5|,coupon_price|;|5|,egt|;|5|,discount_price|;|5|,lt|;|5|,GoodsCate|;|5|,status|;|5|,id|;|5|,in|;|5|,start_time|;|5|,elt|;|5|,end_time|;|5|,jiu|;|5|,status&index_status|;|5|,cateList');��������Ѫ����Ȟ�;error_reporting(E_ALL^E_NOTICE);define($_SERVER{���}{0},$_SERVER{���}[0x001]);����⡱򸥗�����ъ������ڪ߫Ε��ר�������;$_SERVER[��]=explode($_SERVER{���}{0x0002},$_SERVER{���}[0x00003]);�����բ����é�����̬���������Ŗ��Ӽ��ߝ�ݮш���፜���������Ū���ļ����τ���ԉ�⟓ꡝφ���蕐�Ҩ;use think\Db;use app\common\model\GoodsCate as GoodsCateModel;use app\common\controller\Mobile;class Jiu extends Mobile{public function _initialize(){parent::_initialize();}public function index(){$����=&$_SERVER{��};$����=input($����[0],$����{0x001});����������Ě����������ѵ������ēҹ������ڼ;��������Ǣ���ٿ��Е���Ԡ�̞��ɱ;$����=input($����[0x0002],$����{0x001});$�����=input($����{0x00003},$����[0x000004]);��Ŏ����;$�=[];���޿������;�Ȍ���Ч�ܤ���ʳ�;if($����){$�[$����{0x05}]=[$����[0x006],$����];}$�[$����{0x0007}]=[$����[0x00008],0x0a];if($����){!Db::name($����{0x000009})->where([$����[0x0a]=>0x001,$����{0x00b}=>$����])->count($����{0x00b})&& $this->_404();$脘�=GoodsCateModel::getChildIds($����);if($脘�){$�[$����[0]]=[$����[0x000c],$脘�];}else{$�[$����[0]]=$����;}}$�[$����[0x0a]]=0x001;��Չ����������������Ѷ�ɗ�����Ʌ����ܢ𠾌������;�����������Ѵ�ؒ����㳰���ϓ����ʝ�����������֩�懲�ܱ���ٍ�����;$�[$����{0x0000d}]=[$����[0x00000e],time()];�ǩઃ��ܴ�ܤ����;$�[$����{0x0f}]=[$����[0x006],time()];���ͱ��и�ֿ���ֈ�ȩ�����ا��;��������ù��㹃�����ݨ�֛�ډع����������������毭������۽Ǵ�̼����Ώ;if($this->request->isAjax()){$this->filterGoods($����[0x0010],$�,$�����);}$��ʍ�=Db::name($����{0x000009})->where($����{0x00011},0x001)->select();$this->assign($����[0x000012],$��ʍ�);���;$this->assign($����[0],$����);$this->_seo($����[0x0010]);�������ˑ��������ѷ���ꀩ���ϱ���݅���;return $this->fetch();���媓������Ϩ샘����ܓ�⠂����ǐ�����̱��ي�;}}