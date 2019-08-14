<?php
/**
 * Class CSL_RecentReviews_Block_Reviews
 *
 * @package     CSL_RecentReviews
 * @author      Cristian Sanclemente <cristian@clickelectrodomesticos.com>
 * @copyright   2014-2015 CSL
 */
class CSL_RecentReviews_Block_Reviews extends Mage_Core_Block_Template {
	
	public function getReviews(){
		return Mage::getModel('recentreviews/reviews')->getReviews();
	}
	
	public function getProductImage($id){
		$product = Mage::getModel('catalog/product')->load($id);
		return $product->getImageUrl();
	}
	
	public function isenable(){
		if (Mage::getStoreConfig('csl/recentreviews_config/enabled', Mage::app()->getStore()))
			return true;
		return false;
	}
	
}