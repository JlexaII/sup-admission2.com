<?php
$config['cp1251'] = false; //Если кодировка 1251 - взвести флаг
$config['remove_all_external_links'] = 'save_anchors'; // варианты ['', 'save_anchors','cut_anchors']
$config['whitelisted_domains'] = []; //например ['google.com', 'yandex.ru']
$config['404files'] = 404; //что делаем - редирект на главную, или отдаем 404, ставим код, дефолтный 301

//$config['block_badreferer'] = true;
//$config['checkbots'] = true;
//$config['cloudflare'] = true;