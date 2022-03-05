<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\Event;
/* use PHPUnit\Framework\TestCase; */
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\CartController;
use App\Models\Cart;
use App\Models\Product;
use Session;


class ShoppingCartTest extends TestCase{

   public function testItemsAreAddedToCart()
   {
      //arrange
      $items = Product::all();
      $cartController = new CartController();
      //action
      foreach($items as $item){
         $cartController->store($item->id);
      }
      $cart = Session::get('cart');
      //assert
      $this->assertEquals($cart->totalQty,count($items));
      Session::forget('cart');
   }

   public function testItemIsRemovedFromCart()
   {
      //arrange
      $items = Product::all();
      $cartController = new CartController();
      //action
      foreach($items as $item){
         $cartController->store($item->id);
      }
      $cart = Session::get('cart');
      $randomProductIdToDelete = rand(0,count($cart->items));
      $itemIdToDelete = $cart->items[$randomProductIdToDelete]['item']['id'];
      $cartController->destroy($itemIdToDelete);
      //assert
      $this->assertEquals(false,isset($cart->items[$randomProductIdToDelete]));
      Session::forget('cart');
   }
}