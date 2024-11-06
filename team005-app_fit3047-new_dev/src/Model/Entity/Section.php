<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Section Entity
 *
 * @property string $id
 * @property string|null $course_id
 * @property string|null $description
 * @property string|null $title
 * @property string|null $video
 *
 * @property \App\Model\Entity\Course $course
 */
class Section extends Entity
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
        'course_id' => true,
        'description' => true,
        'title' => true,
        'video' => true,
        'course' => true,
    ];
}
