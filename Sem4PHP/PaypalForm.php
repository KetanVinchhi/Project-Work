<!--- Paypal Form-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paypal Integration Test</title>
</head>
<body>

<form class="paypal" action="payments.php" method="post" id="paypal_form" target="_blank">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="IN" />
        <input type="hidden" name="currency_code" value="INR" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <input type="hidden" name="first_name" value="Ketan" />
        <input type="hidden" name="last_name" value="Vinchhi" />
        <input type="hidden" name="payer_email" value="jeet-buyer@hotmail.co.in" />
        <input type="hidden" name="item_number" value="123456" / >
        <input type="submit" name="submit" value="Submit Payment"/>
    </form>

</body>
</html>