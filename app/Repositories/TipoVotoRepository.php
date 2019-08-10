<?php

namespace App\Repositories;

use App\Models\TipoVoto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoVotoRepository
 * @package App\Repositories
 * @version August 8, 2019, 3:42 pm -05
 *
 * @method TipoVoto findWithoutFail($id, $columns = ['*'])
 * @method TipoVoto find($id, $columns = ['*'])
 * @method TipoVoto first($columns = ['*'])
*/
class TipoVotoRepository extends BaseRepository
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
        return TipoVoto::class;
    }
}
