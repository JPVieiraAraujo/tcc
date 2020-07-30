<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreasAfetivas Model
 *
 * @property \App\Model\Table\AvalsTable&\Cake\ORM\Association\HasMany $Avals
 *
 * @method \App\Model\Entity\AreasAfetiva get($primaryKey, $options = [])
 * @method \App\Model\Entity\AreasAfetiva newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AreasAfetiva[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AreasAfetiva|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreasAfetiva saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreasAfetiva patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AreasAfetiva[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AreasAfetiva findOrCreate($search, callable $callback = null, $options = [])
 */
class AreasAfetivasTable extends Table
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

        $this->setTable('areas_afetivas');
        $this->setDisplayField('nivel');
        $this->setPrimaryKey('id');

        $this->hasMany('Avals', [
            'foreignKey' => 'areas_afetiva_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nivel')
            ->maxLength('nivel', 100)
            ->requirePresence('nivel', 'create')
            ->notEmptyString('nivel');

        $validator
            ->scalar('texto')
            ->requirePresence('texto', 'create')
            ->notEmptyString('texto');

        return $validator;
    }
}
