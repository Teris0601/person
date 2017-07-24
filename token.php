<?php
    
    $timestamp =$_GET['timestamp'];
    $nonce =$_GET['nonce'];
     $token= 'weixin';
    $signature =$_GET['signature'];
    
     $array =array($timestamp,$nonce,$token);
      sort($array);
     $tempstr=implode('',$array);
     $tempstr=shal($tmpstr);
      if($tempstr== $signature){
        echo $_GET['echostr'];
        exit;
      }
 
