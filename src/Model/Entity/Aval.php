<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aval Entity
 *
 * @property int $id
 * @property int $aluno_id
 * @property int $areas_motora_id
 * @property int $areas_afetiva_id
 * @property int $areas_cognitiva_id
 * @property int $areas_social_id
 * @property int $motora1
 * @property int $motora2
 * @property int $motora3
 * @property int $afetiva1
 * @property int $afetiva2
 * @property int $afetiva3
 * @property int $cognitiva1
 * @property int $cognitiva2
 * @property int $cognitiva3
 * @property int $social1
 * @property int $social2
 * @property int $social3
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Aluno $aluno
 * @property \App\Model\Entity\AreasMotora $areas_motora
 * @property \App\Model\Entity\AreasAfetiva $areas_afetiva
 * @property \App\Model\Entity\AreasCognitiva $areas_cognitiva
 * @property \App\Model\Entity\AreasSocial $areas_social
 */
class Aval extends Entity
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
        'aluno_id' => true,
        'areas_motora_id' => true,
        'areas_afetiva_id' => true,
        'areas_cognitiva_id' => true,
        'areas_social_id' => true,
        'motora1' => true,
        'motora2' => true,
        'motora3' => true,
        'afetiva1' => true,
        'afetiva2' => true,
        'afetiva3' => true,
        'cognitiva1' => true,
        'cognitiva2' => true,
        'cognitiva3' => true,
        'social1' => true,
        'social2' => true,
        'social3' => true,
        'created' => true,
        'modified' => true,
        'aluno' => true,
        'areas_motora' => true,
        'areas_afetiva' => true,
        'areas_cognitiva' => true,
        'areas_social' => true,
    ];
}
