<?php

namespace Modules\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Category\Http\Requests\CategoryStoreRequest;
use Modules\Category\Http\Requests\CategoryUpdateRequest;
use Modules\Category\Services\CategoryService;
use Modules\Category\Transformers\CategoryCollection;
use Modules\Category\Transformers\CategoryResource;

class CategoryController extends Controller
{
    public function __construct(
        protected CategoryService $categoryService
    )
    {
    }

    public function index()
    {
        $categories = $this->categoryService->getAll();
        return new CategoryCollection($categories);
    }

    public function show(int $category)
    {
        $category = $this->categoryService->getById($category);
        return new CategoryResource($category);
    }

    public function store(CategoryStoreRequest $request)
    {
        $category = $this->categoryService->create($request->validated());
        return new CategoryResource($category);
    }

    public function update(CategoryUpdateRequest $request, int $category)
    {
        $category = $this->categoryService->update($category, $request->validated());
        return new CategoryResource($category);
    }

    public function destroy(int $category)
    {
        $this->categoryService->delete($category);

        return response()->noContent();
    }
}
