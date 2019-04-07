<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/foos' => 'handler_1',
      '/foo/add' => 'handler_5',
      '/bars' => 'handler_8',
      '/bar/add' => 'handler_12',
      '/bazs' => 'handler_15',
      '/baz/add' => 'handler_19',
      '/dibs' => 'handler_22',
      '/dib/add' => 'handler_26',
      '/zims' => 'handler_29',
      '/zim/add' => 'handler_33',
      '/girs' => 'handler_36',
      '/gir/add' => 'handler_40',
      '/irks' => 'handler_43',
      '/irk/add' => 'handler_47',
      '/dooms' => 'handler_50',
      '/doom/add' => 'handler_54',
      '/quxs' => 'handler_57',
      '/qux/add' => 'handler_61',
      '/quuxs' => 'handler_64',
      '/quux/add' => 'handler_68',
    ),
    'POST' => 
    array (
      '/foo' => 'handler_6',
      '/bar' => 'handler_13',
      '/baz' => 'handler_20',
      '/dib' => 'handler_27',
      '/zim' => 'handler_34',
      '/gir' => 'handler_41',
      '/irk' => 'handler_48',
      '/doom' => 'handler_55',
      '/qux' => 'handler_62',
      '/quux' => 'handler_69',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/foo/(\\d+)|/foo/(\\d+)/edit()|/bar/(\\d+)()()|/bar/(\\d+)/edit()()()|/baz/(\\d+)()()()()|/baz/(\\d+)/edit()()()()()|/dib/(\\d+)()()()()()()|/dib/(\\d+)/edit()()()()()()()|/zim/(\\d+)()()()()()()()()|/zim/(\\d+)/edit()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_2',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_3',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_9',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_10',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_16',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_17',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_23',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_24',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_30',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_31',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/gir/(\\d+)|/gir/(\\d+)/edit()|/irk/(\\d+)()()|/irk/(\\d+)/edit()()()|/doom/(\\d+)()()()()|/doom/(\\d+)/edit()()()()()|/qux/(\\d+)()()()()()()|/qux/(\\d+)/edit()()()()()()()|/quux/(\\d+)()()()()()()()()|/quux/(\\d+)/edit()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_37',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_38',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_44',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_45',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_51',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_52',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_58',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_59',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_65',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_66',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/foo/(\\d+)|/bar/(\\d+)()|/baz/(\\d+)()()|/dib/(\\d+)()()()|/zim/(\\d+)()()()()|/gir/(\\d+)()()()()()|/irk/(\\d+)()()()()()()|/doom/(\\d+)()()()()()()()|/qux/(\\d+)()()()()()()()()|/quux/(\\d+)()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_4',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_11',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_18',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_25',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_32',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_39',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_46',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_53',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_60',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_67',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/foo/(\\d+)|/bar/(\\d+)()|/baz/(\\d+)()()|/dib/(\\d+)()()()|/zim/(\\d+)()()()()|/gir/(\\d+)()()()()()|/irk/(\\d+)()()()()()()|/doom/(\\d+)()()()()()()()|/qux/(\\d+)()()()()()()()()|/quux/(\\d+)()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_14',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_21',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_28',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_35',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_42',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_49',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_63',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_70',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
  ),
);