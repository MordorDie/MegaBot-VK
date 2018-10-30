<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "config.php";
require_once "vk.api.php";

define('VK_TOKEN', $config['token']);
$vk = new VK(VK_TOKEN);

// Получаем список последних 15 сообщений //
$messages = $vk->request('messages.getDialogs', array(
		'count' => '15',
	));

// Ставим статус Online //
if (rand(1, 20) == 10) {
	$setonline = $vk->request('account.setOnline');
}

	if ($read_state_info === 0 && $value['out'] !== 1) {
		#echo $uid.' '.$read_state_info.' '.$value['out'].' '.$first_name.' '.$last_name.' '.$text.'</br>';
		if (isset($value['uid'])) {
			$send = $vk->request('messages.send', array(
					'message' => 'Привет,'.$first_name.' '.$last_name,
					'uid'     => $value['uid'],
				));
		}
	} else {

	}
}

?>
