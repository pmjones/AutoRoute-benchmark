<?php
$templates = [
    // browse
    '/Http/{Name}s/Get{Name}s.php'
        => '<?php namespace App\Http\{Name}s; class Get{Name}s { public function __invoke() { } }',
    // read
    '/Http/{Name}/Get{Name}.php'
        => '<?php namespace App\Http\{Name}; class Get{Name} { public function __invoke(int $id) { } }',
    // edit-form
    '/Http/{Name}/Edit/Get{Name}Edit.php'
        => '<?php namespace App\Http\{Name}\Edit; class Get{Name}Edit { public function __invoke(int $id) { } }',
    // edit
    '/Http/{Name}/Patch{Name}.php'
        => '<?php namespace App\Http\{Name}; class Patch{Name} { public function __invoke(int $id) { } }',
    // add-form
    '/Http/{Name}/Add/Get{Name}Add.php'
        => '<?php namespace App\Http\{Name}\Add; class Get{Name}Add { public function __invoke() { } }',
    // add
    '/Http/{Name}/Post{Name}.php'
        => '<?php namespace App\Http\{Name}; class Post{Name} { public function __invoke() { } }',
    // delete
    '/Http/{Name}/Delete{Name}.php'
        => '<?php namespace App\Http\{Name}; class Delete{Name} { public function __invoke(int $id) { } }',
];

$names = ['Foo', 'Bar', 'Baz', 'Dib', 'Zim', 'Gir', 'Irk', 'Doom', 'Qux', 'Quux'];

foreach ($names as $name) {
    foreach ($templates as $file => $code) {
        $file = dirname(__DIR__) . '/src' . str_replace('{Name}', $name, $file);
        $code = str_replace('{Name}', $name, $code);
        $dir = dirname($file);
        if (! is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        file_put_contents($file, $code);
    }
}
