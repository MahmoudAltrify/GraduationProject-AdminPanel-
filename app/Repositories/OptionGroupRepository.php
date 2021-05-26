<?php

namespace App\Repositories;

use App\Models\OptionGroup;
use InfyOm\Generator\Common\BaseRepository;


class OptionGroupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OptionGroup::class;
    }
}
