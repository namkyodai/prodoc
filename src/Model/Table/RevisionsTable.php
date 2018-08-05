<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Revisions Model
 *
 * @property \App\Model\Table\DocumentsTable|\Cake\ORM\Association\HasMany $Documents
 *
 * @method \App\Model\Entity\Revision get($primaryKey, $options = [])
 * @method \App\Model\Entity\Revision newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Revision[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Revision|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Revision|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Revision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Revision[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Revision findOrCreate($search, callable $callback = null, $options = [])
 */
class RevisionsTable extends Table
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

        $this->setTable('revisions');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Documents', [
            'foreignKey' => 'revision_id'
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
}
