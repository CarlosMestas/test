<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Studentt Model
 *
 * @method \App\Model\Entity\Studentt get($primaryKey, $options = [])
 * @method \App\Model\Entity\Studentt newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Studentt[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Studentt|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Studentt saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Studentt patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Studentt[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Studentt findOrCreate($search, callable $callback = null, $options = [])
 */
class StudenttTable extends Table
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

        $this->setTable('studentt');
        $this->setDisplayField('name');
        $this->setPrimaryKey('name');
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
            ->scalar('name')
            ->maxLength('name', 30)
            ->allowEmptyString('name', 'create');

        $validator
            ->integer('assistance')
            ->requirePresence('assistance', 'create')
            ->allowEmptyString('assistance', false);

        $validator
            ->scalar('courses')
            ->maxLength('courses', 30)
            ->requirePresence('courses', 'create')
            ->allowEmptyString('courses', false);

        $validator
            ->scalar('chores')
            ->maxLength('chores', 100)
            ->requirePresence('chores', 'create')
            ->allowEmptyString('chores', false);

        return $validator;
    }
}
