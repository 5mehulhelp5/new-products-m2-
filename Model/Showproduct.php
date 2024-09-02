<?php
/**
 * Mavenbird Technologies Private Limited
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://mavenbird.com/Mavenbird-Module-License.txt
 *
 * =================================================================
 *
 * @category   Mavenbird
 * @package    Mavenbird_Newproduct
 * @author     Mavenbird Team
 * @copyright  Copyright (c) 2018-2024 Mavenbird Technologies Private Limited ( http://mavenbird.com )
 * @license    http://mavenbird.com/Mavenbird-Module-License.txt
 */
namespace Mavenbird\Newproduct\Model;

class Showproduct implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * To option array
     */
    public function toOptionArray()
    {
        return [['value' => 2, 'label' => __('Display Category Wise')],['value' => 1, 'label' => __('Display All Products')]];
    }

    /**
     *  To Array
     */
    public function toArray()
    {
        return [1 => __('Display All Products'),2=>__('Display Category Wise')];
    }
}