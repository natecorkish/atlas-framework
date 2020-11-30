# Atlas Framework

- Collections
- Events


### Collections:

```phpt
$collection->collect([
    ["name" => "John Doe", "active" => true],
    ["name" => "John Smith", "active" => true],
    ["name" => "Jayne Anon", "active" => false],
]);

$filtered = $collection->filter(function ($item) {
    return $item["active"];
});

// Get the first item of a filtered array
return ["name" => "John Doe", "active" => true] === $filtered->first();

```


#### Events

```phpt
$events->emit("update", function() {
    return "Hello";
});

return "Hello" === $events->listener("update");
```
