<?php


namespace App\Query\Order;


use Illuminate\Http\Request;

abstract class Order {

    protected $request;
    protected $builder;

    protected $order = ['-created_at'];
    protected $orderAndSort = [];
    protected $fillable = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($builder)
    {
        $this->builder = $builder;
        if (array_key_exists( 'sort', $this->request->only( ['sort'] ) ))
        {
            $this->order = explode( ',', $this->request->query( 'sort' ) );
        }
        elseif (array_key_exists( 'order', $this->request->only( ['order'] ) ))
        {
            $this->order = explode( ',', $this->request->query( 'order' ) );
        }
        $this->makeSortWithOrder();
        $this->order();
    }

    public function makeSortWithOrder()
    {
        foreach ($this->order as $key => $value)
        {
            $order = ltrim( $value, '-' );
            if (in_array( $order, $this->fillable ))
            {
                $sort = $value[0] == '-' ? 'desc' : 'asc';
                $this->orderAndSort[$order] = $sort;
            }

        }
    }

    public function order()
    {
        foreach ($this->orderAndSort as $key => $value)
        {
            $this->builder->orderBy( $key, $value );
        }
    }
}
