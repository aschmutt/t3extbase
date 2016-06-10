<?php
namespace Schmutt\Nerdshop\Controller;

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
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productRepository
     *
     * @var \Schmutt\Nerdshop\Domain\Repository\ProductRepository
     * @inject
     */
    protected $productRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }
    
    /**
     * action show
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Product $product
     * @return void
     */
    public function showAction(\Schmutt\Nerdshop\Domain\Model\Product $product)
    {
        $this->view->assign('product', $product);
    }
    
    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Product $newProduct
     * @return void
     */
    public function createAction(\Schmutt\Nerdshop\Domain\Model\Product $newProduct)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->productRepository->add($newProduct);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Product $product
     * @ignorevalidation $product
     * @return void
     */
    public function editAction(\Schmutt\Nerdshop\Domain\Model\Product $product)
    {
        $this->view->assign('product', $product);
    }
    
    /**
     * action update
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Product $product
     * @return void
     */
    public function updateAction(\Schmutt\Nerdshop\Domain\Model\Product $product)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->productRepository->update($product);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Product $product
     * @return void
     */
    public function deleteAction(\Schmutt\Nerdshop\Domain\Model\Product $product)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->productRepository->remove($product);
        $this->redirect('list');
    }
    
    /**
     * action filter
     *
     * @return void
     */
    public function filterAction()
    {
        
    }

}