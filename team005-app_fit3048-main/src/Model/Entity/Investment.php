<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Investment Entity
 *
 * @property int $investment_id
 * @property string $company_name
 * @property string $investment_name
 * @property int $admin_fee
 * @property string $investment_type
 */
class Investment extends Entity
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
        'company_name' => true,
        'investment_name' => true,
        'admin_fee' => true,
        'investment_type' => true,
    ];
}
