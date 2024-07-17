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
    public function index(ProductCategoryDataTable $dataTable)
    {
        return $dataTable->render('users.index');
        // $productCategories = ProductCategory::orderBy('created_at', 'desc')->simplePaginate(15);
        // return view('admin.market.category.index', compact('productCategories'));
    }
}