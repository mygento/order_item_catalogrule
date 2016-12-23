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
        $product = $observer->getEvent()->getProduct();
        $item->setData('original_price', $product->getPrice());
        $item->save();
    }
}