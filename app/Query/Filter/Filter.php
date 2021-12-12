<?php

namespace App\Query\Filter;

use Illuminate\Http\Request;
use \App\Traits\QueryParams;


abstract class Filter {
//    use QueryParams;

    protected $request;
    protected $builder;
    protected $filters = [];

    public function __construct(Request $request)
    {
//        $this->checkQueryParams( $request );
//        dd($request);
        $this->request = $request;
    }

    public function apply($builder)
    {
//        dd( $this->getSorts() );
        $this->builder = $builder;
        foreach ($this->getFilters() as $filter => $value)
        {
            if (method_exists( $this, $filter ))
            {
                $this->$filter( $value );
            }
        }

        return $this->builder;
    }

    protected function getFilters()
    {
//        dd( $this->filters );
        return $this->request->only( $this->filters );
    }
}
