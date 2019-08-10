<?php

namespace App\Repositories;

use App\Models\PreparationProduct;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreparationProductRepository
 * @package App\Repositories
 * @version July 8, 2019, 4:44 pm -05
 *
 * @method PreparationProduct findWithoutFail($id, $columns = ['*'])
 * @method PreparationProduct find($id, $columns = ['*'])
 * @method PreparationProduct first($columns = ['*'])
*/
class PreparationProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_product',
        'id_preparation',
        'ge_1',
        'ge_2',
        'ge_3'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PreparationProduct::class;
    }
}
