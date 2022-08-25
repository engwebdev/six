<?php


namespace App\Interfaces;

use Illuminate\Http\Request;

interface ShopRepositoryInterface
{
//     public function getAllOrders();
    public function storeWithStrategy(Request $request);
//     public function getOrderById($orderId);
//     public function deleteOrder($orderId);
//     public function createOrder(array $orderDetails);
//     public function updateOrder($orderId, array $newDetails);
//     public function getFulfilledOrders();
}
