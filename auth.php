<?php

setcookie('user', 'Да', time()+3600, '/');
header('Location: /');

if($_COOKIE['user'] == 'Да'){
	setcookie('user', 'Да', time()-3600, '/');
} else {
	setcookie('user', 'Нет', time()+3600, '/');
}

?>