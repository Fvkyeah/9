<?php
$data=array('chat_id'=>$proxed,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);

?>