<?php

# bKash Payment Gateway Module

if (!defined("WHMCS")) die("This file cannot be accessed directly");

function bkash_config() {
    $configarray = array(
     "FriendlyName" => array(
        "Type" => "System",
        "Value" => "bKash"
        ),
     "bkash_number" => array(
        "FriendlyName" => "bkash Number",
        "Type" => "text",
        "Size" => "20",
        "Value" => "0188888888",
        "Description" => "Enter your valid bkash account number here.",
        ),
     "account_type" => array(
        "FriendlyName" => "Account Type",
        "Type" => "dropdown",
        'Options' => array(
                'personal' => 'Personal',
                'merchant' => 'Merchant',
                'agent' => 'Agent',
        ),
        "Description" => "Select your bkash account type.",
        ),
      "reference_prefix" => array(
        "FriendlyName" => "Reference Prefix",
        "Type" => "text",
        "Size" => "20",
        "Value" => "REF",
        "Description" => "If you wen't to set any prefix on Reference.",
        ),
    );
    return $configarray;
}

function bkash_link($params) {
    $init = bin2hex(random_bytes(80));
    $wallet = $params['bkash_number'];
    $wallet_type = $params['account_type'];
    $amount = $params['amount'];
    $reference_prefix = $params['reference_prefix'];
    $invId = $params['invoiceid'];
    
    return <<<HTML
    <form method="GET" action="modules/gateways/bkash/pay.php">
        <input type="hidden" name="init" value="$init" />
        <input type="hidden" name="wallet" value="$wallet" />
        <input type="hidden" name="type" value="$wallet_type" />
        <input type="hidden" name="amount" value="$amount" />
        <input type="hidden" name="prefix" value="$reference_prefix" />
        <input type="hidden" name="invid" value="$invId" />
        <input class="btn btn-primary" type="submit" value="Pay Now" />
    </form>
HTML;
}
