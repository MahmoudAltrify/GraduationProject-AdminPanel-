<?php

namespace App\Repositories;

use App\Models\FaqCategory;
use InfyOm\Generator\Common\BaseRepository;


class FaqCategoryRepository extends BaseRepository
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
        return FaqCategory::class;
    }
}
