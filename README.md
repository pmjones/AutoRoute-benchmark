# AutoRoute Benchmarks

## Scenario

Given 7 action URL paths ...

- GET /{name}s
- GET /{name}/{id}
- GET /{name}/add
- GET /{name}/{id}/edit
- POST /{name}
- PATCH /{name}/{id}
- DELETE /{name}

... and 10 resource names ...

- foo
- bar
- baz
- dib
- zim
- gir
- irk
- qux
- quux

... for 70 routes total, this benchmark measures the time to route to a random
resource path, 1000 times. It includes the setup time to reflect the idea that
routing happens exactly once in the request/response cycle, and router setup
occurs as part of that request/response cycle.

Executing `php bin/benchmark.php`, a typical result is:

    AutoRoute Runtime: 0.11585402488708
    FastRoute Runtime: 1.9126400947571
    FastRoute Cached:  0.17097496986389

As such, AutoRoute runtime is even faster than the cached FastRoute.
