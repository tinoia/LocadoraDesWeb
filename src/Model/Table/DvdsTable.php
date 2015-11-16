<?php
namespace App\Model\Table;

use App\Model\Entity\Dvd;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dvds Model
 *
 */
class DvdsTable extends Table
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

        $this->table('dvds');
        $this->displayField('id_dvd');
        $this->primaryKey('id_dvd');

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
            ->add('id_dvd', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_dvd', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('genero', 'create')
            ->notEmpty('genero');

        $validator
            ->add('ano', 'valid', ['rule' => 'date'])
            ->requirePresence('ano', 'create')
            ->notEmpty('ano');

        $validator
            ->add('duracao', 'valid', ['rule' => 'numeric'])
            ->requirePresence('duracao', 'create')
            ->notEmpty('duracao');

        $validator
            ->allowEmpty('imagem');

        $validator
            ->add('disponivel', 'valid', ['rule' => 'boolean'])
            ->requirePresence('disponivel', 'create')
            ->notEmpty('disponivel');

        $validator
            ->add('num_copias', 'valid', ['rule' => 'numeric'])
            ->requirePresence('num_copias', 'create')
            ->notEmpty('num_copias');

        $validator
            ->add('preco', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preco', 'create')
            ->notEmpty('preco');

        return $validator;
    }
}
