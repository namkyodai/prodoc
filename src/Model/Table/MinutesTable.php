<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Minutes Model
 *
 * @property \App\Model\Table\SubjectsTable|\Cake\ORM\Association\BelongsTo $Subjects
 * @property \App\Model\Table\StatussTable|\Cake\ORM\Association\BelongsTo $Statuss
 * @property \App\Model\Table\PeoplesTable|\Cake\ORM\Association\BelongsTo $Peoples
 * @property \App\Model\Table\ActivitiesTable|\Cake\ORM\Association\BelongsTo $Activities
 * @property \App\Model\Table\WorkPackagesTable|\Cake\ORM\Association\BelongsTo $WorkPackages
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\BelongsTo $Areas
 * @property \App\Model\Table\DisciplinesTable|\Cake\ORM\Association\BelongsTo $Disciplines
 *
 * @method \App\Model\Entity\Minute get($primaryKey, $options = [])
 * @method \App\Model\Entity\Minute newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Minute[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Minute|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Minute|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Minute patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Minute[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Minute findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MinutesTable extends Table
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

        $this->setTable('minutes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Subjects', [
            'foreignKey' => 'subject_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuss', [
            'foreignKey' => 'status_id'
        ]);
        $this->belongsTo('Peoples', [
            'foreignKey' => 'people_id'
        ]);
        $this->belongsTo('Activities', [
            'foreignKey' => 'activity_id'
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
            ->scalar('minute')
            ->maxLength('minute', 100)
            ->requirePresence('minute', 'create')
            ->notEmpty('minute');

        $validator
            ->scalar('action')
            ->maxLength('action', 100)
            ->allowEmpty('action');

        $validator
            ->date('due_date')
            ->allowEmpty('due_date');

        $validator
            ->date('actual_date')
            ->allowEmpty('actual_date');

        $validator
            ->integer('traffic')
            ->allowEmpty('traffic');

        $validator
            ->scalar('repeated')
            ->maxLength('repeated', 100)
            ->allowEmpty('repeated');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 100)
            ->allowEmpty('reference');

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
        $rules->add($rules->existsIn(['subject_id'], 'Subjects'));
        $rules->add($rules->existsIn(['status_id'], 'Statuss'));
        $rules->add($rules->existsIn(['people_id'], 'Peoples'));
        $rules->add($rules->existsIn(['activity_id'], 'Activities'));
        $rules->add($rules->existsIn(['work_package_id'], 'WorkPackages'));
        $rules->add($rules->existsIn(['area_id'], 'Areas'));
        $rules->add($rules->existsIn(['discipline_id'], 'Disciplines'));

        return $rules;
    }
}
