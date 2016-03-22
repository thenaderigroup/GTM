<?php
$domain = $_SERVER['HTTP_HOST'];
$pos = strpos($domain,"www");

if ($pos !== FALSE){
	$domain = substr($domain, $pos+4);
};

switch ($domain){
	case "bodyweightburn.com":
		$tag = "GTM-5ZJXC7";
		break;
	case "halfdaydietplan.com":
		$tag = "GTM-W4L66R";
		break;
	case "halfdayfactor.com":
		$tag = "GTM-WQ5WSJ";
		break;
	case "jeansdiet.com":
		$tag = "GTM-WK4RSN";
		break;
	case "thebetaswitch.com":
		$tag = "GTM-WQ5WSJ";
		break;
	case "yogafitnessflow.com":
		$tag = "GTM-5TMR6R";
		break;
	case "alphanation.com":
		$tag = "GTM-N5J2BW";
		break;
	case "anabolicfinishers.com":
		$tag = "GTM-MD77JB";
		break;
	case "specforceabs.com":
		$tag = "GTM-PPMH53";
		break;
	case "specforcefactor.com":
		$tag = "GTM-3FFLTL";
		break;
	case "specforcefit.com":
		$tag = "GTM-WJVBFD";
		break;
	case "eatstopeat.com":
		$tag = "GTM-5WQZXQ";
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
