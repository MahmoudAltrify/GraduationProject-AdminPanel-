<?php

namespace App\Repositories;

use App\Models\MarketsPayout;
use InfyOm\Generator\Common\BaseRepository;


class MarketsPayoutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'market_id',
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
        return MarketsPayout::class;
    }
}
