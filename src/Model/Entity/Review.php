<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Review Entity
 *
 * @property int $id
 * @property string $review
 * @property string $file_name
 * @property string $note
 * @property int $decision_code_id
 * @property \Cake\I18n\FrozenDate $note_date
 * @property string $response
 * @property \Cake\I18n\FrozenDate $response_date
 * @property string $accept_response
 * @property int $final_decision_code
 * @property string $remarks
 *
 * @property \App\Model\Entity\DecisionCode $decision_code
 */
class Review extends Entity
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
        'review' => true,
        'file_name' => true,
        'note' => true,
        'decision_code_id' => true,
        'note_date' => true,
        'response' => true,
        'response_date' => true,
        'accept_response' => true,
        'final_decision_code' => true,
        'remarks' => true,
        'decision_code' => true
    ];
}
