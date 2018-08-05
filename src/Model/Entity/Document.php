<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property int $revision_id
 * @property int $status_id
 * @property int $decision_code_id
 * @property int $work_package_id
 * @property int $area_id
 * @property int $discipline_id
 * @property int $document_type_id
 * @property string $sequence
 * @property \Cake\I18n\FrozenDate $planned_date
 * @property \Cake\I18n\FrozenDate $submitted_date
 * @property \Cake\I18n\FrozenDate $due_date
 * @property string $doc_link
 * @property string $doc_dir
 * @property string $file_name
 *
 * @property \App\Model\Entity\Revision $revision
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\DecisionCode $decision_code
 * @property \App\Model\Entity\WorkPackage $work_package
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Discipline $discipline
 * @property \App\Model\Entity\DocumentType $document_type
 */
class Document extends Entity
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
        'number' => true,
        'revision_id' => true,
        'status_id' => true,
        'decision_code_id' => true,
        'work_package_id' => true,
        'area_id' => true,
        'discipline_id' => true,
        'document_type_id' => true,
        'sequence' => true,
        'planned_date' => true,
        'submitted_date' => true,
        'due_date' => true,
        'doc_link' => true,
        'doc_dir' => true,
        'file_name' => true,
        'revision' => true,
        'status' => true,
        'decision_code' => true,
        'work_package' => true,
        'area' => true,
        'discipline' => true,
        'document_type' => true
    ];
}
