<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property string $id
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $description
 * @property string|null $title
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Quiz[] $quizzes
 * @property \App\Model\Entity\Section[] $sections
 */
class Course extends Entity
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
        'date' => true,
        'description' => true,
        'title' => true,
        'users' => true,
        'quizzes' => true,
        'sections' => true,
    ];
}
