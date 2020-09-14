<?php
namespace AshokaTree\AtVslider\Domain\Model;

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
/**
 * Record
 */
class Record extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $uri = '';

    /**
     * subtitle
     * 
     * @var string
     */
    protected $subtitle = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * simage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $simage = null;

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set uri
     *
     * @param string $uri uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * Returns the subtitle
     * 
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     * 
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the simage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $simage
     */
    public function getSimage()
    {
        return $this->simage;
    }

    /**
     * Sets the simage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $simage
     * @return void
     */
    public function setSimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $simage)
    {
        $this->simage = $simage;
    }   

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }    
}
