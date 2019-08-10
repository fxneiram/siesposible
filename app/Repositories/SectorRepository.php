<?php

namespace App\Repositories;

use App\Models\Sector;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SectorRepository
 * @package App\Repositories
 * @version August 8, 2019, 4:32 pm -05
 *
 * @method Sector findWithoutFail($id, $columns = ['*'])
 * @method Sector find($id, $columns = ['*'])
 * @method Sector first($columns = ['*'])
*/
class SectorRepository extends BaseRepository
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
        return Sector::class;
    }
}
