<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asistencias Model
 *
 * @method \App\Model\Entity\Asistencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asistencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Asistencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asistencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asistencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia findOrCreate($search, callable $callback = null, $options = [])
 */
class AsistenciasTable extends Table
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

        $this->setTable('asistencias');
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
            ->scalar('nombre')
            ->maxLength('nombre', 30)
            ->requirePresence('nombre', 'create')
            ->allowEmptyString('nombre', false);

        $validator
            ->date('asistencias')
            ->requirePresence('asistencias', 'create')
            ->allowEmptyDate('asistencias', false);

        $validator
            ->scalar('curso')
            ->maxLength('curso', 30)
            ->requirePresence('curso', 'create')
            ->allowEmptyString('curso', false);

        return $validator;
    }
}
