<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rent Entity.
 *
 * @property int $id_rent
 * @property \Cake\I18n\Time $data_retirada
 * @property \Cake\I18n\Time $data_devolucao
 * @property float $total_pagar
 * @property int $dvds_id_dvd
 * @property int $users_id_user
 */
class Rent extends Entity
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
        'id_rent' => false,
        'dvds_id_dvd' => false,
    ];
}
