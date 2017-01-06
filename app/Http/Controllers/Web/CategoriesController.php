<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->paginate(config('custom.paginate.category'));
        return view('web.categories.index')->with([
            'categories' => $categories,
        ]);
    }
}
