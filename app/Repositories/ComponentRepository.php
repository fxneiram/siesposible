<?php

namespace App\Repositories;

use App\Models\Component;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ComponentRepository
 * @package App\Repositories
 * @version July 5, 2019, 12:07 pm -05
 *
 * @method Component findWithoutFail($id, $columns = ['*'])
 * @method Component find($id, $columns = ['*'])
 * @method Component first($columns = ['*'])
*/
class ComponentRepository extends BaseRepository
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
        return Component::class;
    }
}
