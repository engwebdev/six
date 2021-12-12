<?php

namespace App\Traits;
use Illuminate\Http\Request;


trait QueryParams
{
    public $sort;
    public $order;
    public $page;
    public $limit;
    protected $queryStrings  = [];

    public function setQuerySort(Request $request)
    {
        if ($request->query( 'order' ))
        {
            $validate_order = $request->validate(
                [
                    'order' => ['string'],
                ]
            );
            $this->order = $validate_order['order'];
        }
        else
        {
            $this->order = 'id';
        }
        return $this->order;
    }

    public function setQueryOrder(Request $request)
    {
        if ($request->query( 'order' ))
        {
            $validate_order = $request->validate(
                [
                    'order' => ['string', 'min:3', 'max:4'],
                ]
            );
            $this->order = $validate_order['order'];
        }
        else
        {
            $this->order = 'asc';
        }
        return $this->order;
    }

    public function setQueryPage(Request $request)
    {
        if ($request->query( 'page' ))
        {
            $validate_page = $request->validate(
                [
                    'page' => ['integer'],
                ]
            );
            $this->page = $validate_page['page'];
        }
        else
        {
            $this->page = 1;
        }
        return $this->page;
    }

    public function setQueryLimit(Request $request)
    {
        if ($request->query( 'limit' ))
        {
            $validate_limit = $request->validate(
                [
                    'limit' => ['integer'],
                ]
            );
            $this->limit = $validate_limit['limit'];
        }
        else
        {
            $this->limit = 20;
        }
        return $this->limit;
    }

    public function checkQueryParams(Request $request)
    {
        if ($request->query( 'sort' ))
        {
            $validate_sort = $request->validate(
                [
                    'sort' => ['string'],
                ]
            );
            $this->sort = $validate_sort['sort'];
        }
        else
        {
            $this->sort = 'id';
        }

        if ($request->query( 'order' ))
        {
            $validate_order = $request->validate(
                [
                    'order' => ['string', 'min:3', 'max:4'],
                ]
            );
            $this->order = $validate_order['order'];
        }
        else
        {
            $this->order = 'asc';
        }

        if ($request->query( 'page' ))
        {
            $validate_page = $request->validate(
                [
                    'page' => ['numeric'],
                ]
            );
            $this->page = $validate_page['page'];
        }
        else
        {
            $this->page = 1;
        }

        if ($request->query( 'limit' ))
        {
            $validate_limit = $request->validate(
                [
                    'limit' => ['numeric'],
                ]
            );
            $this->limit = $validate_limit['limit'];
        }
        else
        {
            $this->limit = 20;
        }

        return ['sort' => $this->sort, 'order' => $this->order, 'page' => $this->page, 'limit' => $this->limit];
    }
}
