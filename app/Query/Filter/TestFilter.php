<?php

namespace App\Query\Filter;

class TestFilter extends Filter{

    protected $filters = ['firstName'];

    public function firstName($first_name){
        $this->builder->where('first_name', $first_name);
    }
}
