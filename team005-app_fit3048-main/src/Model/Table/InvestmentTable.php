<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Investment Model
 *
 * @method \App\Model\Entity\Investment newEmptyEntity()
 * @method \App\Model\Entity\Investment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Investment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Investment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Investment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Investment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Investment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Investment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Investment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Investment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Investment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Investment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Investment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InvestmentTable extends Table
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

        $this->setTable('investment');
        $this->setDisplayField('investment_id');
        $this->setPrimaryKey('investment_id');
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
            ->integer('investment_id')
            ->allowEmptyString('investment_id', null, 'create');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 255)
            ->requirePresence('company_name', 'create')
            ->notEmptyString('company_name');

        $validator
            ->scalar('investment_name')
            ->maxLength('investment_name', 255)
            ->requirePresence('investment_name', 'create')
            ->notEmptyString('investment_name');

        $validator
            ->integer('admin_fee')
            ->requirePresence('admin_fee', 'create')
            ->notEmptyString('admin_fee');

        $validator
            ->scalar('investment_type')
            ->maxLength('investment_type', 255)
            ->requirePresence('investment_type', 'create')
            ->notEmptyString('investment_type');

        return $validator;
    }
}
