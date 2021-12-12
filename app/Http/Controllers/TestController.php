<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Query\Filter\TestFilter;
use App\Query\Pagination\Pagination;
use App\Query\Sort\TestSort;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param TestFilter     $filter
     * @param TestSort       $sort
     * @param Pagination $pagination
     * @return void
     */
    public function index(TestFilter $filter, TestSort $sort, Pagination $pagination)
    {
        $users = User::customFilter($filter)->customSort($sort)->customPagination($pagination)->toSql();
        dd($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
