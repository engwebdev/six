<?php


namespace App\Query\Sort;


use Illuminate\Http\Request;

abstract class Sort {

    protected $request;

    protected $builder;

    protected $sort = ["-created_at"];

    protected $sortAndOrder = [];

    protected $fillable = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($builder)
    {
        $this->builder = $builder;
        if (array_key_exists( "sort", $this->request->only( ["sort"] ) ))
        {
            $this->sort = explode( ",", $this->request->only( ["sort"] )["sort"] );
        };
        $this->makeSortWithOrder();
        $this->sort();
    }

    public function makeSortWithOrder()
    {
        foreach ($this->sort as $key => $value)
        {
            $sort = ltrim( $value, "-" );
            if(in_array($sort, $this->fillable)){
                $order = $value[0] == "-" ? "desc" : "asc";
                $this->sortAndOrder[$sort] = $order;
            }

        }
    }

    public function sort()
    {
        foreach ($this->sortAndOrder as $key => $value)
        {
            $this->builder->orderBy( $key, $value );
        }
    }
}
