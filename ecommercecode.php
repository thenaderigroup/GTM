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

<!-- PHP EXAMPLE FOR FIRST UPSELL PAGE -->


<!-- FIRST UPSELL PAGE SCRIPT -->

<?php 
	//LOAD COOKIE SCRIPT. THIS FILE CAN BE FOUND IN THE RESPOSITORY, AND MUST BE INCLUDED ON YOUR DOMAIN SERVER.
	include 'checkreturning.php';

	//FETCH SALES DATA FROM URL
	$receipt=$_GET['cbreceipt'];
	$item=$_GET['item'];
	$affiliate=$_GET['cbaffi'];
	
	    if ($item==''){
        $amount='null';
        $code='null';
    } else if ($item==1){
        $amount=000;
        $code='NAME';
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

<!-- END FIRST UPSELL PAGE SCRIPT -->