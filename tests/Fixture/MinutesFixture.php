<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MinutesFixture
 *
 */
class MinutesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'subject_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'minute' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'action' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'status_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'people_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'due_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'actual_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'traffic' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'activity_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'work_package_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'area_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'discipline_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'repeated' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'reference' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'minutes_peoples_FK' => ['type' => 'index', 'columns' => ['people_id'], 'length' => []],
            'minutes_subjects_FK' => ['type' => 'index', 'columns' => ['subject_id'], 'length' => []],
            'minutes_activities_FK' => ['type' => 'index', 'columns' => ['activity_id'], 'length' => []],
            'minutes_work_packages_FK' => ['type' => 'index', 'columns' => ['work_package_id'], 'length' => []],
            'minutes_areas_FK' => ['type' => 'index', 'columns' => ['area_id'], 'length' => []],
            'minutes_disciplines_FK' => ['type' => 'index', 'columns' => ['discipline_id'], 'length' => []],
            'minutes_statuss_FK' => ['type' => 'index', 'columns' => ['status_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'minutes_activities_FK' => ['type' => 'foreign', 'columns' => ['activity_id'], 'references' => ['activities', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'minutes_areas_FK' => ['type' => 'foreign', 'columns' => ['area_id'], 'references' => ['areas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'minutes_disciplines_FK' => ['type' => 'foreign', 'columns' => ['discipline_id'], 'references' => ['disciplines', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'minutes_peoples_FK' => ['type' => 'foreign', 'columns' => ['people_id'], 'references' => ['peoples', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'minutes_statuss_FK' => ['type' => 'foreign', 'columns' => ['status_id'], 'references' => ['statuss', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'minutes_subjects_FK' => ['type' => 'foreign', 'columns' => ['subject_id'], 'references' => ['subjects', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'minutes_work_packages_FK' => ['type' => 'foreign', 'columns' => ['work_package_id'], 'references' => ['work_packages', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'subject_id' => 1,
                'minute' => 'Lorem ipsum dolor sit amet',
                'action' => 'Lorem ipsum dolor sit amet',
                'status_id' => 1,
                'people_id' => 1,
                'due_date' => '2018-08-05',
                'actual_date' => '2018-08-05',
                'traffic' => 1,
                'created' => 1533482575,
                'modified' => 1533482575,
                'activity_id' => 1,
                'work_package_id' => 1,
                'area_id' => 1,
                'discipline_id' => 1,
                'repeated' => 'Lorem ipsum dolor sit amet',
                'reference' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
