<?php

require_once('config/sample_config.php');

use Tokenpay\Model\Currency;
use Tokenpay\Model\PaymentGroup;

$request = array(
    'price' => 100,
    'paidPrice' => 100,
    'walletPrice' => 0,
    'installment' => 1,
    'currency' => Currency::TL,
    'paymentGroup' => PaymentGroup::PRODUCT,
    'conversationId' => '456d1297-908e-4bd6-a13b-4be31a6e47d5',
    'callbackUrl' => 'https://www.your-website.com/tokenpay-checkout-callback',
    'buyerId' => 1,
    'items' => array(
        array(
            'externalId' => uniqid(),
            'name' => 'Item 1',
            'price' => 30,
            'subMerchantId' => 1,
            'subMerchantPrice' => 27
        ),
        array(
            'externalId' => uniqid(),
            'name' => 'Item 2',
            'price' => 50,
            'subMerchantId' => 2,
            'subMerchantPrice' => 42
        ),
        array(
            'externalId' => uniqid(),
            'name' => 'Item 3',
            'price' => 20,
            'subMerchantId' => 3,
            'subMerchantPrice' => 18
        )
    )
);

$response = FunctionalTestConfig::tokenpay()->payment()->initCheckoutPayment($request);

print_r($response);
