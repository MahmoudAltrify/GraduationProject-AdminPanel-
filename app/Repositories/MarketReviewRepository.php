<?php

namespace App\Repositories;

use App\Models\MarketReview;
use InfyOm\Generator\Common\BaseRepository;


class MarketReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'review',
        'rate',
        'user_id',
        'market_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MarketReview::class;
    }
}
