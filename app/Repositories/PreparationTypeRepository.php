<?php

namespace App\Repositories;

use App\Models\PreparationType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreparationTypeRepository
 * @package App\Repositories
 * @version July 9, 2019, 3:54 pm -05
 *
 * @method PreparationType findWithoutFail($id, $columns = ['*'])
 * @method PreparationType find($id, $columns = ['*'])
 * @method PreparationType first($columns = ['*'])
*/
class PreparationTypeRepository extends BaseRepository
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
        return PreparationType::class;
    }
}
