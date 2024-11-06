<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string|null $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $level
 * @property string|null $password
 * @property string|null $nonce
 * @property \Cake\I18n\FrozenTime $nonce_expiry
 * @property \App\Model\Entity\Course[] $courses
 * @property \App\Model\Entity\Payment[] $payments
 */
class User extends Entity
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
        'email' => true,
        'first_name' => true,
        'last_name' => true,
        'level' => true,
        'password' => true,
        'courses' => true,
        'payments' => true,
        'nonce' => true,
        'expiry' => true,

    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];


    // Add this method
    protected function _setPassword(string $password): ?string {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return $password;
    }
}
