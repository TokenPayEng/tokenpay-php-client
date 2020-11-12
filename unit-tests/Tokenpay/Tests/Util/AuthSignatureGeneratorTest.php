<?php

namespace Tokenpay\Tests\Util;

use Tokenpay\Request\Common\RequestOptions;
use Tokenpay\Util\AuthSignatureGenerator;

class AuthSignatureGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function test_should_generate_signature()
    {
        $options = new RequestOptions();
        $options->setApiKey('api-key');
        $options->setSecretKey('secret-key');
        $options->setBaseUrl('http://localhost:8000');

        $this->assertEquals("UK7LKWOEZVH+PX/YOIMUSXVPKHLR4KOA7PUYKXCYOVQ=", AuthSignatureGenerator::generateSignature($options, "/installment/v1/installments", "1234", null));
    }

    public function test_should_generate_signature_with_body()
    {
        $options = new RequestOptions();
        $options->setApiKey('api-key');
        $options->setSecretKey('secret-key');
        $options->setBaseUrl('http://localhost:8000');

        $request = array(
            'cardUserKey' => 'de050909-39a9-473c-a81a-f186dd55cfef'
        );

        $this->assertEquals("KQM62AFJXCW6RS6QBCLXTA9TV1GQD/SXSALYP+CEHG8=", AuthSignatureGenerator::generateSignature($options, "/payment/v1/cards", "1234", $request));
    }
}
