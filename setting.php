<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "15Yhc+1nOY8U/3fDNe9wFVBWNJeV4Sqay8itVL2k00Jtwtmmz6kwEu759xpoD8/wfq4fvySswNfb0jjAJ4/hf80a/577NYd04yCVVgMF6C1rRhj870I5hfAeehGphGS0Hth5B0EWxp0WZWtcfP3Y7AdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "e6c343d1dbaeac7b4480097e0fcaa769";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
