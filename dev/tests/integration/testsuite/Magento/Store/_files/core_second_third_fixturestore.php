<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/** @var \Magento\Store\Model\Website $website */
$website = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Store\Model\Website::class);
$website->setName('Second Website')->setCode('secondwebsite')->save();

$websiteId = $website->getId();
$groupId = $website->getDefaultGroupId();

/** @var \Magento\Store\Model\Store $store */
$store = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Store\Model\Store::class);
$store->setCode('secondstore')->setName('Second Store')->setSortOrder(10)->setIsActive(1);
$store->save();

/** @var \Magento\Store\Model\Website $website */
$website = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Store\Model\Website::class);
$website->setName('Third Website')->setCode('thirdwebsite')->save();

$websiteId = $website->getId();
$groupId = $website->getDefaultGroupId();

/** @var \Magento\Store\Model\Store $store */
$store = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Store\Model\Store::class);
$store->setCode('thirdstore')->setName('Third Store')->setSortOrder(10)->setIsActive(1);
$store->save();

/* Refresh stores memory cache */
//\Magento\TestFramework\Helper\Bootstrap::getObjectManager()->get(
//    \Magento\Store\Model\StoreManagerInterface::class
//)->reinitStores();
