<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed parent_id
 * @property mixed name
 * @property mixed category_id
 * @property mixed description
 * @property mixed shop_photo_url
 * @property mixed type_location
 * @property mixed lat_location
 * @property mixed long_location
 * @property mixed shop_country
 * @property mixed shop_province
 * @property mixed shop_city
 * @property mixed shop_local
 * @property mixed shop_Street
 * @property mixed shop_alley
 * @property mixed shop_number
 * @property mixed shop_postal_code
 * @property mixed shop_main_phone_number
 * @property mixed shop_parent_able_status
 * @property mixed shop_parent_able_request
 *
 *
 *
 * @property mixed userOfRolesShopsUsers
 * @property mixed roleOfRolesShopsUsers
 *
 * @property mixed data
 * @method relationLoaded(string $string)
 */
class ShopResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
//        dd($this);
        $data = [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'shop_photo_url' => $this->shop_photo_url,
            'type_location' => $this->type_location,
            'lat_location' => $this->lat_location,
            'long_location' => $this->long_location,
            'shop_country' => $this->shop_country,
            'shop_province' => $this->shop_province,
            'shop_city' => $this->shop_city,
            'shop_local' => $this->shop_local,
            'shop_Street' => $this->shop_Street,
            'shop_alley' => $this->shop_alley,
            'shop_number' => $this->shop_number,
            'shop_postal_code' => $this->shop_postal_code,
            'shop_main_phone_number' => $this->shop_main_phone_number,
            'shop_parent_able_status' => $this->shop_parent_able_status,
            'shop_parent_able_request' => $this->shop_parent_able_request,
        ];

        if ($this->relationLoaded('userOfRolesShopsUsers')) {
//            $userOfRolesShopsUsers = new UserResource();
//            dd($this->userOfRolesShopsUsers[0],$this->userOfRolesShopsUsers[1]);
            $userOfRolesShopsUsers = new UserCollection($this->userOfRolesShopsUsers);
//            $data['userOfRolesShopsUsers'] = $userOfRolesShopsUsers;
            $data['relation']['users'] = $userOfRolesShopsUsers;

        }

        if ($this->relationLoaded('roleOfRolesShopsUsers')) {
//            $userOfRolesShopsUsers = new UserResource();
            $roleOfRolesShopsUsers = new RoleCollection($this->roleOfRolesShopsUsers);
//            dd($roleOfRolesShopsUsers);
//            $data['roleOfRolesShopsUsers'] = $roleOfRolesShopsUsers;
            $data['relation']['roles'] = $roleOfRolesShopsUsers;
        }

        return $data;
//        return parent::toArray($request);
    }
}
