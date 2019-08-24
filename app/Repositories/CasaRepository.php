<?php

namespace App\Repositories;

use App\Models\Casa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CasaRepository
 * @package App\Repositories
 * @version August 22, 2019, 4:36 pm -05
 *
 * @method Casa findWithoutFail($id, $columns = ['*'])
 * @method Casa find($id, $columns = ['*'])
 * @method Casa first($columns = ['*'])
*/
class CasaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_cuidador',
        'telefono_cuidador',
        'capacidad_personas',
        'gps',
        'numero_casa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Casa::class;
    }
}
