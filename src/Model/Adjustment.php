<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the fields for seller adjustments. An adjustment can be a
 * credit or debit.
 */
class Adjustment extends AbstractModel
{
    /**
     * The container that returns the amount and currency of an adjustment.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $amount = null;

    /**
     * The text indicating what the adjustment was for.
     *
     * @var string
     */
    public $label = null;
}
