<?php

namespace App\Repositories;

use App\Models\DeliveryAddress;
use InfyOm\Generator\Common\BaseRepository;


class DeliveryAddressRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'address',
        'latitude',
        'longitude',
        'is_default',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DeliveryAddress::class;
    }
    public function initIsDefault($userId){
        DeliveryAddress::where("user_id",$userId)->where("is_default",true)->update(["is_default"=>false]);
    }
}
