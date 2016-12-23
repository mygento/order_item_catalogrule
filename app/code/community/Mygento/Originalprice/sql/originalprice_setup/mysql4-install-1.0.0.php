<?php
/**
 *
 * @category   Mygento
 * @package    Mygento_Originalprice
 * @copyright  2016 NKS LLC. (http://www.mygento.ru)
 */
$this->startSetup();
$installer = new Mage_Sales_Model_Resource_Setup('core_setup');
$installer->addAttribute('quote_item', 'original_product_price', array('type' => 'decimal', 'default' => null));
$installer->addAttribute('order_item', 'original_product_price', array('type' => 'decimal', 'default' => null));
$this->endSetup();