<?php

namespace Modules\Category\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;
use Modules\Category\Interfaces\CategoryRepositoryInterface;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(
        protected Category $category
    )
    {
        parent::__construct($category);
    }
}
