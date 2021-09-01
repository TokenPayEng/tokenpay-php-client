<?php

namespace Tokenpay\Adapter;

use Tokenpay\Request\Common\RequestQueryParamsBuilder;

class LinkAdapter extends BaseAdapter
{
    public function __construct($requestOptions)
    {
        parent::__construct($requestOptions);
    }

    public function createLink(array $request)
    {
        $path = "/tokenlink/v1/products";
        return parent::httpPost($path, $request);
    }

    public function updateLink($id, array $request)
    {
        $path = "/tokenlink/v1/products/" . $id;
        return parent::httpPut($path, $request);
    }

    public function retrieveLink($id)
    {
        $path = "/tokenlink/v1/products/" . $id;
        return parent::httpGet($path);
    }

    public function searchLinks(array $request)
    {
        $path = "/tokenlink/v1/products" . RequestQueryParamsBuilder::buildQuery($request);;
        return parent::httpGet($path);
    }
}
