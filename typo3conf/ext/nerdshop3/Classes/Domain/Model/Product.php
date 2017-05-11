<?php
namespace Schmutt\Nerdshop3\Domain\Model;

/***
 *
 * This file is part of the "Nerdshop3" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * size
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schmutt\Nerdshop3\Domain\Model\Size>
     * @cascade remove
     */
    protected $size = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->size = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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

    /**
     * Adds a Size
     *
     * @param \Schmutt\Nerdshop3\Domain\Model\Size $size
     * @return void
     */
    public function addSize(\Schmutt\Nerdshop3\Domain\Model\Size $size)
    {
        $this->size->attach($size);
    }

    /**
     * Removes a Size
     *
     * @param \Schmutt\Nerdshop3\Domain\Model\Size $sizeToRemove The Size to be removed
     * @return void
     */
    public function removeSize(\Schmutt\Nerdshop3\Domain\Model\Size $sizeToRemove)
    {
        $this->size->detach($sizeToRemove);
    }

    /**
     * Returns the size
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schmutt\Nerdshop3\Domain\Model\Size> $size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the size
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schmutt\Nerdshop3\Domain\Model\Size> $size
     * @return void
     */
    public function setSize(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $size)
    {
        $this->size = $size;
    }
}
