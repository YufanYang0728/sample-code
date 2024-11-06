<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Insurances Model
 *
 * @property \App\Model\Table\PackagesTable&\Cake\ORM\Association\BelongsToMany $Packages
 *
 * @method \App\Model\Entity\Insurance newEmptyEntity()
 * @method \App\Model\Entity\Insurance newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Insurance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Insurance get($primaryKey, $options = [])
 * @method \App\Model\Entity\Insurance findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Insurance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Insurance[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Insurance|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Insurance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Insurance[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Insurance[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Insurance[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Insurance[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InsurancesTable extends Table
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

        $this->setTable('insurances');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Packages', [
            'foreignKey' => 'insurance_id',
            'targetForeignKey' => 'package_id',
            'joinTable' => 'insurances_packages',
        ]);
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
            ->uuid('name')
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
