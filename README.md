# AutoRoute 1.x Benchmarks

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

Executing `php bin/benchmark.php`, typical results are ...

    **PHP 7.2**
    AutoRoute Runtime: 0.0292809009552
    FastRoute Runtime: 0.23716592788696
    FastRoute Cached:  0.12186002731323

    **PHP 7.3**
    AutoRoute Runtime: 0.026907920837402
    FastRoute Runtime: 0.24082899093628
    FastRoute Cached:  0.11221098899841

    **PHP 7.4**
    AutoRoute Runtime: 0.027965068817139
    FastRoute Runtime: 0.21157002449036
    FastRoute Cached:  0.10321187973022

    **PHP 8.0**
    AutoRoute Runtime: 0.027418851852417
    FastRoute Runtime: 0.22405982017517
    FastRoute Cached:  0.10785579681396

As such, AutoRoute runtime is roughly 3x faster even than the cached FastRoute.

> **Note:**
>
> An earlier version of these benchmarks reported results with XDebug enabled.
> That oversight on my part slowed down everything. Those results were:
>
> ```
> **PHP 7.2 (XDebug enabled)**
>
> AutoRoute Runtime: 0.11443305015564
> FastRoute Runtime: 1.9010598659515
> FastRoute Cached:  0.12522411346436
>```
