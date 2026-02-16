<?php

// Are we being accessed directly ?
if(!defined('GOSMTP_PRO_VERSION')) {
	exit('Hacking Attempt !');
}

function gosmtp_pro_get_notifications_service_list(){

	$list = [
		'email' => ['title' => __('Email', 'gosmtp-pro'), 'class' => 'GOSMTP\Notifications\Email'],
		'slack' => ['title' => __('Slack', 'gosmtp-pro'), 'class' => 'GOSMTP\Notifications\Slack'],
		'discord' => ['title' => __('Discord', 'gosmtp-pro'), 'class' => 'GOSMTP\Notifications\Discord'],
	];

	return apply_filters('gosmtp_pro_get_notifications_service_list', $list);
}

function gosmtp_pro_load_notifications_service_list(){
	
	$list = gosmtp_pro_get_notifications_service_list();
	
	$smtp_service = [];
	
	foreach($list as $key => $service){
		
		$class = $service['class'];
		
		if(!class_exists($class)){
			continue;
		}
		
		$smtp_service[$key] = new $class();
	}
		
	return apply_filters('gosmtp_pro_load_notifications_service_list', $smtp_service);
}