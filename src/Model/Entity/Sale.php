<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity.
 *
 * @property int $id_sale
 * @property \Cake\I18n\Time $data_compra
 * @property float $total_pagar
 * @property int $dvds_id_dvd
 * @property int $users_id_user
 */
class Sale extends Entity
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
        'id_sale' => false,
        'dvds_id_dvd' => false,
    ];
}
