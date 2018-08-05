<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Peoples Model
 *
 * @property \App\Model\Table\StakeholdersTable|\Cake\ORM\Association\BelongsTo $Stakeholders
 *
 * @method \App\Model\Entity\People get($primaryKey, $options = [])
 * @method \App\Model\Entity\People newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\People[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\People|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\People|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\People patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\People[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\People findOrCreate($search, callable $callback = null, $options = [])
 */
class PeoplesTable extends Table
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

        $this->setTable('peoples');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Stakeholders', [
            'foreignKey' => 'stakeholder_id'
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
            ->allowEmpty('name');

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
        $rules->add($rules->existsIn(['stakeholder_id'], 'Stakeholders'));

        return $rules;
    }
}
