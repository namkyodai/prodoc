<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reviews Model
 *
 * @property \App\Model\Table\DecisionCodesTable|\Cake\ORM\Association\BelongsTo $DecisionCodes
 *
 * @method \App\Model\Entity\Review get($primaryKey, $options = [])
 * @method \App\Model\Entity\Review newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Review[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Review|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Review|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Review patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Review[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Review findOrCreate($search, callable $callback = null, $options = [])
 */
class ReviewsTable extends Table
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

        $this->setTable('reviews');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('DecisionCodes', [
            'foreignKey' => 'decision_code_id'
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
            ->scalar('review')
            ->maxLength('review', 100)
            ->requirePresence('review', 'create')
            ->notEmpty('review');

        $validator
            ->scalar('file_name')
            ->maxLength('file_name', 100)
            ->allowEmpty('file_name');

        $validator
            ->scalar('note')
            ->maxLength('note', 100)
            ->requirePresence('note', 'create')
            ->notEmpty('note');

        $validator
            ->date('note_date')
            ->requirePresence('note_date', 'create')
            ->notEmpty('note_date');

        $validator
            ->scalar('response')
            ->maxLength('response', 100)
            ->allowEmpty('response');

        $validator
            ->date('response_date')
            ->allowEmpty('response_date');

        $validator
            ->scalar('accept_response')
            ->maxLength('accept_response', 100)
            ->allowEmpty('accept_response');

        $validator
            ->integer('final_decision_code')
            ->allowEmpty('final_decision_code');

        $validator
            ->scalar('remarks')
            ->maxLength('remarks', 100)
            ->allowEmpty('remarks');

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
        $rules->add($rules->existsIn(['decision_code_id'], 'DecisionCodes'));

        return $rules;
    }
}
