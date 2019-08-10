<?php

namespace App\Repositories;

use App\Models\Votante;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VotanteRepository
 * @package App\Repositories
 * @version August 8, 2019, 3:38 pm -05
 *
 * @method Votante findWithoutFail($id, $columns = ['*'])
 * @method Votante find($id, $columns = ['*'])
 * @method Votante first($columns = ['*'])
*/
class VotanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'cedula',
        'celular',
        'barrio_id',
        'nacimiento',
        'gps',
        'sector',
        'tipo_voto',
        'incentivado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Votante::class;
    }
}
