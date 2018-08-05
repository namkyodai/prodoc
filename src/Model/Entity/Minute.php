<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Minute Entity
 *
 * @property int $id
 * @property int $subject_id
 * @property string $minute
 * @property string $action
 * @property int $status_id
 * @property int $people_id
 * @property \Cake\I18n\FrozenDate $due_date
 * @property \Cake\I18n\FrozenDate $actual_date
 * @property int $traffic
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $activity_id
 * @property int $work_package_id
 * @property int $area_id
 * @property int $discipline_id
 * @property string $repeated
 * @property string $reference
 *
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\People $people
 * @property \App\Model\Entity\Activity $activity
 * @property \App\Model\Entity\WorkPackage $work_package
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Discipline $discipline
 */
class Minute extends Entity
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
        'subject_id' => true,
        'minute' => true,
        'action' => true,
        'status_id' => true,
        'people_id' => true,
        'due_date' => true,
        'actual_date' => true,
        'traffic' => true,
        'created' => true,
        'modified' => true,
        'activity_id' => true,
        'work_package_id' => true,
        'area_id' => true,
        'discipline_id' => true,
        'repeated' => true,
        'reference' => true,
        'subject' => true,
        'status' => true,
        'people' => true,
        'activity' => true,
        'work_package' => true,
        'area' => true,
        'discipline' => true
    ];
}
