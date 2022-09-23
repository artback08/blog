<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\Category\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
        Category::firstOrcreate($data);
        session()->put('success','Категория успешно добавлена.');

        return redirect()->route('admin.category.index');
    }
}
