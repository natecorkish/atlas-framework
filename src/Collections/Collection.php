<?php

namespace Atlas\Collections;

use Closure;

class Collection {

    /**
     * The original collection
     *
     * @var array
     */
    protected array $collection = [];

    /**
     * The filtered collection
     *
     * @var array
     */
    protected array $filtered = [];

    /**
     * Return a collection
     *
     * @return array
     */
    public function collection(): array {
        return $this->collection;
    }

    /**
     * Collect an array
     *
     * @param array $collection
     *
     * @return array
     */
    public function collect(array $collection): array {
        $this->collection = $collection;

        return $collection;
    }

    /**
     * Filter a collection
     *
     * @param Closure $filter
     *
     * @return Collection
     */
    public function filter(closure $filter): self {
        $this->filtered = array_filter($this->collection, $filter);

        return $this;
    }

    /**
     * Return the first item in the collection
     *
     * @return $this
     */
    public function first(): mixed {
        return reset($this->filtered);
    }
}