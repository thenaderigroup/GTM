<?php  
	//IMPLEMENT GTM DATA LAYER AND ECOMMERCE CODE
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