<!-- CORE GOOGLE ANALYTICS ECOMMERCE CODE

<script>
dataLayer = [{
    'transactionId':'DYNAMICALLY GENERATED RECEIPT ID',
    'transactionTotal': DYNAMICALLY GENERATED TRANSACTION TOTAL ,
    'transactionProducts': [{
        'sku':'DYNAMICALLY GENERATED ITEM SKU',
        'name':'DYNAMICALLY GENERATED ITEM NAME',
        'price':DYNAMICALLY GENERATED ITEM TOTAL,
        'quantity': DYNAMICALLY GENERATED QUANTITY
    }]
}];

//THE TRANSACTION PRODUCTS ARRAY SHOULD BE DUPLICATED IN THE CASE OF MULTIPLE PRODUCTS IN THE SAME ORDER

</script>

-->

---------------------------------------------------------

<!-- PHP EXAMPLE FOR CLICKBANK THANK YOU PAGE -->

<!-- COOKIE SCRIPT -->

		<?php 
		//unset ($_COOKIE['sffvi']);
		//$newvisitor = 1;
		//exit;
		if((!isset($_COOKIE['sffvi'])) || ($_COOKIE['sffvi']!='1')) {
			setcookie('sffvi', '1', time() + (172800 * 30), "/"); // 86400 = 1 day, 172800 = 2 days
			// WITH GOOGLE CONTENT EXPERIMENTS -- setcookie('sffvi', $_COOKIE['sffvi']+1, time() + (172800 * 30), "/"); 
			$newvisitor = 1;
		}
		else
		{
			$newvisitor = 0;
		}
		?>

<!-- END COOKIE SCRIPT -->


<!-- THANK YOU PAGE SCRIPT -->

<?php 
	//LOAD COOKIE SCRIPT
	include 'checkreturning.php';

	//FETCH SALES DATA FROM URL
	$receipt=$_GET['cbreceipt'];
	$item=$_GET['item'];
	$affiliate=$_GET['cbaffi'];
	
	    if ($item==''){
        $amount='null';
        $code='null';
    } else if ($item==16){
        $amount=27;
        $code='HDD';
    } else if ($item==17){
        $amount=37;
        $code='HDD';
    } else if ($item==22){
        $amount=19;
        $code='HDD';
    } else if ($item==28){
        $amount=29;
        $code='HDD';
    } else if ($item==31){
        $amount=20;
        $code='HDD';
    }
 
	//IMPLEMENT ECOMMERCE CODE
	if($newvisitor==1) 
	{
		echo "<script>
	dataLayer = [{
		'transactionId':'$receipt',
		'transactionAffiliation':'$affiliate',
		'transactionTotal':$amount ,
		'transactionProducts': [{
			'sku':'$item',
			'name':'$code',
			'price':$amount,
			'quantity': 1
		}]
	}];

	</script>";
	
	
	}
?>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5XT92F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXXXX');</script>
<!-- End Google Tag Manager -->


<!-- END THANK YOU PAGE SCRIPT -->