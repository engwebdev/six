<?php

namespace App\Query\Sort;

class TestSort extends Sort {

    protected $fillable = ["first_name", "last_name", "created_at"];

    protected $sort = [ "-created_at"];

}
