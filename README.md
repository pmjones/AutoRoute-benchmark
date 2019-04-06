7 Action URLs:

- GET /{name}s
- GET /{name}/{id}
- GET /{name}/add
- GET /{name}/{id}/edit
- POST /{name}
- PATCH /{name}/{id}
- DELETE /{name}

10 Resource names:

- foo
- bar
- baz
- dib
- zim
- gir
- irk
- qux
- quux

That's 70 routes total, 7 URLs for each of the 10 resources.

in the benchmark loop, 1000 times:

- set up the 70 routes
- then route to a random URL from the 70

include the setup *inside* the loop to reflect the idea that routing happens
exactly once in the request/response cycle, and setup occurs as part of that
request/response cycle.

`php benchmark.php`, typical result:

AutoRoute Runtime: 0.11585402488708
FastRoute Runtime: 1.9126400947571
FastRoute Cached:  0.17097496986389

AutoRoute runtime is even faster than the cached FastRoute.
