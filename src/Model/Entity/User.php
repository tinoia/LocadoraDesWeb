<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id_user
 * @property string $name
 * @property string $email
 * @property string $type
 * @property int $phone
 * @property string $password
 * @property int $rents_id_rent
 * @property int $sales_id_sale
 */
class User extends Entity
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
        '*' => true,
        'id_user' => false,
        'rents_id_rent' => false,
        'sales_id_sale' => false,
    ];
}
