<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Qa Model
 *
 * @method \App\Model\Entity\Qa newEmptyEntity()
 * @method \App\Model\Entity\Qa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Qa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Qa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Qa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Qa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Qa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Qa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Qa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Qa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Qa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Qa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Qa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class QaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('qa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Question')
            ->maxLength('Question', 200)
            ->requirePresence('Question', 'create')
            ->notEmptyString('Question');

        $validator
            ->scalar('Answer')
            ->maxLength('Answer', 2000)
            ->requirePresence('Answer', 'create')
            ->notEmptyString('Answer');

        return $validator;
    }
}
