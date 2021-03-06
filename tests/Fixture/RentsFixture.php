<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RentsFixture
 *
 */
class RentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_rent' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'data_retirada' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'data_devolucao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'total_pagar' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'dvds_id_dvd' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'users_id_user' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_rents_dvds1_idx' => ['type' => 'index', 'columns' => ['dvds_id_dvd'], 'length' => []],
            'fk_rents_users1_idx' => ['type' => 'index', 'columns' => ['users_id_user'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_rent', 'dvds_id_dvd'], 'length' => []],
            'fk_rents_dvds1' => ['type' => 'foreign', 'columns' => ['dvds_id_dvd'], 'references' => ['dvds', 'id_dvd'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_rents_users1' => ['type' => 'foreign', 'columns' => ['users_id_user'], 'references' => ['users', 'id_user'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_rent' => 1,
            'data_retirada' => '2015-11-17 00:58:52',
            'data_devolucao' => '2015-11-17 00:58:52',
            'total_pagar' => 1,
            'dvds_id_dvd' => 1,
            'users_id_user' => 1
        ],
    ];
}
