<?php

namespace App\Actions\Market\ProductCategory;

use Illuminate\Support\Facades\DB;
use App\Models\Market\ProductCategory;
use App\Http\Requests\Admin\Market\ProductCategoryRequest;

class StoreAction
{
    /**
     * Create a new class instance.
     */
   
     public function execute(ProductCategoryRequest $request)
     {
         DB::beginTransaction();
         try {
             $categoryExist = ProductCategory::existCategory($request->name)->first();
             if ($categoryExist) {
                 return $categoryExist;
             }
 
             $data = $request->validated();
             ProductCategory::create($data);
             DB::commit();
 
             return true;
         } catch (\Exception $e) {
             DB::rollback();
 
             return false;
         }
     }
}

