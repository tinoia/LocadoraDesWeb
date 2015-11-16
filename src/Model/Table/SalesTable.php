<?php
namespace App\Model\Table;

use App\Model\Entity\Sale;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sales Model
 *
 */
class SalesTable extends Table
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

        $this->table('sales');
        $this->displayField('id_sale');
        $this->primaryKey(['id_sale', 'dvds_id_dvd']);

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
            ->add('id_sale', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_sale', 'create');

        $validator
            ->add('data_compra', 'valid', ['rule' => 'date'])
            ->requirePresence('data_compra', 'create')
            ->notEmpty('data_compra');

        $validator
            ->add('total_pagar', 'valid', ['rule' => 'numeric'])
            ->requirePresence('total_pagar', 'create')
            ->notEmpty('total_pagar');

        $validator
            ->add('dvds_id_dvd', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('dvds_id_dvd', 'create');

        return $validator;
    }
}
