<?php

namespace App\Query\Order;

class TestOrder extends Order {

    protected $fillable = ["first_name", "last_name", "created_at"];

    protected $sort = [ "-created_at"];

}
