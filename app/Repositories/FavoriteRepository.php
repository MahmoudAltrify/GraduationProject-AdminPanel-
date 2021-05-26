<?php

namespace App\Repositories;

use App\Models\Favorite;
use InfyOm\Generator\Common\BaseRepository;


class FavoriteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Favorite::class;
    }
}
