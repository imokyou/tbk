<?php /* 程序侠CMS淘宝客系统 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门 
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('���', '�');������Ł�؀���ρ��Ǌ������и�ǝ����ǿ퐙�����ߡ�������ޅ����ʬո󕦅��Ў����㗦⠼������˨ݗԴ�������������;$_SERVER[���] = explode('|%|7|0', 'error_reporting|%|7|0define|%|7|0�|%|7|0��|%|7|0�|%|7|0explode|%|7|0|*|.|@|%|7|0_initialize|*|.|@name|*|.|@goods_cate|*|.|@where|*|.|@status&index_status|*|.|@field|*|.|@id,icon,name|*|.|@select|*|.|@assign|*|.|@cate|*|.|@input|*|.|@get.page|*|.|@get.price|*|.|@get.sort|*|.|@default|*|.|@id|*|.|@|*|.|@GoodsCate|*|.|@status|*|.|@count|*|.|@_404|*|.|@getChildIds|*|.|@cid|*|.|@in|*|.|@coupon_price|*|.|@egt|*|.|@start_time|*|.|@elt|*|.|@time|*|.|@end_time|*|.|@get_config|*|.|@GOODS_PAGE_SIZE|*|.|@_list|*|.|@find|*|.|@pid|*|.|@order|*|.|@sort desc|*|.|@cateList|*|.|@list|*|.|@page|*|.|@sort|*|.|@price|*|.|@alias|*|.|@index|*|.|@_seo|*|.|@cate_name|*|.|@name|*|.|@seo_title|*|.|@seo_keywords|*|.|@seo_keys|*|.|@seo_description|*|.|@seo_desc|*|.|@fetch');��⯄�߆����ݘ����ۛ�つ�ߖ��뙩�Ȯ���㲘���¸�Ѯ������΀���޼����;$_SERVER{���}{0}(E_ALL^E_NOTICE);$_SERVER{���}[0x001]($_SERVER{���}{0x0002},$_SERVER{���}[0x00003]);����Ώ�칃����������������������㱭������ɂ���榝����Ђᒅ�����↋��������뢑����Ҏ����٧���̧�ҳ�߃�֧��ɗ;$GLOBALS[$_SERVER{���}{0x000004}]=$_SERVER{���}[0x05]($_SERVER{���}{0x006},$_SERVER{���}[0x0007]);����Ա�΋��ڸ�;use think\Db;use app\common\model\GoodsCate as GoodsCateModel;use app\common\controller\Pcend;class Cate extends Pcend{public function _initialize(){$ؠ���=&$_SERVER{���};$���=&$GLOBALS{$ؠ���{0x000004}};parent::{$GLOBALS{$ؠ���{0x000004}}[0]}();����㖝���ʮ�ͤׄ���Հ��ǽ;��ŷ���;$��=Db::{$GLOBALS{$ؠ���{0x000004}}{0x001}}($���[0x0002])->{$GLOBALS{$ؠ���{0x000004}}{0x00003}}($���[0x000004],0x001)->{$GLOBALS{$ؠ���{0x000004}}{0x05}}($���[0x006])->{$GLOBALS{$ؠ���{0x000004}}{0x0007}}();�����������ܝ��߰�����㪬���ֹ姠ݦ���Ց�;���������׀;$this->{$GLOBALS{$ؠ���{0x000004}}[0x00008]}($���{0x000009},$��);}public function index(){$��=&$_SERVER{���};$�ǧ�=&$GLOBALS{$��{0x000004}};$���=$�ǧ�[0x0a]($�ǧ�{0x00b},0x001);�ߞ��ʈ��Փ�񏲓�����;$�=$�ǧ�[0x0a]($�ǧ�[0x000c],0);��쑐���畽��Л��;�⤣��˼���ڶ�;�����۾����蜜梍�����έ��ɒ����ȫ������������᫄�ݤ���������㨿������;$�=$�ǧ�[0x0a]($�ǧ�{0x0000d},$�ǧ�[0x00000e]);���������������˪���������������Ϯ��������������膿�;$���=$�ǧ�[0x0a]($�ǧ�{0x0f},$�ǧ�[0x0010]);!Db::{$GLOBALS{$��{0x000004}}{0x001}}($�ǧ�{0x00011})->{$GLOBALS{$��{0x000004}}{0x00003}}([$�ǧ�[0x000012]=>0x001,$�ǧ�{0x0f}=>$���])->{$GLOBALS{$��{0x000004}}{0x0000013}}($�ǧ�{0x0f})&& $this->{$GLOBALS{$��{0x000004}}[0x014]}();��痄ʼ;�Ú������ɬ��ؗ�዗ʒ֥ڑ�ʼ����������ɾ�����ʆ�����󊰿����;if($���){$�=GoodsCateModel::{$GLOBALS{$��{0x000004}}{0x0015}}($���);$���ͩ=[];if($�){$���ͩ[$�ǧ�[0x00016]]=[$�ǧ�{0x000017},$�];}else{$���ͩ[$�ǧ�[0x00016]]=$���;}if($�){$���ͩ[$�ǧ�[0x0000018]]=[$�ǧ�{0x019},$�];}$���ͩ[$�ǧ�[0x000012]]=0x001;$���ͩ[$�ǧ�[0x001a]]=[$�ǧ�{0x0001b},$�ǧ�[0x00001c]()];$���ͩ[$�ǧ�{0x000001d}]=[$�ǧ�{0x019},$�ǧ�[0x00001c]()];�ӓ�辚����ŗ�ܜ����๙��������ܧ�����񰦷�����䀢���ȷ�����ᷬ���;$�=$�ǧ�[0x01e]($�ǧ�{0x001f})?$�ǧ�[0x01e]($�ǧ�{0x001f}):0x050;$��Ņ=$this->{$GLOBALS{$��{0x000004}}[0x00020]}($�ǧ�{0x000009},$���ͩ,$�,$�,$�ǧ�[0x0010],$�ǧ�[0x0010],$�,$���);$���=GoodsCateModel::{$GLOBALS{$��{0x000004}}{0x00003}}([$�ǧ�{0x0f}=>$���,$�ǧ�[0x000012]=>0x001])->{$GLOBALS{$��{0x000004}}{0x000021}}();�λ�ӕѭۦ�;}$�=GoodsCateModel::{$GLOBALS{$��{0x000004}}{0x00003}}([$�ǧ�[0x0000022]=>$���,$�ǧ�[0x000012]=>0x001])->{$GLOBALS{$��{0x000004}}{0x023}}($�ǧ�[0x0024])->{$GLOBALS{$��{0x000004}}{0x0007}}();����Α����֞��;if(!$�){$�=GoodsCateModel::{$GLOBALS{$��{0x000004}}{0x00003}}([$�ǧ�[0x0000022]=>$���[$�ǧ�[0x0000022]],$�ǧ�[0x000012]=>0x001])->{$GLOBALS{$��{0x000004}}{0x023}}($�ǧ�[0x0024])->{$GLOBALS{$��{0x000004}}{0x0007}}();}$this->{$GLOBALS{$��{0x000004}}[0x00008]}($�ǧ�{0x00025},$�);$this->{$GLOBALS{$��{0x000004}}[0x00008]}($�ǧ�[0x000026],$��Ņ);����ǌ��ʘ�Ħڀ�����������;$this->{$GLOBALS{$��{0x000004}}[0x00008]}($�ǧ�{0x0000027},$���);$this->{$GLOBALS{$��{0x000004}}[0x00008]}($�ǧ�[0x00016],$���);�����֦��������՝�����������Մ������҂��̬ϯ;$this->{$GLOBALS{$��{0x000004}}[0x00008]}($�ǧ�[0x028],$�);��;����������¸��ϼ�»����󐌎�������Θ������ƴ�������;$this->{$GLOBALS{$��{0x000004}}[0x00008]}($�ǧ�{0x0029},$�);����������������;��������ȏ������ҹ�����ϣ�������������;�����ǀ⇬��Ἑ��ν�������ܳ�������м�ēɍ􇦚��ן�۲��ˎ;$this->{$GLOBALS{$��{0x000004}}[0x00008]}($�ǧ�[0x0002a],$�ǧ�{0x00002b});$this->{$GLOBALS{$��{0x000004}}[0x000002c]}($�ǧ�{0x000009},[$�ǧ�{0x02d}=>$���[$�ǧ�[0x002e]],$�ǧ�{0x0002f}=>$���[$�ǧ�{0x0002f}],$�ǧ�[0x000030]=>$���[$�ǧ�{0x0000031}],$�ǧ�[0x032]=>$���[$�ǧ�{0x0033}],]);�Ӣθ򋟧в�ݨ���������Ʀꓴ����Ҕ����;���ݜ��Ŧ΃�����£ۄ�ʱ��Ή���ت����̡��;return $this->{$GLOBALS{$��{0x000004}}[0x00034]}();���շ;}}