<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quote Entity
 *
 * @property string $id
 * @property string $amount
 * @property string $application_method
 * @property string $user_id
 * @property string $package_id
 * @property bool $pay_from_super
 * @property int|null $pay_wait_days
 * @property int|null $payment_end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Package $package
 */
class Quote extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'amount' => true,
        'application_method' => true,
        'user_id' => true,
        'package_id' => true,
        'pay_from_super' => true,
        'pay_wait_days' => true,
        'payment_end_date' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'package' => true,
    ];
}
