<?php

require_once('config/sample_config.php');

use Tokenpay\Model\Currency;
use Tokenpay\Model\PaymentGroup;

$request = array(
    'price' => 1,
    'paidPrice' => 1.1,
    'walletPrice' => 0,
    'buyerId' => 1,
    'installment' => 1,
    'currency' => Currency::TL,
    'paymentGroup' => PaymentGroup::PRODUCT,
    'conversationId' => 'd1811bb0-25a2-40c7-ba71-c8b605259611',
    'card' => array(
        'cardHolderName' => 'Pharmacy User',
        'cardNumber' => '4256690000000001',
        'expireYear' => '2035',
        'expireMonth' => '11',
        'cvc' => '123'
    ),
    'items' => array(
        array(
            'externalId' => 'fcf47134-12ee-4d37-bd2c-c46cd9297487',
            'name' => 'Pharmaton',
            'price' => 0.3,
            'subMerchantId' => 1,
            'subMerchantPrice' => 0.27
        ),
        array(
            'externalId' => 'a5eb1ab1-2676-4c10-830d-cc204e0f2126',
            'name' => 'Supradyn',
            'price' => 0.5,
            'subMerchantId' => 2,
            'subMerchantPrice' => 0.42
        ),
        array(
            'externalId' => '7ffbe76f-7453-4f02-ab07-06cc03edd459',
            'name' => 'Agavit',
            'price' => 0.2,
            'subMerchantId' => 3,
            'subMerchantPrice' => 0.18
        )
    )
);

$response = FunctionalTestConfig::tokenpay()->payment()->createPayment($request);

print_r($response);
