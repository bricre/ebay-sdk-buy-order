<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the shipping address fields.<br /><br /><span
 * class="tablenote"><b>Note:</b> If the address cannot be validated, a warning
 * message is returned along with the response.</span>.
 */
class ShippingAddressImpl extends AbstractModel
{
    /**
     * The first line of the street address where the item is being shipped.<br /><br
     * /><b>Maximum:</b><ul><li>40 characters for AU, CA, and US
     * marketplaces</li><li>35 characters for DE and GB marketplaces</li><li>50
     * characters for all other marketplaces</li></ul>.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address where the item is being shipped. This
     * optional field can be used for information such as 'Suite Number' or 'Apt
     * Number'.<br /><br /><b>Maximum:</b><ul><li>40 characters for AU, CA, and US
     * marketplaces</li><li>35 characters for DE and GB marketplaces</li><li>50
     * characters for all other marketplaces</li></ul>.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city of the address where the item is being shipped.
     *
     * @var string
     */
    public $city = null;

    /**
     * The two letter code representing the country of the address. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/bas:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county of the address where the item is being shipped.
     *
     * @var string
     */
    public $county = null;

    /**
     * The phone number of the person receiving the package.<br /><br /><span
     * class="tablenote"><b>Note:</b> It is highly recommended that when entering the
     * phone number you include the country code.<br /><br />For example, if a US phone
     * number is <code>4********4</code>, you would enter <code>+14********4</code>. If
     * you do not include this code, the service will use the country specified in the
     * <b>country</b> field.<br /><br />You can find the country code at <a
     * href="https://countrycode.org/">https://countrycode.org</a>.</span>.
     *
     * @var string
     */
    public $phoneNumber = null;

    /**
     * The postal code of the address where the item is being shipped.<br /><br /><span
     * class="tablenote"><b>Note:</b> This is optional when shipping to EBAY_HK (Hong
     * Kong).</span>.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The name of the person receiving the package.
     *
     * @var \Ebay\Buy\Order\Model\Recipient
     */
    public $recipient = null;

    /**
     * The state or province of the address.<br /><br /><span
     * class="tablenote"><b>Note:</b> For the US marketplace, this is a two-character
     * value. For a list of valid values, see <a
     * href="https://www.ups.com/worldshiphelp/WS15/ENU/AppHelp/Codes/State_Province_Codes.htm">US
     * State and Canada Province Codes</a>. </span>.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
