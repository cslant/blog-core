<?php

namespace  CSlant\Blog\Core\Http\Repositories;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use CSlant\Blog\Core\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class PostRepository extends RepositoriesAbstract
{
    public function __construct(Post $post)
    {
        parent::__construct($post);
    }

    public function getFilters(array $filters): Collection|LengthAwarePaginator
    {
        $data = $this->originalModel;

        if ($filters['tags'] !== null) {
            $tags = array_filter((array) $filters['tags']);

            $data = $data->whereHas('tags', function (Builder $query) use ($tags): void {
                $query->whereIn('tags.id', $tags);
            });
        }

        $orderBy = Arr::get($filters, 'order_by', 'updated_at');
        $order = Arr::get($filters, 'order', 'desc');

        $data = $data
            ->wherePublished()
            ->orderBy($orderBy, $order);

        return $this->applyBeforeExecuteQuery($data)->paginate((int) $filters['per_page']);
    }
}
