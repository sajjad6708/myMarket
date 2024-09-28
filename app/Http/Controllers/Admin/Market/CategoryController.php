<?php

namespace App\Http\Controllers\Admin\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Market\ProductCategory;
use App\Http\Services\Image\ImageService;
use App\Http\Requests\Admin\Market\ProductCategoryRequest;
use App\DataTables\ProductCategoryDataTable;
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
    }
