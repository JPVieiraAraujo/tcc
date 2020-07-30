<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreasCognitivas Model
 *
 * @property \App\Model\Table\AvalsTable&\Cake\ORM\Association\HasMany $Avals
 *
 * @method \App\Model\Entity\AreasCognitiva get($primaryKey, $options = [])
 * @method \App\Model\Entity\AreasCognitiva newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AreasCognitiva[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AreasCognitiva|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreasCognitiva saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreasCognitiva patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AreasCognitiva[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AreasCognitiva findOrCreate($search, callable $callback = null, $options = [])
 */
class AreasCognitivasTable extends Table
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

        $this->setTable('areas_cognitivas');
        $this->setDisplayField('nivel');
        $this->setPrimaryKey('id');

        $this->hasMany('Avals', [
            'foreignKey' => 'areas_cognitiva_id',
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
