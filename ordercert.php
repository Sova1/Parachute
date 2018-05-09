<?

	/**
	 *	обработка заказов фри-фола
	 *	06,08,2014, тихохо
	 *
	 */
	 
	 
	isset($_POST['name'],$_POST['phone']) ? null : die("bad");
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$video = !empty($_POST['video']) ? "+ видео" : "";
	$photo = !empty($_POST['photo']) ? "+ фото" : "";
	$date = date("d.m.Y H:i:s");
	
	$message = "дата заявки: $date<br>имя:$name<br>Телефон:$phone<br>$video<br>$photo";
	
	$headers = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\n";
	
	@mail("tiho1022@mail.ru","Заявка на прыжки",$message,$headers);
	@mail("dz@free-fall.ru","Заявка на прыжки",$message,$headers);
	
	echo "good";








	
?>