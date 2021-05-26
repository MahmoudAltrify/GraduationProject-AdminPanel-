<?php

namespace App\Repositories;

use App\Models\OrderStatus;
use InfyOm\Generator\Common\BaseRepository;


class OrderStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrderStatus::class;
    }
}
