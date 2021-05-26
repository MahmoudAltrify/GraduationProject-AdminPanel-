<?php

namespace App\Repositories;

use App\Models\Field;
use InfyOm\Generator\Common\BaseRepository;


class FieldRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Field::class;
    }
}
