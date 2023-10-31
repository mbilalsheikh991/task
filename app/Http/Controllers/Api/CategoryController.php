<?php

namespace App\Http\Controllers\Api;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Traits\ErrorMessage;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    use ErrorMessage;
    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        $Category = Category::create($input);
        return $this->sendResponse($Category, 'Category Added successfully.');
    }
}
