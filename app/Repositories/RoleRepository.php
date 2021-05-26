<?php

namespace App\Repositories;

use Spatie\Permission\Models\Role;
use InfyOm\Generator\Common\BaseRepository;


class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'guard_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Role::class;
    }
}
