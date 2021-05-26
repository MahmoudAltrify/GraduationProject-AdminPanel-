<?php

namespace App\Repositories;

use App\Models\Discountable;
use InfyOm\Generator\Common\BaseRepository;


class DiscountableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'custom_field_id',
        'customizable_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Discountable::class;
    }
}
