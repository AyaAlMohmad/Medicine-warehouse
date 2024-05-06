<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class CategoryController extends DashboardController
{
    public function __construct(Category $model)
    {
        parent::__construct();
        $this->model = $model;
        $this->module_actions = ['create', 'store', 'update', 'edit', 'destroy',  'index', 'show', 'finalDelete', 'recycleBin', 'restore'];
        view()->share([
            'module_actions' => $this->module_actions,
        ]);
    }


    public function create()
    {
        $items = Company::all();

        return view('dashboard.pages.categories.form', compact('items'));
    }

    // ************************************************
    // ************************************************
    // ***********************Store********************
    // ************************************************
    // ************************************************
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
  
        if ($item = Category::create($data)) {
            session()->flash('success', $this->success_create);
            return redirect($this->index_route);
        } else {
            session()->flash('error', $this->error_create);

            return redirect()->back();
        }
    }



    public function edit($id)
    {
        $item = Category::withTrashed()->findOrFail($id);
        $items= Company::all();
        return view('dashboard.pages.categories.edit', compact('item','items'));
    }
    // ************************************************
    // ************************************************
    // ***********************Update*******************
    // ************************************************
    // ************************************************
    public function update(CategoryRequest $request, Category $Category)
    {
        $data = $request->all();
     
      
        $update = $Category->update($data);
        if ($update) {
            session()->flash('success', $this->success_update);
            return redirect($this->index_route);
        } else {
            session()->flash('error', $this->error_update);

            return redirect()->back();
        }
    }
}
