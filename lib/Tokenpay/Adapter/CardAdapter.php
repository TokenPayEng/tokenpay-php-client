<?php

namespace Tokenpay\Adapter;

use Tokenpay\Request\Common\RequestQueryParamsBuilder;

class CardAdapter extends BaseAdapter
{
    public function __construct($requestOptions)
    {
        parent::__construct($requestOptions);
    }

    public function deleteCard(array $request)
    {
        $path = "/payment/v1/cards" . RequestQueryParamsBuilder::buildQuery($request);
        return parent::httpDelete($path);
    }

    public function searchCards(array $request)
    {
        $path = "/payment/v1/cards" . RequestQueryParamsBuilder::buildQuery($request);
        return parent::httpGet($path);
    }
}
