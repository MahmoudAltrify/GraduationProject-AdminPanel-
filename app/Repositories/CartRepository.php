<?php

namespace App\Repositories;

use App\Models\Cart;
use InfyOm\Generator\Common\BaseRepository;


class CartRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'user_id',
        'quantity'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cart::class;
    }
}
