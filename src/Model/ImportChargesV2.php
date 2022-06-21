<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the import charges that apply to an order.
 */
class ImportChargesV2 extends AbstractModel
{
    /**
     * The amount of the import charge.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $amount = null;

    /**
     * The type of charge to apply to the order, such as import duties. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/chk:ApplicableChargeTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $applicableChargeType = null;
}
