<?php

namespace Tokenpay\Adapter;

use Tokenpay\Request\Common\RequestQueryParamsBuilder;

class SettlementReportingAdapter extends BaseAdapter
{
    public function __construct($requestOptions)
    {
        parent::__construct($requestOptions);
    }

    public function retrieveBouncedSubMerchantRows(array $request)
    {
        $path = "/settlement-reporting/v1/settlement-file/bounced-sub-merchant-rows" . RequestQueryParamsBuilder::buildQuery($request);
        return parent::httpGet($path);
    }

    public function retrievePayoutCompletedTransactions(array $request)
    {
        $path = "/settlement-reporting/v1/settlement-file/payout-completed-transactions" . RequestQueryParamsBuilder::buildQuery($request);
        return parent::httpGet($path);
    }
}
