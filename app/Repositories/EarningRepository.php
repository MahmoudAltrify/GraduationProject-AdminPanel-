<?php

namespace App\Repositories;

use App\Models\Earning;
use InfyOm\Generator\Common\BaseRepository;


class EarningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'market_id',
        'total_orders',
        'total_earning',
        'admin_earning',
        'market_earning',
        'delivery_fee',
        'tax'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Earning::class;
    }
}
