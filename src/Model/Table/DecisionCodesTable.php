<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DecisionCodes Model
 *
 * @method \App\Model\Entity\DecisionCode get($primaryKey, $options = [])
 * @method \App\Model\Entity\DecisionCode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DecisionCode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DecisionCode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DecisionCode|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DecisionCode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DecisionCode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DecisionCode findOrCreate($search, callable $callback = null, $options = [])
 */
class DecisionCodesTable extends Table
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

        $this->setTable('decision_codes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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

        $validator
            ->scalar('description')
            ->maxLength('description', 100)
            ->allowEmpty('description');

        return $validator;
    }
}
