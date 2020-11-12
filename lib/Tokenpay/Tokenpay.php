<?php

namespace Tokenpay;

use Tokenpay\Adapter\CardAdapter;
use Tokenpay\Adapter\InstallmentAdapter;
use Tokenpay\Adapter\OnboardingAdapter;
use Tokenpay\Adapter\PaymentAdapter;
use Tokenpay\Adapter\SettlementReportingAdapter;

class Tokenpay
{
    private $requestOptions;
    private $paymentAdapter;
    private $cardAdapter;
    private $installmentAdapter;
    private $onboardingAdapter;
    private $settlementReportingAdapter;

    public function __construct($requestOptions)
    {
        $this->requestOptions = $requestOptions;
        $this->paymentAdapter = new PaymentAdapter($requestOptions);
        $this->cardAdapter = new CardAdapter($requestOptions);
        $this->installmentAdapter = new InstallmentAdapter($requestOptions);
        $this->onboardingAdapter = new OnboardingAdapter($requestOptions);
        $this->settlementReportingAdapter = new SettlementReportingAdapter($requestOptions);
    }

    public function payment()
    {
        return $this->paymentAdapter;
    }

    public function card()
    {
        return $this->cardAdapter;
    }

    public function installment()
    {
        return $this->installmentAdapter;
    }

    public function onboarding()
    {
        return $this->onboardingAdapter;
    }

    public function settlementReporting()
    {
        return $this->settlementReportingAdapter;
    }
}
