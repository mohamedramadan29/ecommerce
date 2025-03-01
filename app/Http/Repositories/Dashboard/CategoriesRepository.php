<?php
namespace App\Http\Repositories\Dashboard;

use App\Models\admin\Category;


class CategoriesRepository
{


    public function getAll()
    {
        $categories = Category::all();
        return $categories;
    }

    ########### Find Category By ID

    public function findById($id)
    {
        $category = Category::find($id);
        return $category;
    }

    ########## Make Store To Category

    public function store($data)
    {
        $category = Category::create($data);
        return $category;
    }

    ############ Make Update To Category

    public function update($category, $data)
    {
        $category = $category->update($data);
        return $category;
    }

    ############ Delete Category

    public function delete($category)
    {
        $category = $category->delete();
        return $category;
    }


    ########### Get Parent Categories

    public function getParentCategories(){
        $categories = Category::whereNull('parent')->get();
        return $categories;
    }

    public function getCategoriesExceptionChildren($id)
    {
        $categories = Category::where('id', '!=', $id)
            //->whereDoesntHave('Childrens')
            ->whereNull('parent')
            ->get();
        return $categories;
    }





}
