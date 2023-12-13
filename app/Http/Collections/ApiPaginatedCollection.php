<?php

namespace App\Http\Collections;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ApiPaginatedCollection extends ResourceCollection
{
    protected $links;

    protected $resource_class;

    protected $response;

    /**
     * Class constructor
     * 
     * @param Illuminate\Contracts\Pagination\LengthAwarePaginator $resource
     * @param string|null $resource_class
     */
    public function __construct(LengthAwarePaginator $resource, string $resource_class = null)
    {
        parent::__construct($resource);
        $this->resource_class = $resource_class;
        $this->setLinksFromRsource();
        $this->response = collect([]);
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request|null  $request
     * @return Illuminate\Support\Collection
     */
    public function toArray($request = null): Collection
    {
        return collect([
            'data' => $this->resource_class
                ? $this->resource_class::collection($this->collection)
                : $this->collection,
            'meta' => $this->links
        ]);
    }

    /**
     * Set up the ApiResourceCollection links from
     * the LengthAwarePaginator collection
     * 
     * @return void
     */
    protected function setLinksFromRsource(): void
    {
        $this->links = collect($this->resource->toArray())->except('data');
    }
}
