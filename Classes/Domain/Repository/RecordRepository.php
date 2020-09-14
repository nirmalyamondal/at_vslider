<?php
namespace AshokaTree\AtVslider\Domain\Repository;

/***
 *
 * This file is part of the "AshokaTree Vertical Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Nirmalya Mondal <nirmalya.mondal@gmail.com>, https://ashokatree.net
 *
 ***/
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The repository for Records
 */
class RecordRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     */
    protected $configurationManager;

    // Order by sorting
	protected $defaultOrderings = [
		'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	];

    // Angebot repository settings
    public function initializeObject() {
        /** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        // go for $defaultQuerySettings = $this->createQuery()->getQuerySettings(); if you want to make use of the TS persistence.storagePid with defaultQuerySettings(), see #51529 for details
        // Remove the pid constraint
        $querySettings->setRespectStoragePage(FALSE);
        //$querySettings->setRespectStoragePage(TRUE);   
        $this->setDefaultQuerySettings($querySettings);
    }

	public function findBySysfolderOrAll($pidList){
        $pidArray = GeneralUtility::trimExplode(',', $pidList, true);
        $query = $this->createQuery();
        // add the pid constraint
        $query->getQuerySettings()->setRespectStoragePage(TRUE);
        $query->getQuerySettings()->setStoragePageIds($pidArray);
        return $query->execute();
	}
}
