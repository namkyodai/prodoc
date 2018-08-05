<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activity Entity
 *
 * @property int $id
 * @property string $name
 * @property int $activity_type_id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $objectives
 * @property string $location
 * @property string $minute_file
 * @property string $attendance_sheet
 * @property string $minute_dir
 *
 * @property \App\Model\Entity\ActivityType $activity_type
 * @property \App\Model\Entity\Minute[] $minutes
 */
class Activity extends Entity
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
        'name' => true,
        'activity_type_id' => true,
        'date' => true,
        'objectives' => true,
        'location' => true,
        'minute_file' => true,
        'attendance_sheet' => true,
        'minute_dir' => true,
        'activity_type' => true,
        'minutes' => true
    ];
}
