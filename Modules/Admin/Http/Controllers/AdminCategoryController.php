<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categories = Category::with('parent')->select('id','name', 'parent_id', 'active', 'hot')->orderByDesc('id')->get();
//        $parent_categories = Category::whereNull('parent_id')->with('childs')->select('id', 'name')->get();
        $viewData = [
            'categories' => $categories,
//            'parent_categories' => $this->showCategories($categories)
        ];
        return view('admin::category.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        $data = $this->insertOrupdate($request);
        return response()->json(['data' => $data]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function action(Request $request, $action, $id)
    {
        if ($request->ajax())
        {
            if($action){
                $category = Category::find($id);
                switch ($action) {
                    case 'delete':
                        $category->delete();
                        $messages = 'Xóa thành công';
                        break;
                    case 'active':
                        //sdd('ok');
                        $category->active = $category->active ? 0 : 1;
                        $category->save();
                        $messages = 'Cập nhật thành công';
                        break;
                    case 'hot':
                        //dd('ok');
                        $category->hot = $category->hot ? 0 : 1;
                        $category->save();
                        $messages = 'Cập nhật thành công';
                        break;
                }
            }
            return response()->json(['success' => $messages]);
        }
        $messages = "Lỗi cập nhật";
        return response()->json(['error' => $messages]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createslug( Category::class, 'slug', $request->name);
        return response()->json( ['slug' => $slug]);
    }

    public function insertOrupdate($request,$id='')
    {
        try {
            $category = new Category();
            $message = 'Thêm mới thành công!';
            if($id){
                $category = Category::find($id);
                $message = 'Cập nhật thành công!';
            }
            $category->name             = $request->name;
            $category->slug             = $request->slug;
            $category->active           = $request->active == true ? Category::STATUS_PUBLIC : Category::STATUS_PRIVATE;
            $category->hot              = $request->hot == true ? Category::HOT : Category::NOT_HOT;
            $category->parent_id        = $request->parent_id;
            $category->icon             = $request->icon;
            $category->title_seo        = $request->title_seo ? $request->title_seo : $request->name;
            $category->description_seo  = $request->description_seo;
            $category->save();
            return [
                'status' => true,
                'data' => $category,
                'success' => $message
            ];
        }
        catch (Exception $exception)
        {
            return [
                'status' => false,
                'error' => $exception->getMessage()
            ];
        }
    }

    public function showCategory($categories)
    {
        $cates = [];
        foreach ($categories as $category) {
            $cate ['id'] = $category->id;
            $cate ['name'] = $category->name;
            if ($category->childs->isNotEmpty()) {
                $cate ['childs'][] = $category->childs->toArray();
                self::showCategory($category->childs);
            }
            $cates [] = $cate;
            $cate ['childs']= [];
        }
        return $cates;
    }

    public static function showCategories($categories, $parent_id = null, $char = '')
    {
        foreach ($categories as $key => $item)
        {
            if ($item->parent_id == $parent_id)
            {
                echo '<option value="'.$item->id.'">';
                echo $char . $item->name;
                echo '</option>';

                unset($categories[$item->id]);

                self::showCategories($categories, $item->id, $char.'|---');
            }
        }
    }
}
