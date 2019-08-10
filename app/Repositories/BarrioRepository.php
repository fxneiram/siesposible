<?php

namespace App\Repositories;

use App\Models\Barrio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BarrioRepository
 * @package App\Repositories
 * @version August 8, 2019, 2:47 pm -05
 *
 * @method Barrio findWithoutFail($id, $columns = ['*'])
 * @method Barrio find($id, $columns = ['*'])
 * @method Barrio first($columns = ['*'])
*/
class BarrioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Barrio::class;
    }
}
