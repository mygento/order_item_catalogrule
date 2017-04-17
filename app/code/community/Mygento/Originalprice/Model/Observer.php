<?php

/**
 *
 * @category   Mygento
 * @package    Mygento_Originalprice
 * @copyright  2016 NKS LLC. (http://www.mygento.ru)
 */
class Mygento_Originalprice_Model_Observer
{

    public function addToCartComplete($observer)
    {
        $item = $observer->getEvent()->getQuoteItem();
        if (!is_object($item) || !$item instanceof Mage_Sales_Model_Quote_Item) {
            return;
        }
        $product = $observer->getEvent()->getProduct();
        $item->setData('original_product_price', $product->getData('price'));
    }
}
