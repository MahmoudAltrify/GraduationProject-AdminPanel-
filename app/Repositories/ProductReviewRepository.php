<?php

namespace App\Repositories;

use App\Models\ProductReview;
use InfyOm\Generator\Common\BaseRepository;


class ProductReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'review',
        'rate',
        'user_id',
        'product_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductReview::class;
    }
}
