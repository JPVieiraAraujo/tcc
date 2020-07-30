<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AreasMotora Entity
 *
 * @property int $id
 * @property string $nivel
 * @property string $texto
 *
 * @property \App\Model\Entity\Aval[] $avals
 */
class AreasMotora extends Entity
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
        'nivel' => true,
        'texto' => true,
        'avals' => true,
    ];
}
