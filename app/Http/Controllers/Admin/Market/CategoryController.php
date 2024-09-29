<?php

namespace App\Http\Controllers\Admin\Market;

use Illuminate\Http\Request;
use App\Actions\StatusAction;
use App\Http\Controllers\Controller;
use App\Models\Market\ProductCategory;
use App\Http\Services\Image\ImageService;
use App\DataTables\ProductCategoryDataTable;
use App\Http\Requests\Admin\Market\ProductCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(ProductCategoryDataTable $datatable){
        return $datatable->render('admin.market.category.index') ;

     }

     public function create(){

        return view('admin.market.category.create') ;
     }

     public function store(ProductCategoryRequest $request , ProductCategory $cateory){


     }

     public function edit(){

     }
     public function update(){

     } 
     public function delelte(){

     } 

     public function status(ProductCategory $category)
     {
         return StatusAction::status('status', $category);
     }
    }
