<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for the coupon information.<br /><br /><span
 * class="tablenote"><b>Note:</b> This container is not returned for the
 * <b>getGuestPurchaseOrder</b> method.</span>.
 */
class Coupon extends AbstractModel
{
    /**
     * The coupon redemption code.
     *
     * @var string
     */
    public $redemptionCode = null;
}
