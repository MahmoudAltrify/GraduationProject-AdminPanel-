<?php

namespace App\Repositories;

use App\Models\Faq;
use InfyOm\Generator\Common\BaseRepository;


class FaqRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'answer',
        'faq_category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Faq::class;
    }
}
