<?php

class Smartie_Fsi_Block_Incentive extends Mage_Core_Block_Template {
	public function canShowBlock (){
		return (Mage::getStoreConfig("carriers/freeshipping/active") && Mage::getStoreConfig("carriers/freeshipping/free_shipping_subtotal") > 0);
	}
	
	public function getRemainingAmount (){
		return Mage::getStoreConfig("carriers/freeshipping/free_shipping_subtotal") - Mage::getSingleton('checkout/cart')->getQuote()->getSubtotal();
	}
}