

<?php 
	function conexion()
	{
		 $link= mysqli_connect("localhost","usuarioceideul","jGwNAfp#t3bEGQgZ5","ceideul");
		

		mysqli_set_charset($link, "utf8");

		return $link;
	}

 ?>