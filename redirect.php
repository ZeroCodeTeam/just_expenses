define("PLAYSTORE_LINK", "https://play.google.com/store/apps/details?id=org.zerocode.justexpenses");
define("APPSTORE_LINK", "https://apps.apple.com/us/app/just-expenses-app/id1373021367");


sny_os_redirect();
function sny_os_redirect() {
	if(sny_if_android() && PLAYSTORE_LINK){
		header("Location: " . PLAYSTORE_LINK);
	}elseif(sny_if_ios() && APPSTORE_LINK){
		header("Location: ".APPSTORE_LINK);
	}
	
}

function sny_if_android() {
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	return stripos($ua, 'android');
}

function sny_if_ios() {
	$iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
	$iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
	$iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
	return $iPod || $iPhone || $iPad ;
}
