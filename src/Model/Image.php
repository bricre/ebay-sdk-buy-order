<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A container that returns the URL for an image.
 */
class Image extends AbstractModel
{
    /**
     * The URL for the image.
     *
     * @var string
     */
    public $imageUrl = null;
}
