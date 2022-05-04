<?php

namespace Ebay\Buy\Order\Api;

use Ebay\Buy\Order\Model\GuestPurchaseOrderV2;

class Order extends AbstractAPI
{
    /**
     * <span class="tablenote"><b>Note:</b> This version of the Order API (v2)
     * currently only supports the guest payment flow for eBay managed payments. To
     * view the v1_beta version of the Order API, which includes both member and guest
     * checkout payment flows, refer to the <a
     * href="/api-docs/buy/order_v1/resources/methods">Order_v1 API</a>
     * documentation.</span><br /><br /><a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#limited"
     * target="_blank"><img src="/cms/img/docs/partners-api.svg" class="legend-icon
     * partners-icon"  alt="Limited Release" title="Limited Release" />(Limited
     * Release)</a> This method is only available to select developers approved by
     * business units.<br /><br />This method retrieves the details about a specific
     * guest purchase order. It returns the line items, including purchase  order
     * status, dates created and modified, item quantity and listing data, payment and
     * shipping information, and prices, taxes, discounts and credits.<br /><br />The
     * <b>purchaseOrderId</b> is passed in as a URI parameter and is required.<br /><br
     * /><span class="tablenote"><b>Note:</b> The <b>purchaseOrderId</b> value is
     * returned in the call-back URL that is sent through the new eBay pay widget. For
     * more information about eBay managed payments and the new Order API payment flow,
     * see <a href="/api-docs/buy/static/api-order.html">Order API</a> in the Buying
     * Integration Guide.</span><br /><br />You can use this method to not only get the
     * details of a purchase order, but to check the value of the <a
     * href="#response.purchaseOrderPaymentStatus">purchaseOrderPaymentStatus</a> field
     * to determine if the order has been paid for. If the order has been paid for,
     * this field will return <code>PAID</code>.<br /><br />For a list of supported
     * sites and other restrictions, see <a
     * href="/api-docs/buy/order/overview.html#API">API Restrictions</a> in the Order
     * API overview.<br /><br />The URLs for this method are:<ul><li><b>Production
     * URL:</b>
     * <code>https://api.ebay.com/buy/order/v2/guest_purchase_order/{purchaseOrderId}</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://api.sandbox.ebay.com/buy/order/v2/guest_purchase_order/{purchaseOrderId}</code></li></ul>.
     *
     * @param string $purchaseOrderId The unique identifier of a purchase order made by
     *                                a guest buyer, for which details are to be retrieved.<br /><br /><span
     *                                class="tablenote"><b>Note:</b> This value is returned in the response URL that
     *                                is sent through the new eBay pay widget. For more information about eBay managed
     *                                payments and the new Order API payment flow, see <a
     *                                href="/api-docs/buy/static/api-order.html">Order API</a> in the Buying
     *                                Integration Guide.</span>
     *
     * @return GuestPurchaseOrderV2
     */
    public function get(string $purchaseOrderId): GuestPurchaseOrderV2
    {
        return $this->request(
        'getGuestPurchaseOrder',
        'GET',
        "guest_purchase_order/$purchaseOrderId",
        null,
        [],
        []
        );
    }
}
