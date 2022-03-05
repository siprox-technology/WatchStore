<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\Event;
/* use PHPUnit\Framework\TestCase; */
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductTest extends TestCase{

   public function testGetAvailableFilters(){
      //arrange
         $productController = new ProductController();
      //action
         $filters = $productController->getAvailableFilters();   
      //assert
         $this->assertArrayHasKey('brands',$filters);
         $this->assertArrayHasKey('categories',$filters);
         $this->assertArrayHasKey('features',$filters);
         $this->assertArrayHasKey('genders',$filters);
         $this->assertArrayHasKey('colors',$filters);
   }
   public function testFindProductsWithFilters(){
     //arrange
     
   $productController = new ProductController();
   $availableFilters = $productController->getAvailableFilters();

   $selectedFilters['brand'] = ["Casio"];
   $selectedFilters['category'] = ["Radio Controlled"];
   $selectedFilters['gender'] = ["Mens"];
   $selectedFilters['price'] = "500";
   $selectedFilters['sortBy'] = "created_at";

   $DbQueryParams['brands'] = isset($selectedFilters['brand'])?$selectedFilters['brand']:$availableFilters['brands']->pluck('name')->toArray();
   $DbQueryParams['categories'] = isset($selectedFilters['category'])?$selectedFilters['category']:$availableFilters['categories']->pluck('name')->toArray();
   $DbQueryParams['features'] = isset($selectedFilters['feature'])?$selectedFilters['feature']:$availableFilters['features']->pluck('name')->toArray();
   $DbQueryParams['colors'] = isset($selectedFilters['color'])?$selectedFilters['color']:$availableFilters['colors']->pluck('name')->toArray();
   $DbQueryParams['gender'] = isset($selectedFilters['gender'])?$selectedFilters['gender']:$availableFilters['genders']->pluck('name')->toArray();
   $DbQueryParams['price'] = $selectedFilters['price'];
   $DbQueryParams['sortBy'] = $selectedFilters['sortBy'];
     //action
   $result = $productController->findProducts($DbQueryParams)->get()->toArray();
   // assert
   
   $this->assertEquals("WV-58DU-1AVES",$result[0]->model_number);
   $this->assertEquals("WVA-M640-1AER",$result[1]->model_number);

  }

}