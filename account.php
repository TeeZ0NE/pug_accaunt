<?php

include 'vendor/autoload.php';
$pug = new Pug(array('pretty' => true, ));

$count = 1;
$price = 5000.22;
$sum = $count * $price;
$nds = 1;
$credit = 0;
$amount = $sum + $nds + $credit;
$var_arr = array(
	'title' => 'Счет',
	'customer' => 'БИН/ИИН 880818300207, ЧЛ Редькин Алексей Игоревич, г. Алматы. мкрн. Каменка, пр. Сейфуллина, д.28',
	'dogovor' => 'договор№ ФЛ/117/0039 от 1 февраля 2017 года',
	'service' =>  'Оплата за Internet - трафик на скорости 40 мб/сек (unlim)',
	'count' => sprintf('%0.3f',$count),
	'price' => sprintf('%0.2f', $price),
	'sum' => sprintf('%0.2f',$sum),
	'nds' => sprintf('%0.2f', $nds),
	'credit' => sprintf('%0.2f', $credit),
	'amount'=>sprintf('%0.2f',$amount),
	'amount_str' => '- Тридцать девять тысяч восемсот восемдесят восем тенге 00 тыин',
	'currency' => 'KZT',
);

$pug->displayFile('account.pug', $var_arr);