<?php

namespace App\Repositories;

use App\Models\Coupon;
use InfyOm\Generator\Common\BaseRepository;


class CouponRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'discount',
        'discount_type',
        'description',
        'product_id',
        'market_id',
        'category_id',
        'expires_at',
        'enabled'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Coupon::class;
    }
}
