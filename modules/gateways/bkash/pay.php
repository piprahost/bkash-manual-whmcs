<?php 
if(empty($_GET['wallet']) OR empty($_GET['amount']) OR empty($_GET['invid']) OR empty($_GET['type']) OR empty($_GET['init'])){
    die("This file cannot be accessed directly");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bKash Payment Instructions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fdfdfd;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 350px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin: 20px 0;
        }
        .header {
            background-color: #d52861;
            color: white;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .header img {
            width: 50px;
        }
        .header h1 {
            font-size: 18px;
            margin: 10px 0;
        }
        .instructions {
            padding: 10px 20px;
        }
        .instructions .step {
            background-color: #f8f8f8;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .footer p {
            margin: 0;
            font-size: 12px;
        }
        .back-button {
            background-color: #d52861;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 20px 0;
        }
        .back-button:hover {
            background-color: #b9204f;
        }
    </style>
</head>
<body>
    <?php 
            if($_GET['type'] == "personal"){
                $payment_type = "Personal";
                $payment_mode = "Send Money";
            }elseif($_GET['type'] == "merchant"){
                $payment_type = "Merchant";
                $payment_mode = "Payment";
            }else{
                $payment_type = "Agent";
                $payment_mode = "Cash Out";
            }
    ?>
    <div class="container">
        <div class="header">
            <img src="bkash.png" alt="bKash Logo">
            <h1>bKash <?= $payment_type ?>: <?= $_GET['wallet'] ?></h1>
            <p>Follow these steps to pay with bKash</p>
        </div>
        <div class="instructions">
            <div class="step">Step 1: Dial *247# or Open App</div>
            <div class="step">Step 2: Choose "<?= $payment_mode ?>"</div>
            <div class="step">Step 3: Enter Number: <?= $_GET['wallet'] ?></div>
            <div class="step">Step 4: Enter Amount: BDT <?= $_GET['amount'] ?></div>
            <div class="step">Step 5: Enter Reference: <?= $_GET['prefix'] ?? "" ?><?= $_GET['invid'] ?></div>
            <div class="step">Step 6: Enter your "PIN" then Confirm</div>
        </div>
        <div class="footer">
            <p>কিছু সমস্যা থাকলে কল করুন, একটু সময় অপেক্ষা করুন।</p>
            <a href="#" class="back-button" onclick="goBack()">Back to Client Area</a>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
