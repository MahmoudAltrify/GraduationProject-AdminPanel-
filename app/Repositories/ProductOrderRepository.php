<?php

namespace App\Repositories;

use App\Models\ProductOrder;
use InfyOm\Generator\Common\BaseRepository;


class ProductOrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'price',
        'quantity',
        'product_id',
        'order_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductOrder::class;
    }
}
