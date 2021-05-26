<?php

namespace App\Repositories;

use App\Models\DriversPayout;
use InfyOm\Generator\Common\BaseRepository;


class DriversPayoutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'method',
        'amount',
        'paid_date',
        'note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DriversPayout::class;
    }
}
