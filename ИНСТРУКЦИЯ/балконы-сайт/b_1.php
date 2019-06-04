<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
<meta http-equiv="refresh" content="5; url=http://фабрика-окон-киров.рф/index_.html">
<title>"Фабрика окон"</title>
</head>
<body>

<script language="JavaScript" type="text/javascript">
<!-- 
location="http://фабрика-окон-киров.рф/index_.html" 
//--> 
</script>    
    
<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
if (isset($_POST['mess'])) {$mess = $_POST['mess'];}

$to1 = "avoshnikov@yandex.ru"; /*Укажите ваш адрес электоронной почты*/
$to2 = "266361@bk.ru"; /*Укажите ваш адрес электоронной почты*/
$headers = "Content-type: text/plain; charset = windows-1251";
$subject = "Сообщение с вашего сайта Фабрика окон";
$message = "Сообщение с вашего сайта Фабрика окон, форма (Готовые окна для балкона: Артикул изделия: Б-004) \nИмя пославшего: $name  \nНомер телефона: $tel \nТекс сообщения: $mess";
$send1 = mail ($to1, $subject, $message, $headers);
$send2 = mail ($to2, $subject, $message, $headers);
if (($send1 == 'true') && ($send2 == 'true'))
{
echo "";
echo "";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}
?>
</body>
</html>
