
<?php include("config/db.php"); ?>

<h2>Deposit USDT (Binance Pay)</h2>

<p>Send payment using QR or Binance ID below</p>

<img src="assets/binance_qr.png" width="200">

<p>Binance ID: <b>ADMIN_BINANCE_ID</b></p>

<form method="post" action="deposit_submit.php">
<input type="number" name="amount" placeholder="Amount USD (min 100)" required>
<button type="submit">Submit Deposit</button>
</form>
