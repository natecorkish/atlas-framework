# Atlas Framework

- Collections
- Events


### Collections:

- Filter
- First
- Last
- Each

```phpt
$collection->collect([
    ["name" => "John Doe", "active" => true],
    ["name" => "John Smith", "active" => true],
    ["name" => "Jayne Anon", "active" => false],
]);

// Filter inactive accounts
$filtered = $collection->filter(fn($item) => $item["active"]);

// Get the first item of a filtered array
["name" => "John Doe", "active" => true] === $filtered->first();

// Get the last item of a filtered array
["name" => "John Smith", "active" => true] === $filtered->last();

// Loop through collection
$collection->each(function ($item) {
    echo $item["name"] . PHP_EOL;
});

// Modify the collection
$modified = $filtered->map(function ($item) {
    $item["name"] = strtolower($item["name"]);
    return $item;
});
```


#### Events

```phpt
$events->emit("update", fn() => "Hello");

return "Hello" === $events->listener("update");
```
