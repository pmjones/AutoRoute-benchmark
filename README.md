# AutoRoute 2.x Benchmarks

This benchmark measures only the provided scenario. It may or may not apply to
your situation, and may or may not be indicative of other scenarios. Finally,
remember that routing is only one part of your HTTP user interface; speed of
routing is unlikely to be your primary bottleneck.

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

    ** PHP 8.0 **
    AutoRoute Runtime: 0.042912006378174
    FastRoute Runtime: 0.20303583145142
    FastRoute Cached:  0.097861051559448

Thus, AutoRoute runtime is a little more than 2x faster than FastRoute, even
when cached.
