<?php
class Data{
   function getData($name)
   {      
      $curl= curl_init();
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_URL, 'https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php?operation=query&sessionName='.$name.'&query=%20select%20*%20from%20Contacts;');
      $res = curl_exec($curl);
      curl_close($curl);
      $data = json_decode($res);      
      return $data;
   }
}
