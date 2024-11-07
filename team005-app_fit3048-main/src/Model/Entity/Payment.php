<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $payment_id
 * @property \Cake\I18n\FrozenTime $payment_date
 * @property int $payment_provider_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\PaymentProvider $payment_provider
 * @property \App\Model\Entity\User $user
 */
class Payment extends Entity
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
        'payment_date' => true,
        'payment_provider_id' => true,
        'user_id' => true,
        'payment_provider' => true,
        'user' => true,
    ];
}
