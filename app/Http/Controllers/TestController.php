<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Query\Filter\TestFilter;
use App\Query\Pagination\Pagination;
use App\Query\Order\TestOrder;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param TestFilter $filter
     * @param TestOrder  $order
     * @param Pagination $pagination
     * @return void
     */
    public function index(TestFilter $filter, TestOrder $order, Pagination $pagination)
    {
        $users = User::customFilter($filter)->customOrder($order)->customPagination($pagination)->toSql();
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
