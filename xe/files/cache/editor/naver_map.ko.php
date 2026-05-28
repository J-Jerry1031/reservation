<?php if(!defined('__XE__')) exit();
$xml_info = (object)(array(
   'author' => 
  array (
    0 => 
    (object)(array(
       'name' => 'zero',
       'email_address' => 'zero@zeroboard.com',
       'homepage' => 'http://blog.nzeo.com',
    )),
    1 => 
    (object)(array(
       'name' => 'misol',
       'email_address' => 'misol221@paran.com',
       'homepage' => 'http://www.imsoo.net',
    )),
  ),
   'extra_vars' => 
  (object)(array(
     'api_key' => 
    (object)(array(
       'group' => NULL,
       'name' => 'api_key',
       'title' => '네이버지도 api key',
       'type' => 'text',
       'description' => 'http://www.naver.com/ 에서 네이버 지도 API key를 발급 받으신 후 입력해주세요.',
       'value' => NULL,
    )),
  )),
   'component_name' => 'naver_map',
   'title' => '네이버맵 연동',
   'description' => '네이버에서 제공하는 네이버 지도 open api를 이용하여 에디터에 원하는 곳의 지도를 추가하거나 수정할 수 있습니다.
네이버 지도 open api키를 발급 받아서 등록을 해주셔야 정상적인 사용이 가능합니다.',
   'version' => '0.1',
   'date' => '2009-02-23',
   'homepage' => NULL,
   'license' => NULL,
   'license_link' => NULL,
));