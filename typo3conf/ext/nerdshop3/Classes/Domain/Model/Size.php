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
 * Size
 */
class Size extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * value
     *
     * @var string
     */
    protected $value = '';

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
     * Returns the value
     *
     * @return string $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
