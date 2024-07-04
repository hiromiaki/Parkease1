<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Address</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .title {
            text-align: center;
            margin-bottom: 20px;
        }
        .input-box {
            margin-bottom: 15px;
        }
        .input-box span {
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h2>Billing Address</h2>
        </div>
        <br>
        <br>
        <div class="input-box">
            <span>Invoice Number: </span> <?= rand() ?>
        </div>

        <div class="input-box">
            <span>Full Name: </span> <?= $vendor['Name'] ?>
        </div>
        <div class="input-box">
            <span>Store Name: </span> <?= $vendor['StoreName'] ?>
        </div>
        <div class="input-box">
            <span>Monthly Rent: </span> $<?= $vendor['MonthlyRent'] ?>
        </div>

        <div class="input-box">
            <span>Cards Accepted: PayPal || MasterCard || Visa || Gcash || PayMaya</span>
        </div>

        <div class="footer">
            <p>Please ensure that the monthly rent is paid on time. The due date for the payment is on the 15th of every month. Please pay on the cashier of the front gate at the park. Thank you for your cooperation.</p>
        </div>
    </div>
</body>
</html>
