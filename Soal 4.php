<?php
	$i=1;
	while ($i>=50){
		if($i%3==0)
			echo"Foo";
		else if ($i%5==0)
			echo"Bar";
		else if ($i%3==0 && $i%5==0)
			echo"FooBar";
		$i++;}
?>