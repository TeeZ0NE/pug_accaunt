<?php

include 'vendor/autoload.php';
use NodejsPhpFallback\Stylus;
$pug = new Pug(array('pretty' => true,));
$stylus = new Stylus('style.styl', true);
$nds = .2;
$credit = -12;
# main data of services begin here
$datas= array(
	array(
		'service' =>  'Оплата за Internet - трафик на скорости 40 мб/сек (unlim)',
		'count' => sprintf('%0.3f',3),
		'ed' => 'усл.',
		'price' => sprintf('%0.2f', 5.1),
	),
	array(
		'service' =>  'lorem er wedv dfvdf',
		'count' => sprintf('%0.3f',4),
		'ed' => 'port',
		'price' => sprintf('%0.2f', 23.3),
	),
	array(
		'service' =>  'dfdd рафик на скорости ',
		'count' => sprintf('%0.3f',2),
		'ed' => 'adin',
		'price' => sprintf('%0.2f', 10),
	),
	array(
		'service' =>  'Оплата ти 40 мб/сек (lim)',
		'count' => sprintf('%0.3f',2),
		'ed' => 'уsdsdsdd л.',
		'price' => sprintf('%0.2f', 20.44),
	)
);

$var_arr = array(
	'title' => 'Счет',
	'header_of_account'=> 'Счет на оплату №5296 от 30 апреля 2018 г.',
	'customer' => 'БИН/ИИН 880818300207, ЧЛ Редькин Алексей Игоревич, г. Алматы. мкрн. Каменка, пр. Сейфуллина, д.28',
	'dogovor' => 'договор № ФЛ/117/0039 от 1 февраля 2017 года',
	'nds' => sprintf('%0.2f', $nds),
	'credit' => $credit,
	'amount_str' => '- Тридцать девять тысяч восемсот восемдесят восем тенге 00 тыин',
	'currency' => 'KZT',
	'datas' => $datas,
);

$pug->displayFile('account.pug', $var_arr);