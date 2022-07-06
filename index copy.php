<?php
    require __DIR__ . '/vendor/autoload.php';
    use IframeModal\Index;

    $iframe_url = 'https://www.onepay.lk/';
    $iframe_title = 'Onepay Merchant Panel';
    
    if(isset($_POST['submit'])) {
        if(array_key_exists('submit', $_POST)) {
            $request_data = [
                'params' => [
                    'hash'=> 'fa911c0b4d6167bfab1e50ce084e38da4361838c9cd78ac99a20df0992d87360',
                ],
                'headers'=> [
                    'Content-Type'=> 'application/json',
                    'Authorization'=> '9b08271f850abbb140154024ef0aeb982311a3f05943416b7fd0635602d98ca07119203f852a8ace.K4CR1189DB9BFE664E7E3',
                ],
                'body' => [
                    'amount'=> 202.25,
                    'app_id'=> 'NVSE1189DB9BFE664E797',
                    'reference'=> '5888995555546656925',
                    'customer_first_name'=> 'chamath', 
                    'customer_last_name'=> 'rathnayake', 
                    'customer_phone_number'=> '+94778869070', 
                    'customer_email'=> 'chamathrathnayake95@gmail.com', 
                    'transaction_redirect_url'=> 'https://webhook.site/40571e78-2013-4017-a90e-dc956deda18c',
                ],
            ];
            $iframe = new Index($request_data, null);
            $res = $iframe->showIframe();
            // var_dump($res);
            echo '<br>' . 'done1';

        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 

    <link href="./style.css" rel="stylesheet">
    <title>Iframe Demo</title>
</head>
<body>
    <div class="m-5">
        <!-- <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input class="btn btn-primary" type="submit" name="submit" value="Start" />    
        </form> -->
        
        <button class="btn btn-primary" type="button" id="start-btn" onclick="openModal()">
            Start
        </button>

        <!-- <div id="paymentgatewayModal" class="payment-gateway-modal">
            <div class="content">
                <div class="close-btn">
                    <button id="paymentGatewayModalCloseBtn">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M18.984 6.422l-5.578 5.578 5.578 5.578-1.406 1.406-5.578-5.578-5.578 5.578-1.406-1.406 5.578-5.578-5.578-5.578 1.406-1.406 5.578 5.578 5.578-5.578z"></path>
                    </svg>
                    </button>
                </div>

               <div class="body">
                    <iframe 
                        src="https://www.onepay.lk/" 
                        title="Onepay Merchant Panel"
                    ></iframe>
               </div>
            </div>
        </div>

        <div id="paymentgatewayModalBackdrop" class="payment-gateway-modal-backdrop"></div> -->
    </div>

    <script src="./script.js"></script>
    <!-- <script src="./script2.js"></script> -->
</body>
</html>