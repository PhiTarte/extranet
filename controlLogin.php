<?php

header("Pragma: no-cache");	// pour indiquer au navigateur de ne pas mettre en cache
$adr=$_SERVER['HTTP_REFERER'];
echo "document.write(\"<a href='".$adr."'>".$adr." "."</a>\");";
echo "document.write(\"<a href='".basename($adr)."'>".basename($adr)." "."</a>\");";

?>