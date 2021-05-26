<?php

namespace App\Repositories;

use App\Models\Driver;
use InfyOm\Generator\Common\BaseRepository;


class DriverRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'delivery_fee',
        'total_orders',
        'earning',
        'available'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Driver::class;
    }
}
