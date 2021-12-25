<?php


namespace App\Query\Pagination;


use Illuminate\Http\Request;

class Pagination {
    protected $request;
    protected $page = 1;
    protected $limit = 15;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($builder)
    {
        $this->page = array_key_exists('page', $this->request->all()) ? $this->request->query('page') : $this->page;
        $this->limit = array_key_exists('limit', $this->request->all()) ? $this->request->query('limit') : $this->limit;
//        dd($this->page, $this->limit);
//        $x =
            $builder->paginate(intval($this->limit), '*', 'page', intval($this->page));
//        return $x;
//        dd($x);
    }
}
