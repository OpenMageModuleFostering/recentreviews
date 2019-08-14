<?php
/**
 * Class CSL_RecentReviews_Model_Reviews
 *
 * @package     CSL_RecentReviews
 * @author      Cristian Sanclemente <cristian@clickelectrodomesticos.com>
 * @copyright   2014-2015 CSL
 */
Class CSL_RecentReviews_Model_Reviews extends Mage_Core_Model_Abstract{
		
	public function getReviews(){
		
		$reviews = Mage::getModel('review/review')->getCollection()->setPageSize(Mage::getStoreConfig('csl/recentreviews_config/number', Mage::app()->getStore()));
		$reviews->addStoreFilter( Mage::app()->getStore()->getId() )
			->addStatusFilter( Mage_Review_Model_Review::STATUS_APPROVED )
			->setDateOrder()
			->addRateVotes();     

		return $reviews;
	}		
}