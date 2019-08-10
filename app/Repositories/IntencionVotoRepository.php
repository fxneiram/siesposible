<?php

namespace App\Repositories;

use App\Models\IntencionVoto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IntencionVotoRepository
 * @package App\Repositories
 * @version August 8, 2019, 4:10 pm -05
 *
 * @method IntencionVoto findWithoutFail($id, $columns = ['*'])
 * @method IntencionVoto find($id, $columns = ['*'])
 * @method IntencionVoto first($columns = ['*'])
*/
class IntencionVotoRepository extends BaseRepository
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
        return IntencionVoto::class;
    }
}
