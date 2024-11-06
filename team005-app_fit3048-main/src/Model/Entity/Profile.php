<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property string $id
 * @property int $user_id
 * @property string $gender
 * @property string $state
 * @property bool $tobacco_smoked
 * @property string $occupation
 * @property string $annual_income
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $home_loan
 * @property string $debt
 * @property \Cake\I18n\FrozenDate $date_of_birth
 *
 * @property \App\Model\Entity\User $user
 */
class Profile extends Entity
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
        'user_id' => true,
        'gender' => true,
        'state' => true,
        'tobacco_smoked' => true,
        'occupation' => true,
        'annual_income' => true,
        'created' => true,
        'modified' => true,
        'home_loan' => true,
        'debt' => true,
        'date_of_birth' => true,
        'user' => true,
    ];
}
