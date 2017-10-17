<?php /* ç¨‹åºä¾ CMSæ·˜å®å®¢ç³»ç»Ÿ ç¨‹åºä¾ ç‰ˆæƒæ‰€æœ‰ æŠ€æœ¯è®ºå›æ”¯æŒ: bbs.chengxuxia.com QQ: 573907419 æ­£ç‰ˆæŽˆæƒé˜²æ­¢å‡ºçŽ°æ¼æ´žåŽé—¨
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\m\controller;error_reporting(E_ALL^E_NOTICE);define('ÒÒë', 'µ¶ç');Ù°®ì ÃÛµ°«ÅÜó„ùãÕ³ôšŽÜ–õ›·æ²ÔŠ†¸;$_GET[ÒÒë] = explode('|5|3|=', 'API|5|3|=api_config|5|3|=taobao|5|3|=key|5|3|=secret|5|3|=code|5|3|=msg|5|3|=æ·˜å®APIæœªå¡«å†™|5|3|=get.echostr|5|3|=php://input|5|3|=|5|3|=SimpleXMLElement|5|3|=event|5|3|=subscribe|5|3|=<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[text]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            </xml>|5|3|=WEB_WECAHT_INFO|5|3|=text|5|3|=Goods/index|5|3|=id|5|3|=num_iid|5|3|=?couponUrl=|5|3|=coupon_click_url|5|3|=WEB_SITE_URL|5|3|=/|5|3|=Title|5|3|=ã€ä¼˜æƒ åˆ¸|5|3|=coupon_info|5|3|=å‡|5|3|=å…ƒ|5|3|=å…ƒã€‘|5|3|=title|5|3|=Description|5|3|=é”€å”®ä»·æ ¼ï¼š|5|3|=zk_final_price|5|3|=PicUrl|5|3|=pict_url|5|3|=Url|5|3|=<item>
                ã€€ã€€ã€€ã€€ã€€ã€€<Title><![CDATA[%s]]></Title>
                ã€€ã€€ã€€ã€€ã€€ã€€<Description><![CDATA[%s]]></Description>
                ã€€ã€€ã€€ã€€ã€€ <PicUrl><![CDATA[%s]]></PicUrl>
                ã€€ã€€ã€€ã€€ã€€ã€€<Url><![CDATA[%s]]></Url>
                ã€€ã€€ã€€ã€€ã€€ </item>
                ã€€ã€€ã€€ã€€ã€€ã€€|5|3|=Title|5|3|=Description|5|3|=PicUrl|5|3|=Url|5|3|=<xml>
                    ã€€ã€€ã€€ã€€ã€€ã€€<ToUserName><![CDATA[%s]]></ToUserName>
                    ã€€ã€€ã€€ã€€ã€€ã€€<FromUserName><![CDATA[%s]]></FromUserName>
                    ã€€ã€€ã€€ã€€ã€€ã€€<CreateTime>%s</CreateTime>
                    ã€€ã€€ã€€ã€€ã€€ã€€<MsgType><![CDATA[news]]></MsgType>
                    ã€€ã€€ã€€ã€€ã€€ <Content><![CDATA[]]></Content>
                    ã€€ã€€ã€€ã€€ã€€ <ArticleCount>%s</ArticleCount>
                    ã€€ã€€ã€€ã€€ã€€ <Articles>
                                %s
                    ã€€ã€€ã€€ã€€ã€€ </Articles>
                    ã€€ã€€ã€€ã€€ã€€ </xml>|5|3|=taobao.TopSdk|5|3|=json|5|3|=_|5|3|=WEB_COUPON_PID|5|3|=2|5|3|=|5|3|=7|5|3|=1|5|3|=results|5|3|=tbk_coupon|5|3|=Content-Type:text/html; charset=utf-8');üÖÛ­ƒ¢‹ö§†Ú·Û­öŠŽ”¥ÅúØ›…å¡¾àÈ»·¥éºÇõ²ïûŽ¨×ÕÏ»àÝÏ†¤Êß¿ÐÅá¦;use think\Controller;use think\Db;use think\Request;use think\Session;class WechatSearch extends Wechat{public function _initialize(){$È=&$_GET{ÒÒë};parent::_initialize();if($Î=get_config($È[0],$È{0x001})){if($Î[$È[0x0002]][$È{0x00003}]&&$Î[$È[0x0002]][$È[0x000004]]){$this->appkey=trim($Î[$È[0x0002]][$È{0x00003}]);$this->secretKey=trim($Î[$È[0x0002]][$È[0x000004]]);}else{return json_encode([$È{0x05}=>0,$È[0x006]=>$È{0x0007}]);}}}public function index(){$“ª†Ü=&$_GET{ÒÒë};if(!input($“ª†Ü[0x00008])){$ì°öï=file_get_contents($“ª†Ü{0x000009});$ð‰òÁ=$“ª†Ü[0x0a];if(!empty($ì°öï)){$À±¸=simplexml_load_string($ì°öï,$“ª†Ü{0x00b},LIBXML_NOCDATA);$è¡î»ó=trim($À±¸->MsgType);switch($è¡î»ó){case $“ª†Ü[0x000c]:{if($À±¸-> Event==$“ª†Ü{0x0000d}){$ÁÎÝ=$“ª†Ü[0x00000e];$ð‰òÁ=sprintf($ÁÎÝ,$À±¸->FromUserName,$À±¸->ToUserName,time().$“ª†Ü[0x0a],get_config($“ª†Ü{0x0f}));}}break;Ç†©¥óÙãªŽíÐ·Ý‚ðÔê’Ä§‡ ·Èî–Âêö‹ñ¡±æûÎÊ¦Ý¹Ã®ñ¢°â÷œõ¼ÄýÝûÇÍ’Š¸Š–««Ç’§—ÝÎô—’;case $“ª†Ü[0x0010]:{$Šµ=[];ñãê·âÈ³ª–ÆµÏÐËúû”Ž¤«ëò „†ÄŽ¼šûê;$ÖÄÃŸ=trim($À±¸->Content);¾¤†ï‚„±°ü¥Ñ¬–é±ŒÕ¾ì¬ƒ°ÌûŸƒ»ÃŠË´ŒØ;$‹é=$this->GetTaobaoApi($ÖÄÃŸ);foreach($‹é as $¼›){$Ò«È…=url($“ª†Ü{0x00011},[$“ª†Ü[0x000012]=>$¼›[$“ª†Ü{0x0000013}]]).$“ª†Ü[0x014] .urlencode($¼›[$“ª†Ü{0x0015}]);$Ò«È…=get_config($“ª†Ü[0x00016]).ltrim($Ò«È…,$“ª†Ü{0x000017});$Šµ[]=[$“ª†Ü[0x0000018]=>$“ª†Ü{0x019}.get_word($¼›[$“ª†Ü[0x001a]],$“ª†Ü{0x0001b},$“ª†Ü[0x00001c]).$“ª†Ü{0x000001d} .$¼›[$“ª†Ü[0x01e]],$“ª†Ü{0x001f}=>$“ª†Ü[0x00020].$¼›[$“ª†Ü{0x000021}],$“ª†Ü[0x0000022]=>$¼›[$“ª†Ü{0x023}],$“ª†Ü[0x0024] =>$Ò«È…];ÇÖ˜Äö›€»¦Ìï²¦ªÏ±”êãÑ‡Ã;}if(is_array($Šµ)){$ÁÎÝ=$“ª†Ü{0x00025};$³=$“ª†Ü[0x0a];foreach($Šµ as $ë¬){$³.= sprintf($ÁÎÝ,$ë¬[$“ª†Ü[0x000026]],$ë¬[$“ª†Ü{0x0000027}],$ë¬[$“ª†Ü[0x028]],$ë¬[$“ª†Ü{0x0029}]);}$’÷¶è‘=$“ª†Ü[0x0002a];$ð‰òÁ=sprintf($’÷¶è‘,$À±¸->FromUserName,$À±¸->ToUserName,time().$“ª†Ü[0x0a],count($Šµ).$“ª†Ü[0x0a],$³);}}break;úœÓÈŒ‡î¶×¡ËÂ…ÉÈÂüÖìèƒÛúû’ä;}}echo $ð‰òÁ;exit;áŽÒî•;}else{$this->checkWeixinInfo();âò°è‘ù²Ó÷‰ÁáŒžÝˆ±Â•¿‰ÐÉêÞœÚôÝâÁ;}}private function GetTaobaoApi($†åœç){$¬ž=&$_GET{ÒÒë};vendor($¬ž{0x00002b});úì‰‘¬’áöýÁ“Ø¶ñÚš³Ï­ÝÕ»»°Á¡Íª”;$ï=new \TopClient;$ï->appkey=$this->appkey;£Œ„›ŠÆ¯ãý¡¿˜ÕÅ´åï—Ã’äí¦î;$ï->secretKey=$this->secretKey;ØÙŠäÞ¥ï¥ÔÓ£ö“»Í£‚‚‰„ñ¡È„†¶«õ–ãÛî½åÔœŒÄÁá;$ï->format=$¬ž[0x000002c];$Ø­¢¦Ñ=[];$Û©=[];$Ø­¢¦Ñ=explode($¬ž{0x02d},get_config($¬ž[0x002e]));ƒ©Ìø¿±Õ¯î¼„‹ÈÉÍ«â´…‘×¬âü;$¾¦ñ»=$Ø­¢¦Ñ[0x00003];$¿=new \TbkDgItemCouponGetRequest;ƒ’²‚Ì¶–€ÛÁã‘Æôèò×åÈ—»Ò¦Î“è°ÌëÂÜŸÅ;$¿->setAdzoneId($¾¦ñ»);$¿->setPlatform($¬ž{0x0002f});Ö¯‚ºÁÈ¯ª¼ˆ… žÁòÄ‡®ÁÔš…²¹ÊÜžæÎŸ¢;$¿->setCat($¬ž[0x000030]);$¿->setPageSize($¬ž{0x0000031});¥ÚË«úéìî¯ýöÝ¿Ë÷Äþ²ÛÃ®ø«ü™Íƒ È¨;$¿->setQ($†åœç);÷þÂç®ÀÞŒ«…Æª¸Ö†;$¿->setPageNo($¬ž[0x032]);§;$š=$ï->execute($¿);–ØÆ“í;$‹ì=object_to_array($š); Ò©¡ý®ç©ç¿°äÄ±ŒÇËƒ×è™;return $‹ì[$¬ž{0x0033}][$¬ž[0x00034]];}private function show_json($¸Œ«¬){header($_GET{ÒÒë}{0x000035});die(json_encode($¸Œ«¬,!0));íý‚Ö§é–ØÎÛŠÛ¤ÕÞû¿ø­ï¦Ì½ÞØé‹ƒ¶‹Õ¤‰Øû±Â“‹’ï•î”ëÎ¬È¾î‹ÚÎäÄÚçúæ½ ð—;}}