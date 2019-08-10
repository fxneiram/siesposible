<?php

namespace App\Repositories;

use App\Models\Unity;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UnityRepository
 * @package App\Repositories
 * @version August 1, 2019, 4:44 pm -05
 *
 * @method Unity findWithoutFail($id, $columns = ['*'])
 * @method Unity find($id, $columns = ['*'])
 * @method Unity first($columns = ['*'])
*/
class UnityRepository extends BaseRepository
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
        return Unity::class;
    }
}
