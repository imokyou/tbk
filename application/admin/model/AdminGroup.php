<?php /* 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门
-- enphp : https://git.oschina.net/mz/mzphp2
 */   namespace app\admin\model;error_reporting(E_ALL^E_NOTICE);define('���', '��');���׵�ӱ�������Գ׏������ǘ��齓���ެ����������������������⾪����ǂ�٠�Š;$_GET[���] = explode('|>|"|*', 'error_reporting|>|"|*define|>|"|*ѿ|>|"|*�|>|"|*ѿ|>|"|*explode|>|"|*|+|6|@|>|"|*hasOne|+|6|@AdminGroup|+|6|@uid|+|6|@id|+|6|@name|+|6|@AdminGroupAccess|+|6|@where|+|6|@group_id|+|6|@column|+|6|@AdminUser|+|6|@status|+|6|@find');����݋�������������⊷�����������ɇ艠ܴ��ü��Ҫ������川�������ܧ�ہ��������֬��;$_GET{���}[0](E_ALL^E_NOTICE);$_GET{���}{0x001}($_GET{���}[0x0002],$_GET{���}{0x00003});�̥쥱������陴œ�����Ǫ�힑���ҧ�͜��콠��嚇��������Ƌ;$_GET[$_GET{���}[0x000004]]=$_GET{���}{0x05}($_GET{���}[0x006],$_GET{���}{0x0007});Ϣɺ��׌����������ϣ��˵��������̍��墑�;use think\Db;use think\Model;class AdminGroup extends Model{public function group(){$�=&$_GET{���};$升��=&$_GET{$�[0x000004]};return $this->{$_GET{$�[0x000004]}[0]}($升��{0x001},$升��[0x0002],$升��{0x00003});���܀����뵫�������׉���ԃƙʨ���;��Ϫ;}public function getUserList($�){$���­=&$_GET{���};$�ׅ=&$_GET{$���­[0x000004]};�넪�����������Ħ�����ݝ�ؓ�ŗȇ��֏��ʉ⿅ׅ����҄�����ѷ����������;$���=[];��;$�����=Db::{$_GET{$���­[0x000004]}[0x000004]}($�ׅ{0x05})->{$_GET{$���­[0x000004]}[0x006]}([$�ׅ{0x0007}=>$�])->{$_GET{$���­[0x000004]}[0x00008]}($�ׅ[0x0002]);��׌ǁȊЪ��������ߚ�;if($�����){foreach($����� as $Ȍ�){$���[]=Db::{$_GET{$���­[0x000004]}[0x000004]}($�ׅ{0x000009})->{$_GET{$���­[0x000004]}[0x006]}([$�ׅ{0x00003}=>$Ȍ�,$�ׅ[0x0a]=>0x001])->{$_GET{$���­[0x000004]}{0x00b}}();}return $���;}}}