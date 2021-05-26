<?php

namespace App\Repositories;

use App\Models\Option;
use InfyOm\Generator\Common\BaseRepository;


class OptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'price',
        'product_id',
        'option_group_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Option::class;
    }
}
