<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A container that returns the details of an item promotion.
 */
class Promotion extends AbstractModel
{
    /**
     * The details regarding the monetary value of the promotional discount.<br /><br
     * /><span class="tablenote"><b>Note:</b> eBay Bucks are not supported.</span>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $discount = null;

    /**
     * The text for the promotion title, which describes the promotion.
     *
     * @var string
     */
    public $message = null;

    /**
     * The kind of promotion. Some examples are:
     * <code>SellerDiscountedPromotionalOffer</code> and <code>COUPON</code>.
     *
     * @var string
     */
    public $promotionType = null;
}
