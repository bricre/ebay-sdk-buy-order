<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields used to create an eBay guest checkout session.
 */
class CreateGuestCheckoutSessionRequestV2 extends AbstractModel
{
    /**
     * The buyer's email address.
     *
     * @var string
     */
    public $contactEmail = null;

    /**
     * An array used to define the line item(s) and desired quantity for an eBay guest
     * checkout session.<br /><br /><b>Maximum:</b> 10 line items.
     *
     * @var \Ebay\Buy\Order\Model\LineItemInput[]
     */
    public $lineItemInputs = null;

    /**
     * A container that defines the shipping address for an eBay guest checkout
     * session.<br /><br />The Order API supports only domestic shipping. For example,
     * an item purchased on the <code>EBAY_DE</code> marketplace can be shipped only to
     * an address in Germany.<br /><br /><span class="tablenote"><b>Note:</b> If the
     * address cannot be validated, a warning message is  returned along with the
     * response.</span>.
     *
     * @var \Ebay\Buy\Order\Model\ShippingAddress
     */
    public $shippingAddress = null;
}
