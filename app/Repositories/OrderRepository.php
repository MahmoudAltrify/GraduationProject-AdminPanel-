<?php

namespace App\Repositories;

use App\Models\Order;
use InfyOm\Generator\Common\BaseRepository;


class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'order_status_id',
        'tax',
        'hint',
        'payment_id',
        'delivery_address_id',
        'active',
        'driver_id',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Order::class;
    }
}
