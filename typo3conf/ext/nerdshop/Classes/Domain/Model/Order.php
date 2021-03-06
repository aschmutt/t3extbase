<?php
namespace Schmutt\Nerdshop\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Andrea Schmuttermair
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * address
     *
     * @var string
     */
    protected $address = '';
    
    /**
     * orderNumber
     *
     * @var string
     */
    protected $orderNumber = '';
    
    /**
     * products
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schmutt\Nerdshop\Domain\Model\Product>
     */
    protected $products = null;
    
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
        $this->products = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    /**
     * Returns the orderNumber
     *
     * @return string $orderNumber
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }
    
    /**
     * Sets the orderNumber
     *
     * @param string $orderNumber
     * @return void
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }
    
    /**
     * Adds a Product
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Product $product
     * @return void
     */
    public function addProduct(\Schmutt\Nerdshop\Domain\Model\Product $product)
    {
        $this->products->attach($product);
    }
    
    /**
     * Removes a Product
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Product $productToRemove The Product to be removed
     * @return void
     */
    public function removeProduct(\Schmutt\Nerdshop\Domain\Model\Product $productToRemove)
    {
        $this->products->detach($productToRemove);
    }
    
    /**
     * Returns the products
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schmutt\Nerdshop\Domain\Model\Product> $products
     */
    public function getProducts()
    {
        return $this->products;
    }
    
    /**
     * Sets the products
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Schmutt\Nerdshop\Domain\Model\Product> $products
     * @return void
     */
    public function setProducts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $products)
    {
        $this->products = $products;
    }

}