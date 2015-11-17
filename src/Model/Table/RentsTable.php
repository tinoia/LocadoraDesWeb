<?php
namespace App\Model\Table;

use App\Model\Entity\Rent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rents Model
 *
 */
class RentsTable extends Table
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

        $this->table('rents');
        $this->displayField('id_rent');
        $this->primaryKey(['id_rent', 'dvds_id_dvd']);

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
            ->add('id_rent', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_rent', 'create');

        $validator
            ->add('data_retirada', 'valid', ['rule' => 'datetime'])
            ->requirePresence('data_retirada', 'create')
            ->notEmpty('data_retirada');

        $validator
            ->add('data_devolucao', 'valid', ['rule' => 'datetime'])
            ->requirePresence('data_devolucao', 'create')
            ->notEmpty('data_devolucao');

        $validator
            ->add('total_pagar', 'valid', ['rule' => 'numeric'])
            ->requirePresence('total_pagar', 'create')
            ->notEmpty('total_pagar');

        $validator
            ->add('dvds_id_dvd', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('dvds_id_dvd', 'create');

        $validator
            ->add('users_id_user', 'valid', ['rule' => 'numeric'])
            ->requirePresence('users_id_user', 'create')
            ->notEmpty('users_id_user');

        return $validator;
    }
}
