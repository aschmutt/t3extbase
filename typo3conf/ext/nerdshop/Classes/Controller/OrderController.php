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
 * OrderController
 */
class OrderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * orderRepository
     *
     * @var \Schmutt\Nerdshop\Domain\Repository\OrderRepository
     * @inject
     */
    protected $orderRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $orders = $this->orderRepository->findAll();
        $this->view->assign('orders', $orders);
    }
    
    /**
     * action show
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Order $order
     * @return void
     */
    public function showAction(\Schmutt\Nerdshop\Domain\Model\Order $order)
    {
        $this->view->assign('order', $order);
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
     * @param \Schmutt\Nerdshop\Domain\Model\Order $newOrder
     * @return void
     */
    public function createAction(\Schmutt\Nerdshop\Domain\Model\Order $newOrder)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->orderRepository->add($newOrder);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Order $order
     * @ignorevalidation $order
     * @return void
     */
    public function editAction(\Schmutt\Nerdshop\Domain\Model\Order $order)
    {
        $this->view->assign('order', $order);
    }
    
    /**
     * action update
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Order $order
     * @return void
     */
    public function updateAction(\Schmutt\Nerdshop\Domain\Model\Order $order)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->orderRepository->update($order);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \Schmutt\Nerdshop\Domain\Model\Order $order
     * @return void
     */
    public function deleteAction(\Schmutt\Nerdshop\Domain\Model\Order $order)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->orderRepository->remove($order);
        $this->redirect('list');
    }
    
    /**
     * action submit
     *
     * @return void
     */
    public function submitAction()
    {
        
    }

}