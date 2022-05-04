<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for an individual line item.
 */
class LineItem extends AbstractModel
{
    /**
     * A container returned for orders that are eligible for eBay's Authenticity
     * Guarantee service. The seller ships Authenticity Guarantee service items to the
     * authentication partner instead of the buyer. If the item is successfully
     * authenticated, the authenticator will ship the item to the buyer.
     *
     * @var \Ebay\Buy\Order\Model\AuthenticityVerificationProgram
     */
    public $authenticityVerification = null;

    /**
     * The cost of a single quantity of the line item. This is the starting point for
     * computing the price during the checkout session.<br /><br /><span
     * class="tablenote"><b>Note:</b> The price includes the value-added tax (VAT) for
     * applicable jurisdictions when requested from supported marketplaces. In this
     * case, users must pass the <a
     * href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a>
     * request header specifying the supported marketplace (such as
     * <code>EBAY_GB</code>) to see VAT-inclusive pricing. For more information on VAT,
     * refer to <a
     * href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT
     * Obligations in the EU</a>.</span>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $baseUnitPrice = null;

    /**
     * A breakdown of the fees applicable to the line item.
     *
     * @var \Ebay\Buy\Order\Model\Fee[]
     */
    public $fees = null;

    /**
     * An eBay-assigned URL of the item image.
     *
     * @var \Ebay\Buy\Order\Model\Image
     */
    public $image = null;

    /**
     * The eBay identifier of an item. This ID is returned by the <b>Browse</b> and
     * <b>Feed</b> API methods. The ID is in RESTful item ID format.<br /><br /><b>For
     * example:</b> <code>v1|2**********6|5**********4</code> or
     * <code>v1|1**********9|0</code>.<br /><br />For more information about item IDs
     * for RESTful APIs, see <a
     * href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a>.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * A unique eBay-assigned ID value that identifies a line item in a checkout
     * session.
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * The total cost for the line item, taking into account the quantity, any seller
     * item discounts, and any coupon that applies.<br /><br /><span
     * class="tablenote"><b>Note:</b> This does not include any shipping discounts,
     * shipping costs, fees, or seller adjustments.</span>.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $netPrice = null;

    /**
     * An array of promotions applied to the line item.
     *
     * @var \Ebay\Buy\Order\Model\Promotion[]
     */
    public $promotions = null;

    /**
     * The quantity ordered for the line item.
     *
     * @var int
     */
    public $quantity = null;

    /**
     * A container that returns the information about the seller, such as their eBay
     * user name.
     *
     * @var \Ebay\Buy\Order\Model\Seller
     */
    public $seller = null;

    /**
     * An array of shipping options that are available for the line item. By default,
     * the first one will be selected.<br /><br /><span class="tablenote"><b>Note:</b>
     * The <b>updateGuestShippingOption</b> method can be used to change the shipping
     * option.</span>.
     *
     * @var \Ebay\Buy\Order\Model\ShippingOption[]
     */
    public $shippingOptions = null;

    /**
     * A container that returns the tax information for the line item.
     *
     * @var \Ebay\Buy\Order\Model\TaxDetail[]
     */
    public $taxDetails = null;

    /**
     * The seller-created title of the item.
     *
     * @var string
     */
    public $title = null;
}
