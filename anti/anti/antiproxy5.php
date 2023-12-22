<?php
$context=stream_context_create($options);
$result=file_get_contents($proxy_link,false,$context);

?>