<?php

namespace Ebay\Buy\Order\Api;

use Ebay\Buy\Order\Model\CouponRequest;
use Ebay\Buy\Order\Model\CreateGuestCheckoutSessionRequestV2;
use Ebay\Buy\Order\Model\GuestCheckoutSessionResponseV2;
use Ebay\Buy\Order\Model\ShippingAddressImpl;
use Ebay\Buy\Order\Model\UpdateQuantity;
use Ebay\Buy\Order\Model\UpdateShippingOption;

class Session extends AbstractAPI
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
     * business units.<br /><br />This method adds a coupon to an eBay guest checkout
     * session and applies it to all the eligible items in the order.<br /><br />The
     * <b>checkoutSessionId</b> is passed in as a URI parameter and is required. The
     * redemption code of the coupon is in the payload and is also required.<br /><br
     * />For a list of supported sites and other restrictions, see <a
     * href="/api-docs/buy/order/overview.html#API">API Restrictions</a> in the Order
     * API overview.<br /><br />The URLs for this method are:<ul><li><b>Production
     * URL:</b>
     * <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/apply_coupon</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/apply_coupon</code></li></ul>.
     *
     * @param string        $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                         eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b>
     *                                         method.<br /><br /><span class="tablenote"><b>Note:</b> When using this ID, the
     *                                         X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used
     *                                         when this guest checkout session was created. See <a
     *                                         href="/api-docs/buy/order/overview.html#checkout-restriction">Checkout session
     *                                         restrictions</a> in the Buy Integration Guide for details.</span>
     * @param CouponRequest $Model             the container for the fields used to apply a coupon
     *                                         to a guest checkout session
     * @param array         $headers           options:
     *                                         'X-EBAY-C-MARKETPLACE-ID'	string	A header that identifies the user's business
     *                                         context and is specified using a marketplace ID value.<br /><br /><span
     *                                         class="tablenote"><b>Note:</b> This header does <i>not</i> indicate a language
     *                                         preference or consumer location.</span><br /><br />See <a
     *                                         href="/api-docs/static/rest-request-components.html#marketpl"
     *                                         target="_blank">Marketplace ID values</a> for a list of supported values.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function applyGuestCoupon(string $checkoutSessionId, CouponRequest $Model, array $headers = []): GuestCheckoutSessionResponseV2
    {
        return $this->request(
        'applyGuestCoupon',
        'POST',
        "guest_checkout_session/$checkoutSessionId/apply_coupon",
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

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
     * business units.<br /><br />This method returns the details of the specified
     * guest checkout session. The <b>checkoutSessionId</b> is passed in as a URI
     * parameter and is required. This method has no request payload.<br /><br />For a
     * list of supported sites and other restrictions, see <a
     * href="/api-docs/buy/order/overview.html#API">API Restrictions</a> in the Order
     * API overview.<br /><br />The URLs for this method are:<ul><li><b>Production
     * URL:</b>
     * <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}</code></li></ul>.
     *
     * @param string $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                  eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b>
     *                                  method.<br /><br /><span class="tablenote"><b>Note:</b> When using this ID, the
     *                                  X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used
     *                                  when this guest checkout session was created. See <a
     *                                  href="/api-docs/buy/order/overview.html#checkout-restriction">Checkout session
     *                                  restrictions</a> in the Buy Integration Guide for details.</span>
     * @param array  $headers           options:
     *                                  'X-EBAY-C-MARKETPLACE-ID'	string	A header that identifies the user's business
     *                                  context and is specified using a marketplace ID value.<br /><br /><span
     *                                  class="tablenote"><b>Note:</b> This header does <i>not</i> indicate a language
     *                                  preference or consumer location.</span><br /><br />See <a
     *                                  href="/api-docs/static/rest-request-components.html#marketpl"
     *                                  target="_blank">Marketplace ID values</a> for a list of supported values.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function get(string $checkoutSessionId, array $headers = []): GuestCheckoutSessionResponseV2
    {
        return $this->request(
        'getGuestCheckoutSession',
        'GET',
        "guest_checkout_session/$checkoutSessionId",
        null,
        [],
        $headers
        );
    }

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
     * business units.<br /><br />This method creates an eBay guest checkout session,
     * which is the first step in performing a checkout. The method returns a
     * <b>checkoutSessionId</b> that you use as a URI parameter in subsequent guest
     * checkout methods.<br /><br />Also see <a
     * href="/api-docs/buy/static/ref-buy-negative-testing.html">Negative Testing Using
     * Stubs</a> for information on how to emulate error conditions for this  method
     * using stubs.<br /><br /><span class="tablenote"><font
     * color="006600"><b>TIP:</b></font> To test the entire checkout flow, you might
     * need a "test" credit card. You can generate a credit card number from <a
     * href="http://www.getcreditcardnumbers.com"
     * target="_blank">http://www.getcreditcardnumbers.com</a>.</span><br /><br />For a
     * list of supported sites and other restrictions, see <a
     * href="/api-docs/buy/order/overview.html#API">API Restrictions</a> in the Order
     * API overview.<br /><br />The URLs for this method are:<ul><li><b>Production
     * URL:</b>
     * <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/initiate</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/initiate</code></li></ul>.
     *
     * @param CreateGuestCheckoutSessionRequestV2 $Model   the container for the fields
     *                                                     used by the <b>initiateGuestCheckoutSession</b> method
     * @param array                               $headers options:
     *                                                     'X-EBAY-C-ENDUSERCTX'	string	A header that is used to specify the
     *                                                     <b>affiliateCampaignId</b>, and optionally the <b>affiliateReferenceId</b>, to
     *                                                     enable revenue sharing when the buyer purchases items.<br /><br /><span
     *                                                     class="tablenote"><font color="006600"><b>TIP:</b></font> See <a
     *                                                     href="/api-docs/buy/static/api-browse.html#Headers" target="_blank">Request
     *                                                     headers</a> in the Buying Integration Guide for more information.</span>
     *                                                     'X-EBAY-C-MARKETPLACE-ID'	string	A header that identifies the user's business
     *                                                     context and is specified using a marketplace ID value.<br /><br /><span
     *                                                     class="tablenote"><b>Note:</b> This header does <i>not</i> indicate a language
     *                                                     preference or consumer location.</span><br /><br />See <a
     *                                                     href="/api-docs/static/rest-request-components.html#marketpl"
     *                                                     target="_blank">Marketplace ID values</a> for a list of supported values.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function initiate(CreateGuestCheckoutSessionRequestV2 $Model, array $headers = []): GuestCheckoutSessionResponseV2
    {
        return $this->request(
        'initiateGuestCheckoutSession',
        'POST',
        'guest_checkout_session/initiate',
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

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
     * business units.<br /><br />This method removes a coupon from an eBay guest
     * checkout session. The <b>checkoutSessionId</b> is passed in as a URI parameter
     * and is required. The redemption code of the coupon is specified in the payload
     * and is also required.<br /><br />For a list of supported sites and other
     * restrictions, see <a href="/api-docs/buy/order/overview.html#API">API
     * Restrictions</a> in the Order API overview.<br /><br />The URLs for this method
     * are:<ul><li><b>Production URL:</b>
     * <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/remove_coupon</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/remove_coupon</code></li></ul>.
     *
     * @param string        $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                         eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b>
     *                                         method.<br /><br /><span class="tablenote"><b>Note:</b> When using this ID, the
     *                                         X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used
     *                                         when this guest checkout session was created. See <a
     *                                         href="/api-docs/buy/order/overview.html#checkout-restriction">Checkout session
     *                                         restrictions</a> in the Buy Integration Guide for details.</span>
     * @param CouponRequest $Model             the container for the fields used by the
     *                                         <b>removeGuestCoupon</b> method
     * @param array         $headers           options:
     *                                         'X-EBAY-C-MARKETPLACE-ID'	string	A header that identifies the user's business
     *                                         context and is specified using a marketplace ID value.<br /><br /><span
     *                                         class="tablenote"><b>Note:</b> This header does <i>not</i> indicate a language
     *                                         preference or consumer location.</span><br /><br />See <a
     *                                         href="/api-docs/static/rest-request-components.html#marketpl"
     *                                         target="_blank">Marketplace ID values</a> for a list of supported values.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function removeGuestCoupon(string $checkoutSessionId, CouponRequest $Model, array $headers = []): GuestCheckoutSessionResponseV2
    {
        return $this->request(
        'removeGuestCoupon',
        'POST',
        "guest_checkout_session/$checkoutSessionId/remove_coupon",
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

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
     * business units.<br /><br />This method changes the quantity of the specified
     * line item in an eBay guest checkout session.<br /><br />For a list of supported
     * sites and other restrictions, see <a
     * href="/api-docs/buy/order/overview.html#API">API Restrictions</a> in the Order
     * API overview.<br /><br />The URLs for this method are:<ul><li><b>Production
     * URL:</b>
     * <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_quantity</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_quantity</code></li></ul>.
     *
     * @param string         $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                          eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b>
     *                                          method.<br /><br /><span class="tablenote"><b>Note:</b> When using this ID, the
     *                                          X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used
     *                                          when this guest checkout session was created. See <a
     *                                          href="/api-docs/buy/order/overview.html#checkout-restriction">Checkout session
     *                                          restrictions</a> in the Buy Integration Guide for details.</span>
     * @param UpdateQuantity $Model             the container for the fields used by the
     *                                          <b>updateGuestQuantity</b> method
     * @param array          $headers           options:
     *                                          'X-EBAY-C-MARKETPLACE-ID'	string	A header that identifies the user's business
     *                                          context and is specified using a marketplace ID value.<br /><br /><span
     *                                          class="tablenote"><b>Note:</b> This header does <i>not</i> indicate a language
     *                                          preference or consumer location.</span><br /><br />See <a
     *                                          href="/api-docs/static/rest-request-components.html#marketpl"
     *                                          target="_blank">Marketplace ID values</a> for a list of supported values.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function updateGuestQuantity(string $checkoutSessionId, UpdateQuantity $Model, array $headers = []): GuestCheckoutSessionResponseV2
    {
        return $this->request(
        'updateGuestQuantity',
        'POST',
        "guest_checkout_session/$checkoutSessionId/update_quantity",
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

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
     * business units.<br /><br />This method changes the shipping address for the
     * order in an eBay guest checkout session. All the line items in an order must be
     * shipped to the same address, but the shipping method can be specific to the line
     * item.<br /><br /><span class="tablenote"><b>Note:</b> If the address submitted
     * cannot be validated, a warning message will be returned. This does not prevent
     * the method from executing, but you may want to verify the address.</span><br
     * /><br />For a list of supported sites and other restrictions, see <a
     * href="/api-docs/buy/order/overview.html#API">API Restrictions</a> in the Order
     * API overview.<br /><br />The URLs for this method are:<ul><li><b>Production
     * URL:</b>
     * <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_address</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_address</code></li></ul>.
     *
     * @param string              $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                               eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b>
     *                                               method.<br /><br /><span class="tablenote"><b>Note:</b> When using this ID, the
     *                                               X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used
     *                                               when this guest checkout session was created. See <a
     *                                               href="/api-docs/buy/order/overview.html#checkout-restriction">Checkout session
     *                                               restrictions</a> in the Buy Integration Guide for details.</span>
     * @param ShippingAddressImpl $Model             the container for the fields used by the
     *                                               <b>updateGuestShippingAddress</b> method
     * @param array               $headers           options:
     *                                               'X-EBAY-C-MARKETPLACE-ID'	string	A header that identifies the user's business
     *                                               context and is specified using a marketplace ID value.<br /><br /><span
     *                                               class="tablenote"><b>Note:</b> This header does <i>not</i> indicate a language
     *                                               preference or consumer location.</span><br /><br />See <a
     *                                               href="/api-docs/static/rest-request-components.html#marketpl"
     *                                               target="_blank">Marketplace ID values</a> for a list of supported values.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function updateGuestShippingAddress(string $checkoutSessionId, ShippingAddressImpl $Model, array $headers = []): GuestCheckoutSessionResponseV2
    {
        return $this->request(
        'updateGuestShippingAddress',
        'POST',
        "guest_checkout_session/$checkoutSessionId/update_shipping_address",
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

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
     * business units.<br /><br />This method changes the shipping method for the
     * specified line item in an eBay guest checkout session. The shipping option can
     * be set for each line item. This gives the shopper the ability choose the cost of
     * shipping for each line item.<br /><br />For a list of supported sites and other
     * restrictions, see <a href="/api-docs/buy/order/overview.html#API">API
     * Restrictions</a> in the Order API overview.<br /><br />The URLs for this method
     * are:<ul><li><b>Production URL: </b>
     * <code>https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_option</code></li><li><b>Sandbox
     * URL:</b>
     * <code>https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_option</code></li>
     * </ul>.
     *
     * @param string               $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                                eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b>
     *                                                method.<br /><br /><span class="tablenote"><b>Note:</b> When using this ID, the
     *                                                X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used
     *                                                when this guest checkout session was created. See <a
     *                                                href="/api-docs/buy/order/overview.html#checkout-restriction">Checkout session
     *                                                restrictions</a> in the Buy Integration Guide for details.</span>
     * @param UpdateShippingOption $Model             the container for the fields used by the
     *                                                <b>updateGuestShippingOption</b> method
     * @param array                $headers           options:
     *                                                'X-EBAY-C-MARKETPLACE-ID'	string	A header that identifies the user's business
     *                                                context and is specified using a marketplace ID value.<br /><br /><span
     *                                                class="tablenote"><b>Note:</b> This header does <i>not</i> indicate a language
     *                                                preference or consumer location.</span><br /><br />See <a
     *                                                href="/api-docs/static/rest-request-components.html#marketpl"
     *                                                target="_blank">Marketplace ID values</a> for a list of supported values.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function updateGuestShippingOption(string $checkoutSessionId, UpdateShippingOption $Model, array $headers = []): GuestCheckoutSessionResponseV2
    {
        return $this->request(
        'updateGuestShippingOption',
        'POST',
        "guest_checkout_session/$checkoutSessionId/update_shipping_option",
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }
}
