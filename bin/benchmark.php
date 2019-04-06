<?php
$autoload = require dirname(__DIR__) . '/vendor/autoload.php';

$k = 1000;

$randoPaths = [
    // browse
    'GET /{name}s',
    // read
    'GET /{name}/{id:\d+}',
    // edit-form
    'GET /{name}/{id:\d+}/edit',
    // edit
    'PATCH /{name}/{id:\d+}',
    // add-form
    'GET /{name}/add',
    // add
    'POST /{name}',
    // delete
    'DELETE /{name}/{id:\d+}'
];

$randoNames = ['foo', 'bar', 'baz', 'dib', 'zim', 'gir', 'irk', 'doom', 'qux', 'quux'];

/******************************************************************************/

$before = microtime(true);

for ($i = 1; $i <= $k; $i++) {

    $autoRoute = new \AutoRoute\AutoRoute(
        'App\\Http',
        dirname(__DIR__) . '/src/Http'
    );

    $router = $autoRoute->newRouter();

    list($verb, $path) = explode(' ', $randoPaths[array_rand($randoPaths)]);
    $name = $randoNames[array_rand($randoNames)];
    $path = str_replace(
        ['{name}', '{id:\d+}'],
        [$name, $i],
        $path
    );

    $route = $router->route($verb, $path);
}

$after = microtime(true);

echo "AutoRoute Runtime: " . ($after - $before) . PHP_EOL;

/******************************************************************************/

$before = microtime(true);

for ($i = 1; $i <= $k; $i++) {

    $routes = function (\FastRoute\RouteCollector $r) use ($randoPaths, $randoNames) {
        // $j = 0;
        // foreach ($randoNames as $name) {
        //     foreach ($randoPaths as $path) {
        //         $j ++;
        //         list ($verb, $path) = explode(' ', $path);
        //         $path = str_replace('{name}', $name, $path);
        //         echo "\$r->addRoute('$verb', '$path', 'handler_$j');" . PHP_EOL;
        //     }
        // }
        $r->addRoute('GET', '/foos', 'handler_1');
        $r->addRoute('GET', '/foo/{id:\d+}', 'handler_2');
        $r->addRoute('GET', '/foo/{id:\d+}/edit', 'handler_3');
        $r->addRoute('PATCH', '/foo/{id:\d+}', 'handler_4');
        $r->addRoute('GET', '/foo/add', 'handler_5');
        $r->addRoute('POST', '/foo', 'handler_6');
        $r->addRoute('DELETE', '/foo/{id:\d+}', 'handler_7');
        $r->addRoute('GET', '/bars', 'handler_8');
        $r->addRoute('GET', '/bar/{id:\d+}', 'handler_9');
        $r->addRoute('GET', '/bar/{id:\d+}/edit', 'handler_10');
        $r->addRoute('PATCH', '/bar/{id:\d+}', 'handler_11');
        $r->addRoute('GET', '/bar/add', 'handler_12');
        $r->addRoute('POST', '/bar', 'handler_13');
        $r->addRoute('DELETE', '/bar/{id:\d+}', 'handler_14');
        $r->addRoute('GET', '/bazs', 'handler_15');
        $r->addRoute('GET', '/baz/{id:\d+}', 'handler_16');
        $r->addRoute('GET', '/baz/{id:\d+}/edit', 'handler_17');
        $r->addRoute('PATCH', '/baz/{id:\d+}', 'handler_18');
        $r->addRoute('GET', '/baz/add', 'handler_19');
        $r->addRoute('POST', '/baz', 'handler_20');
        $r->addRoute('DELETE', '/baz/{id:\d+}', 'handler_21');
        $r->addRoute('GET', '/dibs', 'handler_22');
        $r->addRoute('GET', '/dib/{id:\d+}', 'handler_23');
        $r->addRoute('GET', '/dib/{id:\d+}/edit', 'handler_24');
        $r->addRoute('PATCH', '/dib/{id:\d+}', 'handler_25');
        $r->addRoute('GET', '/dib/add', 'handler_26');
        $r->addRoute('POST', '/dib', 'handler_27');
        $r->addRoute('DELETE', '/dib/{id:\d+}', 'handler_28');
        $r->addRoute('GET', '/zims', 'handler_29');
        $r->addRoute('GET', '/zim/{id:\d+}', 'handler_30');
        $r->addRoute('GET', '/zim/{id:\d+}/edit', 'handler_31');
        $r->addRoute('PATCH', '/zim/{id:\d+}', 'handler_32');
        $r->addRoute('GET', '/zim/add', 'handler_33');
        $r->addRoute('POST', '/zim', 'handler_34');
        $r->addRoute('DELETE', '/zim/{id:\d+}', 'handler_35');
        $r->addRoute('GET', '/girs', 'handler_36');
        $r->addRoute('GET', '/gir/{id:\d+}', 'handler_37');
        $r->addRoute('GET', '/gir/{id:\d+}/edit', 'handler_38');
        $r->addRoute('PATCH', '/gir/{id:\d+}', 'handler_39');
        $r->addRoute('GET', '/gir/add', 'handler_40');
        $r->addRoute('POST', '/gir', 'handler_41');
        $r->addRoute('DELETE', '/gir/{id:\d+}', 'handler_42');
        $r->addRoute('GET', '/irks', 'handler_43');
        $r->addRoute('GET', '/irk/{id:\d+}', 'handler_44');
        $r->addRoute('GET', '/irk/{id:\d+}/edit', 'handler_45');
        $r->addRoute('PATCH', '/irk/{id:\d+}', 'handler_46');
        $r->addRoute('GET', '/irk/add', 'handler_47');
        $r->addRoute('POST', '/irk', 'handler_48');
        $r->addRoute('DELETE', '/irk/{id:\d+}', 'handler_49');
        $r->addRoute('GET', '/dooms', 'handler_50');
        $r->addRoute('GET', '/doom/{id:\d+}', 'handler_51');
        $r->addRoute('GET', '/doom/{id:\d+}/edit', 'handler_52');
        $r->addRoute('PATCH', '/doom/{id:\d+}', 'handler_53');
        $r->addRoute('GET', '/doom/add', 'handler_54');
        $r->addRoute('POST', '/doom', 'handler_55');
        $r->addRoute('DELETE', '/doom/{id:\d+}', 'handler_56');
        $r->addRoute('GET', '/quxs', 'handler_57');
        $r->addRoute('GET', '/qux/{id:\d+}', 'handler_58');
        $r->addRoute('GET', '/qux/{id:\d+}/edit', 'handler_59');
        $r->addRoute('PATCH', '/qux/{id:\d+}', 'handler_60');
        $r->addRoute('GET', '/qux/add', 'handler_61');
        $r->addRoute('POST', '/qux', 'handler_62');
        $r->addRoute('DELETE', '/qux/{id:\d+}', 'handler_63');
        $r->addRoute('GET', '/quuxs', 'handler_64');
        $r->addRoute('GET', '/quux/{id:\d+}', 'handler_65');
        $r->addRoute('GET', '/quux/{id:\d+}/edit', 'handler_66');
        $r->addRoute('PATCH', '/quux/{id:\d+}', 'handler_67');
        $r->addRoute('GET', '/quux/add', 'handler_68');
        $r->addRoute('POST', '/quux', 'handler_69');
        $r->addRoute('DELETE', '/quux/{id:\d+}', 'handler_70');
    };

    $dispatcher = \FastRoute\simpleDispatcher($routes);

    list($verb, $path) = explode(' ', $randoPaths[array_rand($randoPaths)]);
    $name = $randoNames[array_rand($randoNames)];
    $path = str_replace(
        ['{name}', '{id:\d+}'],
        [$name, $i],
        $path
    );

    $route = $dispatcher->dispatch($verb, $path);
}

$after = microtime(true);

echo "FastRoute Runtime: " . ($after - $before) . PHP_EOL;

/******************************************************************************/

$before = microtime(true);

for ($i = 1; $i <= $k; $i++) {

    $routes = function (\FastRoute\RouteCollector $r) use ($randoPaths, $randoNames) {
        // $j = 0;
        // foreach ($randoNames as $name) {
        //     foreach ($randoPaths as $path) {
        //         $j ++;
        //         list ($verb, $path) = explode(' ', $path);
        //         $path = str_replace('{name}', $name, $path);
        //         echo "\$r->addRoute('$verb', '$path', 'handler_$j');" . PHP_EOL;
        //     }
        // }
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/foos', 'handler_1');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/foos', 'handler_2');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/foo/{id:\d+}', 'handler_3');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/foo/{id:\d+}', 'handler_4');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/foo/{id:\d+}/edit', 'handler_5');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/foo/{id:\d+}', 'handler_6');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/foo/new', 'handler_7');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/foo', 'handler_8');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/foo/{id:\d+}', 'handler_9');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/bars', 'handler_10');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/bars', 'handler_11');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/bar/{id:\d+}', 'handler_12');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/bar/{id:\d+}', 'handler_13');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/bar/{id:\d+}/edit', 'handler_14');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/bar/{id:\d+}', 'handler_15');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/bar/new', 'handler_16');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/bar', 'handler_17');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/bar/{id:\d+}', 'handler_18');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/bazs', 'handler_19');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/bazs', 'handler_20');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/baz/{id:\d+}', 'handler_21');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/baz/{id:\d+}', 'handler_22');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/baz/{id:\d+}/edit', 'handler_23');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/baz/{id:\d+}', 'handler_24');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/baz/new', 'handler_25');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/baz', 'handler_26');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/baz/{id:\d+}', 'handler_27');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/dibs', 'handler_28');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/dibs', 'handler_29');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/dib/{id:\d+}', 'handler_30');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/dib/{id:\d+}', 'handler_31');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/dib/{id:\d+}/edit', 'handler_32');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/dib/{id:\d+}', 'handler_33');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/dib/new', 'handler_34');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/dib', 'handler_35');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/dib/{id:\d+}', 'handler_36');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/zims', 'handler_37');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/zims', 'handler_38');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/zim/{id:\d+}', 'handler_39');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/zim/{id:\d+}', 'handler_40');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/zim/{id:\d+}/edit', 'handler_41');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/zim/{id:\d+}', 'handler_42');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/zim/new', 'handler_43');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/zim', 'handler_44');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/zim/{id:\d+}', 'handler_45');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/girs', 'handler_46');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/girs', 'handler_47');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/gir/{id:\d+}', 'handler_48');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/gir/{id:\d+}', 'handler_49');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/gir/{id:\d+}/edit', 'handler_50');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/gir/{id:\d+}', 'handler_51');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/gir/new', 'handler_52');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/gir', 'handler_53');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/gir/{id:\d+}', 'handler_54');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/irks', 'handler_55');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/irks', 'handler_56');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/irk/{id:\d+}', 'handler_57');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/irk/{id:\d+}', 'handler_58');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/irk/{id:\d+}/edit', 'handler_59');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/irk/{id:\d+}', 'handler_60');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/irk/new', 'handler_61');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/irk', 'handler_62');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/irk/{id:\d+}', 'handler_63');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/dooms', 'handler_64');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/dooms', 'handler_65');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/doom/{id:\d+}', 'handler_66');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/doom/{id:\d+}', 'handler_67');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/doom/{id:\d+}/edit', 'handler_68');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/doom/{id:\d+}', 'handler_69');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/doom/new', 'handler_70');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/doom', 'handler_71');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/doom/{id:\d+}', 'handler_72');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/quxs', 'handler_73');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/quxs', 'handler_74');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/qux/{id:\d+}', 'handler_75');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/qux/{id:\d+}', 'handler_76');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/qux/{id:\d+}/edit', 'handler_77');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/qux/{id:\d+}', 'handler_78');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/qux/new', 'handler_79');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/qux', 'handler_80');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/qux/{id:\d+}', 'handler_81');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/quuxs', 'handler_82');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/quuxs', 'handler_83');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/quux/{id:\d+}', 'handler_84');
        $r->addRoute('HEAD', '/sub-dir-a/sub-dir-b/sub-dir-c/quux/{id:\d+}', 'handler_85');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/quux/{id:\d+}/edit', 'handler_86');
        $r->addRoute('PATCH', '/sub-dir-a/sub-dir-b/sub-dir-c/quux/{id:\d+}', 'handler_87');
        $r->addRoute('GET', '/sub-dir-a/sub-dir-b/sub-dir-c/quux/new', 'handler_88');
        $r->addRoute('POST', '/sub-dir-a/sub-dir-b/sub-dir-c/quux', 'handler_89');
        $r->addRoute('DELETE', '/sub-dir-a/sub-dir-b/sub-dir-c/quux/{id:\d+}', 'handler_90');
    };

    $dispatcher = \FastRoute\cachedDispatcher($routes, [
        'cacheFile' => dirname(__DIR__) . '/resources/fastroute-cache.php',
    ]);

    list($verb, $path) = explode(' ', $randoPaths[array_rand($randoPaths)]);
    $name = $randoNames[array_rand($randoNames)];
    $path = str_replace(
        ['{name}', '{id:\d+}'],
        [$name, $i],
        $path
    );

    $route = $dispatcher->dispatch($verb, $path);
}

$after = microtime(true);

echo "FastRoute Cached:  " . ($after - $before) . PHP_EOL;
