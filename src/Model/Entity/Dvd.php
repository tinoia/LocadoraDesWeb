<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dvd Entity.
 *
 * @property int $id_dvd
 * @property string $nome
 * @property string $genero
 * @property \Cake\I18n\Time $ano
 * @property int $duracao
 * @property string|resource $imagem
 * @property bool $disponivel
 * @property int $num_copias
 * @property float $preco
 */
class Dvd extends Entity
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
        'id_dvd' => false,
    ];
}
