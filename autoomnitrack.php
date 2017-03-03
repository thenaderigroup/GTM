<?php
$domain = $_SERVER['HTTP_HOST'];
$pos = strpos($domain,"www");

if ($pos !== FALSE){
	$domain = substr($domain, $pos+4);
};

switch ($domain){
	case "example.com":
		$tag = "GTM-XXXXXX";
		break;
	default:
		$tag = "null";
};

if ($tag !== "null"){	
echo <<<GTMTAG
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=$tag"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','$tag');</script>
GTMTAG;
};
?>
