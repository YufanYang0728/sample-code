<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property string $id
 * @property int $user_id
 * @property string $prompt
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $stage
 * @property string $audience_type
 * @property string $possible_answers
 * @property int $question_number
 *
 * @property \App\Model\Entity\User $user
 */
class Question extends Entity
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
        'prompt' => true,
        'created' => true,
        'modified' => true,
        'stage' => true,
        'audience_type' => true,
        'possible_answers' => true,
        'question_number' => true,
        'user' => true,
    ];
}
