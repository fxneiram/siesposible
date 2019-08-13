<?php

namespace App\Repositories;

use App\Models\Apoyo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ApoyoRepository
 * @package App\Repositories
 * @version August 12, 2019, 7:28 pm -05
 *
 * @method Apoyo findWithoutFail($id, $columns = ['*'])
 * @method Apoyo find($id, $columns = ['*'])
 * @method Apoyo first($columns = ['*'])
*/
class ApoyoRepository extends BaseRepository
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
        return Apoyo::class;
    }
}
