<?  

if(isset($_POST['name'])&&isset($_POST['tel'])){
	$to = 'bandrashko1@gmail.com';
	$subject = 'Заявка с сайта KlopHunter.ru';
	$message = '
	<html>
	<head>
		<title>'.$subject.'</title>
	</head>
	<body>
		<p>Имя: '.htmlspecialchars($_POST['name']).'</p>
		<p>Телефон: '.htmlspecialchars($_POST['tel']).'</p>
	</body>
	</html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= 'From: KlopHunter.ru';
        mail($to, $subject, $message, $headers);
      }
      ?>

      <!DOCTYPE html>

      <html>
      <head>
      	<meta charset="utf-8"/>
      	<title>Thank You!</title>
      	<meta  name="keywords"  content=""/>
      	<meta name="description"  content= ""/>
      	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      	<link rel="stylesheet" type="text/css" href="css/style.css"/>


      	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
      	<script type="text/javascript" src="js/jquery-1.11.1.min.js"  ></script>
      	<script src="js/docready.js"></script>
      	<script type="text/javascript" src="js/other.js"></script>
      	<script type="text/javascript" src="js/visiCF.js"></script>
      	<script type="text/javascript" src="js/jquery.inputmask.js"></script>
      	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
      	<script type="text/javascript" src="js/ani.js"></script>






      </head><body>

      <div class="headLineThanks">
      	<div class="contentHeadThanks">
      		<p class="logoText">Уничтожение насекомых и<br>грызунов по Москве и МО</p>
      		<a href="tel:">
      			<button type="button" class="butCallBack fright"></button>
      		</a>	
      		<div class="clr"></div>
      	</div>
      </div>
      <div class="block blockThanks">
      	<img src="pic/thanksImg.png" class="thanksImg"/>
      	<div class="content">

      		<div class="blockThanksText">
      			<p class="thanksTit">Спасибо</p>
      			<p class="thanksTxt">Что оставили заявку у нас на сайте.<br>В ближайщее время мы свяжемся с вами</p>
      			<p class="thanksPodpis">Если у вас срочный вопрос звоните по номеру:<br /><a href="tel:+7 (495) 776-17-43">+7 (495) 776-17-43</a></p>

      			<a href="http://klop-hunter.ru" class="backLink">Вернуться на сайт</a>

      		</div>
      		<div class="clr"></div>
      	</div>

      </div>

    </body>
    </html>
