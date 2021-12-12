<?php


namespace App\Traits;


trait QueryStringParam {

    public function scopeCustomFilter($query, $filter){
        return $filter->apply($query);
    }


    public function scopeCustomOrder($query, $sort){
        return $sort->apply($query);
    }

    public function scopeCustomPagination($query, $pagination){
        return $pagination->apply($query);
    }
}
