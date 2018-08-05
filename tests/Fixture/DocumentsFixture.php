<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsFixture
 *
 */
class DocumentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'number' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'revision_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'decision_code_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'work_package_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'area_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'discipline_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'document_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sequence' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'planned_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'submitted_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'due_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'doc_link' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_dir' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'file_name' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'documents_statuss_FK' => ['type' => 'index', 'columns' => ['status_id'], 'length' => []],
            'documents_work_packages_FK' => ['type' => 'index', 'columns' => ['work_package_id'], 'length' => []],
            'documents_disciplines_FK' => ['type' => 'index', 'columns' => ['discipline_id'], 'length' => []],
            'documents_areas_FK' => ['type' => 'index', 'columns' => ['area_id'], 'length' => []],
            'documents_document_types_FK' => ['type' => 'index', 'columns' => ['document_type_id'], 'length' => []],
            'documents_revisions_FK' => ['type' => 'index', 'columns' => ['revision_id'], 'length' => []],
            'documents_decision_codes_FK' => ['type' => 'index', 'columns' => ['decision_code_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'documents_areas_FK' => ['type' => 'foreign', 'columns' => ['area_id'], 'references' => ['areas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'documents_decision_codes_FK' => ['type' => 'foreign', 'columns' => ['decision_code_id'], 'references' => ['decision_codes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'documents_disciplines_FK' => ['type' => 'foreign', 'columns' => ['discipline_id'], 'references' => ['disciplines', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'documents_document_types_FK' => ['type' => 'foreign', 'columns' => ['document_type_id'], 'references' => ['document_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'documents_revisions_FK' => ['type' => 'foreign', 'columns' => ['revision_id'], 'references' => ['revisions', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'documents_statuss_FK' => ['type' => 'foreign', 'columns' => ['status_id'], 'references' => ['statuss', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'documents_work_packages_FK' => ['type' => 'foreign', 'columns' => ['work_package_id'], 'references' => ['work_packages', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'number' => 'Lorem ipsum dolor sit amet',
                'revision_id' => 1,
                'status_id' => 1,
                'decision_code_id' => 1,
                'work_package_id' => 1,
                'area_id' => 1,
                'discipline_id' => 1,
                'document_type_id' => 1,
                'sequence' => 'Lorem ipsum dolor sit amet',
                'planned_date' => '2018-08-05',
                'submitted_date' => '2018-08-05',
                'due_date' => '2018-08-05',
                'doc_link' => 'Lorem ipsum dolor sit amet',
                'doc_dir' => 'Lorem ipsum dolor sit amet',
                'file_name' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
