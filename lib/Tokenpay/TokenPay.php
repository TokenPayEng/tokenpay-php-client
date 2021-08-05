<?php

namespace Tokenpay;

use Tokenpay\Adapter\InstallmentAdapter;
use Tokenpay\Adapter\LinkAdapter;
use Tokenpay\Adapter\OnboardingAdapter;
use Tokenpay\Adapter\PaymentAdapter;
use Tokenpay\Adapter\SettlementReportingAdapter;

class TokenPay
{
    private $requestOptions;
    private $paymentAdapter;
    private $installmentAdapter;
    private $onboardingAdapter;
    private $settlementReportingAdapter;
    private $linkAdapter;

    public function __construct($requestOptions)
    {
        $this->requestOptions = $requestOptions;
        $this->paymentAdapter = new PaymentAdapter($requestOptions);
        $this->installmentAdapter = new InstallmentAdapter($requestOptions);
        $this->onboardingAdapter = new OnboardingAdapter($requestOptions);
        $this->settlementReportingAdapter = new SettlementReportingAdapter($requestOptions);
        $this->linkAdapter = new LinkAdapter($requestOptions);
    }

    public function payment()
    {
        return $this->paymentAdapter;
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

    public function link()
    {
        return $this->linkAdapter;
    }
}
