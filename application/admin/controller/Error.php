<?php /* 程序侠CMS淘宝客系统 程序侠版权所有 技术论坛支持: bbs.chengxuxia.com QQ: 573907419 正版授权防止出现漏洞后门 
-- enphp : https://git.oschina.net/mz/mzphp2
 */
  namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('��', '��');�������������Á������������©���ɮ��������Ô���ʁ���ܨ��Į�����������;$_GET[��] = explode('|@|4|"', '页面不存在');��舓����징˔�������������;class Error{public function index(){throw new \think\exception\HttpException(0x00000194,$_GET{��}[0]);exit;}public function _empty(){throw new \think\exception\HttpException(0x00000194,$_GET{��}[0]);exit;����;}}