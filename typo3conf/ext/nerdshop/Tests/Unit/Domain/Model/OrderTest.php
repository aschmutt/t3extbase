<?php

namespace Schmutt\Nerdshop\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Andrea Schmuttermair
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Schmutt\Nerdshop\Domain\Model\Order.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Andrea Schmuttermair 
 */
class OrderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Schmutt\Nerdshop\Domain\Model\Order
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Schmutt\Nerdshop\Domain\Model\Order();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAddress()
		);
	}

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress()
	{
		$this->subject->setAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'address',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrderNumberReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getOrderNumber()
		);
	}

	/**
	 * @test
	 */
	public function setOrderNumberForStringSetsOrderNumber()
	{
		$this->subject->setOrderNumber('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'orderNumber',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProductsReturnsInitialValueForProduct()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getProducts()
		);
	}

	/**
	 * @test
	 */
	public function setProductsForObjectStorageContainingProductSetsProducts()
	{
		$product = new \Schmutt\Nerdshop\Domain\Model\Product();
		$objectStorageHoldingExactlyOneProducts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneProducts->attach($product);
		$this->subject->setProducts($objectStorageHoldingExactlyOneProducts);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneProducts,
			'products',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addProductToObjectStorageHoldingProducts()
	{
		$product = new \Schmutt\Nerdshop\Domain\Model\Product();
		$productsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$productsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($product));
		$this->inject($this->subject, 'products', $productsObjectStorageMock);

		$this->subject->addProduct($product);
	}

	/**
	 * @test
	 */
	public function removeProductFromObjectStorageHoldingProducts()
	{
		$product = new \Schmutt\Nerdshop\Domain\Model\Product();
		$productsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$productsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($product));
		$this->inject($this->subject, 'products', $productsObjectStorageMock);

		$this->subject->removeProduct($product);

	}
}
