<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for line item information in a purchase order.
 */
class OrderLineItemV2 extends AbstractModel
{
    /**
     * A container that is returned for orders that are eligible for eBay's
     * Authenticity Guarantee program. The seller ships Authenticity Guarantee program
     * items to the authentication partner instead of the buyer. If the item is
     * successfully authenticated, the authenticator will ship the item to the buyer.
     *
     * @var \Ebay\Buy\Order\Model\AuthenticityVerificationProgram
     */
    public $authenticityVerification = null;

    /**
     * The cost of a single quantity of the line item.<br /><br /><span
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
     * <b>Feed</b> API methods.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * A container that returns fields to support using the <a
     * href="https://developer.ebay.com/devzone/post-order/index.html#callindex">Post
     * Order API</a> for returns and cancellations. For information about what is
     * returned in these fields and how to use the Post Order API, see <a
     * href="/api-docs/buy/static/api-order.html#using">Using the Post Order
     * API</a>.<br /><br /><b>Note:</b> The Post Order API can be used only with eBay
     * member checkouts.
     *
     * @var \Ebay\Buy\Order\Model\LegacyReference
     */
    public $legacyReference = null;

    /**
     * A unique eBay-assigned ID value that identifies a line item in a checkout
     * session. This is created by the <a
     * href="/api-docs/buy/order/resources/guest_checkout_session/methods/initiateGuestCheckoutSession">initiateGuestCheckoutSession</a>.
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * An enumeration value that indicates the payment status of the line item. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemPaymentStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $lineItemPaymentStatus = null;

    /**
     * An enumeration value that indicates the fulfillment state of this line item.<br
     * /><br /><span class="tablenote"><b>Note:</b> When there is no tracking
     * information, the status will never change from
     * <code>FULFILLMENT_IN_PROGRESS</code>; without tracking information, eBay has no
     * way of knowing whether the order was delivered.</span> For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $lineItemStatus = null;

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
     * The unique order ID for the line item.<br /><br /><b>Maximum Length:</b> 40
     * characters.
     *
     * @var string
     */
    public $orderId = null;

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
     * A container for information about the seller offering this item, such as the
     * seller's user name.
     *
     * @var \Ebay\Buy\Order\Model\Seller
     */
    public $seller = null;

    /**
     * A container for information about the shipping details of the order.
     *
     * @var \Ebay\Buy\Order\Model\ShippingDetail
     */
    public $shippingDetail = null;

    /**
     * A container for the tax information for the line item.
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
