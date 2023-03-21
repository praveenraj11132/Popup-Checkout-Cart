<?php

namespace Wheelpros\CheckoutExtended\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Checkout\Model\Cart as CustomerCart;

/**
 * This class returns the subtotal of products
 */

class GetSubtotal implements ArgumentInterface
{
    /**
     * @var CustomerCart
     */
    protected CustomerCart $cart;

    public function __construct(
        CustomerCart  $cart
    ){
        $this->cart = $cart;
    }

    /**
     * Returns the data from the subtotal from products
     *
     * @return array
     */
    public function getSubtotal()
    {
        $cart = $this->cart->getQuote()->getSubtotal();
        return $cart;
    }
}
