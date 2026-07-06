<?php
    $currency='NPR';
    $billing_address='';
    $billing_city='';
    $billing_state='';
    $billing_zip='';
    $billing_country='';
    $papInfo = GET_PAY_PAP_INFO_KEY;
    $oprKey = GET_PAY_OPR_KEY;
    $base_url=GET_PAY_BASE_URL;
    $itemHtml='<div style="font-family:Arial;"><h3>Order Information</h3><div class="item" style="margin-bottom: 20px;">';
    foreach($this->rs_package_data as $item){
        $itemHtml.='<div class="item"><p>'.$item['order_item_name'].'</p><span>Rs '.$item['total'].'</span></div>';
    }
    $itemHtml.='</div></div>'; 
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css'>
<link href="css/custom.css" rel="stylesheet">
<script defer="defer" src="https://minio.finpos.global/getpay-cdn/webcheckout/live/v2/bundle.js"></script>
<div id="checkout" hidden></div>
<div class="onloadpage" id="page_loader">
	<div class="pre-content">
		<div class="logo-pre d-flex justify-content-center"><img src="images/favicon.png" alt="Logo" class="img-fluid" /></div>
	</div>
</div>
</body>
<script>
     const options = {
            userInfo: {
                name: '<?=$_SESSION['MDRCCustFirstName'].' '.$_SESSION['MDRCCustLastName']?>',
                email: '<?=$_SESSION['MDRCCustEmail']?>',
                state: '<?=$billing_state?>',
                country: '<?=$billing_country?>',
                zipcode:'<?=$billing_zip?>',
                city:'<?=$billing_city?>',
                address:'<?=$billing_address?>',
            },
            clientRequestId:'<?=$_SESSION['orderPayID']?>',
            papInfo:'<?=$papInfo?>',
            oprKey: '<?=$oprKey?>',
            insKey: '',
            websiteDomain: "https://www.mdcnepal.com",
            price: parseFloat(<?=$_SESSION['Transaction_Amount']?>),
            businessName: "",
            imageUrl:"",
            currency: "NPR",
            prefill: {
                name: true,
                email: true,
                state: true,
                city: true,
                address: true,
                zipcode: true,
                country: true
            },
            /* disableFields: {
                address: true,
                state: true,
            }, */
            callbackUrl: {
                successUrl: 'https://www.mdcnepal.com/payment-process',
                failUrl: 'https://www.mdcnepal.com/payment-process',
            },
            themeColor: "#5662FF",
            orderInformationUI:'<?=$itemHtml;?>',                 
            onSuccess: (options) => {
               window.location.href = "https://www.mdcnepal.com/payment-process"
            },
            onError: (error) => {
                console.log(error);
            },
        };
    window.addEventListener('load', function () {
        options.baseUrl = '<?=$base_url?>'; 
        const getpay = new GetPay(options)
        getpay.initialize();
    });
</script>
</html>