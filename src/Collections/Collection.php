<?php

namespace Atlas\Collections;

use Closure;
use function reset;

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
     * @return \Atlas\Collections\Collection
     */
    public function collect(array $collection): self {
        $this->collection = $collection;

        return $this;
    }

    /**
     * Filter a collection
     *
     * @param callable $action
     * @return Collection
     */
    public function filter(callable $action): self {
        $this->filtered = array_filter($this->collection, $action);

        return $this;
    }

    /**
     * Loop through the filtered collection
     *
     * @param callable $action
     * @return \Atlas\Collections\Collection
     */
    public function each(callable $action): self {
        foreach ($this->filtered as $item) {
            $action($item);
        }

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

    /**
     * Return the last item in the collection
     *
     * @return $this
     */
    public function last(): mixed {
        return end($this->filtered);
    }
}