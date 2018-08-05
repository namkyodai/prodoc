<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documents Model
 *
 * @property \App\Model\Table\RevisionsTable|\Cake\ORM\Association\BelongsTo $Revisions
 * @property \App\Model\Table\StatussTable|\Cake\ORM\Association\BelongsTo $Statuss
 * @property \App\Model\Table\DecisionCodesTable|\Cake\ORM\Association\BelongsTo $DecisionCodes
 * @property \App\Model\Table\WorkPackagesTable|\Cake\ORM\Association\BelongsTo $WorkPackages
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\BelongsTo $Areas
 * @property \App\Model\Table\DisciplinesTable|\Cake\ORM\Association\BelongsTo $Disciplines
 * @property \App\Model\Table\DocumentTypesTable|\Cake\ORM\Association\BelongsTo $DocumentTypes
 *
 * @method \App\Model\Entity\Document get($primaryKey, $options = [])
 * @method \App\Model\Entity\Document newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Document[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Document|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Document|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Document patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Document[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Document findOrCreate($search, callable $callback = null, $options = [])
 */
class DocumentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('documents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Revisions', [
            'foreignKey' => 'revision_id'
        ]);
        $this->belongsTo('Statuss', [
            'foreignKey' => 'status_id'
        ]);
        $this->belongsTo('DecisionCodes', [
            'foreignKey' => 'decision_code_id'
        ]);
        $this->belongsTo('WorkPackages', [
            'foreignKey' => 'work_package_id'
        ]);
        $this->belongsTo('Areas', [
            'foreignKey' => 'area_id'
        ]);
        $this->belongsTo('Disciplines', [
            'foreignKey' => 'discipline_id'
        ]);
        $this->belongsTo('DocumentTypes', [
            'foreignKey' => 'document_type_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('number')
            ->maxLength('number', 100)
            ->allowEmpty('number');

        $validator
            ->scalar('sequence')
            ->maxLength('sequence', 100)
            ->allowEmpty('sequence');

        $validator
            ->date('planned_date')
            ->allowEmpty('planned_date');

        $validator
            ->date('submitted_date')
            ->allowEmpty('submitted_date');

        $validator
            ->date('due_date')
            ->allowEmpty('due_date');

        $validator
            ->scalar('doc_link')
            ->maxLength('doc_link', 100)
            ->allowEmpty('doc_link');

        $validator
            ->scalar('doc_dir')
            ->maxLength('doc_dir', 100)
            ->allowEmpty('doc_dir');

        $validator
            ->scalar('file_name')
            ->maxLength('file_name', 100)
            ->allowEmpty('file_name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['revision_id'], 'Revisions'));
        $rules->add($rules->existsIn(['status_id'], 'Statuss'));
        $rules->add($rules->existsIn(['decision_code_id'], 'DecisionCodes'));
        $rules->add($rules->existsIn(['work_package_id'], 'WorkPackages'));
        $rules->add($rules->existsIn(['area_id'], 'Areas'));
        $rules->add($rules->existsIn(['discipline_id'], 'Disciplines'));
        $rules->add($rules->existsIn(['document_type_id'], 'DocumentTypes'));

        return $rules;
    }
}
