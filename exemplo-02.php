<?php

if(!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
	if(!in_array($item, array(".", ".."))) {
		echo "apagando arquivo images/".$item."<br>";
		unlink("images/".$item);
	}
	
}

echo "OK";

?>