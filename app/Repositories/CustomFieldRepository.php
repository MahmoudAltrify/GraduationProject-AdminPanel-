<?php

namespace App\Repositories;

use App\Models\CustomField;
use InfyOm\Generator\Common\BaseRepository;


class CustomFieldRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'disabled',
        'required',
        'in_table',
        'bootstrap_column',
        'order',
        'custom_field_model'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CustomField::class;
    }
}
