# constants_base_url

Mantiene su config.php limpio, ofrece una alternativa en caso de HTTP_HOST falla, te da una constante de utilizar en todo el 
sitio y se puede dar una URI relativa a BASEPATH y AppPath de raíz web también.

En tu config.php simplemente puedes usar
$config['base_url'] = BASE_URL;
