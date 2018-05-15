<?php

	foreach (glob(dirname(__FILE__)."/../app/models/*.php") as $filename)
	{
		require $filename;
	}
	

?>