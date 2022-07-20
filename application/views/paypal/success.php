<!DOCTYPE html>
<html>

<head>
  <title>Transaction Success - Paypal Payment Gateway Codeigniter - Web-tuts.com</title>
  <!-- Latest CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
  <div class="container">
    <h2 class="mt-3 mb-3">Transaction Detalis</h2>
    <div class="row">
      <span>Your payment was successful done, thank you for purchase.</span><br />
      <span>Item Number :
        <strong><?php echo $product_id; ?></strong>
      </span><br />
      <span>TXN ID :
        <strong><?php echo $txn_id; ?></strong>
      </span><br />
      <span>Amount Paid :
        <strong>$<?php echo $payment_gross . ' ' . $currency_code; ?></strong>
      </span><br />
      <span>Payment Status :
        <strong><?php echo $payment_status; ?></strong>
      </span><br />
    </div>
  </div>
</body>

</html>