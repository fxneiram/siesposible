<?php

namespace App\Repositories;

use App\Models\ProductPriceByProvider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductPriceByProviderRepository
 * @package App\Repositories
 * @version July 11, 2019, 12:00 pm -05
 *
 * @method ProductPriceByProvider findWithoutFail($id, $columns = ['*'])
 * @method ProductPriceByProvider find($id, $columns = ['*'])
 * @method ProductPriceByProvider first($columns = ['*'])
*/
class ProductPriceByProviderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_product',
        'id_provider',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductPriceByProvider::class;
    }
}
