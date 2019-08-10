<?php

namespace App\Repositories;

use App\Models\Lider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LiderRepository
 * @package App\Repositories
 * @version August 9, 2019, 12:39 am -05
 *
 * @method Lider findWithoutFail($id, $columns = ['*'])
 * @method Lider find($id, $columns = ['*'])
 * @method Lider first($columns = ['*'])
*/
class LiderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'documento',
        'telefono',
        'barrio',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lider::class;
    }
}
