<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $name
 * @property string $class
 * @property \Cake\I18n\FrozenTime $time_begin
 * @property \Cake\I18n\FrozenTime $time_end
 */
class Course extends Entity
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
        'name' => true,
        'class' => true,
        'time_begin' => true,
        'time_end' => true
    ];
}
