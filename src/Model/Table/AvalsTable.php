<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Avals Model
 *
 * @property \App\Model\Table\AlunosTable&\Cake\ORM\Association\BelongsTo $Alunos
 * @property \App\Model\Table\AreasMotorasTable&\Cake\ORM\Association\BelongsTo $AreasMotoras
 * @property \App\Model\Table\AreasAfetivasTable&\Cake\ORM\Association\BelongsTo $AreasAfetivas
 * @property \App\Model\Table\AreasCognitivasTable&\Cake\ORM\Association\BelongsTo $AreasCognitivas
 * @property \App\Model\Table\AreasSocialsTable&\Cake\ORM\Association\BelongsTo $AreasSocials
 *
 * @method \App\Model\Entity\Aval get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aval newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aval[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aval|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aval saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aval patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aval[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aval findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AvalsTable extends Table
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

        $this->setTable('avals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Alunos', [
            'foreignKey' => 'aluno_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('AreasMotoras', [
            'foreignKey' => 'areas_motora_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('AreasAfetivas', [
            'foreignKey' => 'areas_afetiva_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('AreasCognitivas', [
            'foreignKey' => 'areas_cognitiva_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('AreasSocials', [
            'foreignKey' => 'areas_social_id',
            'joinType' => 'INNER',
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
            ->integer('motora1')
            ->requirePresence('motora1', 'create')
            ->notEmptyString('motora1');

        $validator
            ->integer('motora2')
            ->requirePresence('motora2', 'create')
            ->notEmptyString('motora2');

        $validator
            ->integer('motora3')
            ->requirePresence('motora3', 'create')
            ->notEmptyString('motora3');

        $validator
            ->integer('afetiva1')
            ->requirePresence('afetiva1', 'create')
            ->notEmptyString('afetiva1');

        $validator
            ->integer('afetiva2')
            ->requirePresence('afetiva2', 'create')
            ->notEmptyString('afetiva2');

        $validator
            ->integer('afetiva3')
            ->requirePresence('afetiva3', 'create')
            ->notEmptyString('afetiva3');

        $validator
            ->integer('cognitiva1')
            ->requirePresence('cognitiva1', 'create')
            ->notEmptyString('cognitiva1');

        $validator
            ->integer('cognitiva2')
            ->requirePresence('cognitiva2', 'create')
            ->notEmptyString('cognitiva2');

        $validator
            ->integer('cognitiva3')
            ->requirePresence('cognitiva3', 'create')
            ->notEmptyString('cognitiva3');

        $validator
            ->integer('social1')
            ->requirePresence('social1', 'create')
            ->notEmptyString('social1');

        $validator
            ->integer('social2')
            ->requirePresence('social2', 'create')
            ->notEmptyString('social2');

        $validator
            ->integer('social3')
            ->requirePresence('social3', 'create')
            ->notEmptyString('social3');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['aluno_id'], 'Alunos'));
        $rules->add($rules->existsIn(['areas_motora_id'], 'AreasMotoras'));
        $rules->add($rules->existsIn(['areas_afetiva_id'], 'AreasAfetivas'));
        $rules->add($rules->existsIn(['areas_cognitiva_id'], 'AreasCognitivas'));
        $rules->add($rules->existsIn(['areas_social_id'], 'AreasSocials'));

        return $rules;
    }
}
