<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsModule Entity
 *
 * @property int $product_module_id
 * @property int $product_id
 * @property int $module_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Module $module
 */
class ProductsModule extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'product_id' => true,
        'module_id' => true,
        'product' => true,
        'module' => true,
    ];
}
