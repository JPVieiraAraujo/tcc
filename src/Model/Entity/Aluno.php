<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\FrozenTime $dt_nascimento
 * @property string $genero
 * @property string $nome_resp
 * @property int $turma_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Turma $turma
 */
class Aluno extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'dt_nascimento' => true,
        'genero' => true,
        'nome_resp' => true,
        'turma_id' => true,
        'created' => true,
        'modified' => true,
        'turma' => true,
    ];
}
