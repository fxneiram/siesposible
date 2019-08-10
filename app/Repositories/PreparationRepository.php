<?php

namespace App\Repositories;

use App\Models\Preparation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreparationRepository
 * @package App\Repositories
 * @version July 5, 2019, 12:11 pm -05
 *
 * @method Preparation findWithoutFail($id, $columns = ['*'])
 * @method Preparation find($id, $columns = ['*'])
 * @method Preparation first($columns = ['*'])
*/
class PreparationRepository extends BaseRepository
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
        return Preparation::class;
    }
}
