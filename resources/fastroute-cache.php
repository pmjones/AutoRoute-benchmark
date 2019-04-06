<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/sub-dir-a/sub-dir-b/sub-dir-c/foos' => 'handler_1',
      '/sub-dir-a/sub-dir-b/sub-dir-c/foo/new' => 'handler_7',
      '/sub-dir-a/sub-dir-b/sub-dir-c/bars' => 'handler_10',
      '/sub-dir-a/sub-dir-b/sub-dir-c/bar/new' => 'handler_16',
      '/sub-dir-a/sub-dir-b/sub-dir-c/bazs' => 'handler_19',
      '/sub-dir-a/sub-dir-b/sub-dir-c/baz/new' => 'handler_25',
      '/sub-dir-a/sub-dir-b/sub-dir-c/dibs' => 'handler_28',
      '/sub-dir-a/sub-dir-b/sub-dir-c/dib/new' => 'handler_34',
      '/sub-dir-a/sub-dir-b/sub-dir-c/zims' => 'handler_37',
      '/sub-dir-a/sub-dir-b/sub-dir-c/zim/new' => 'handler_43',
      '/sub-dir-a/sub-dir-b/sub-dir-c/girs' => 'handler_46',
      '/sub-dir-a/sub-dir-b/sub-dir-c/gir/new' => 'handler_52',
      '/sub-dir-a/sub-dir-b/sub-dir-c/irks' => 'handler_55',
      '/sub-dir-a/sub-dir-b/sub-dir-c/irk/new' => 'handler_61',
      '/sub-dir-a/sub-dir-b/sub-dir-c/dooms' => 'handler_64',
      '/sub-dir-a/sub-dir-b/sub-dir-c/doom/new' => 'handler_70',
      '/sub-dir-a/sub-dir-b/sub-dir-c/quxs' => 'handler_73',
      '/sub-dir-a/sub-dir-b/sub-dir-c/qux/new' => 'handler_79',
      '/sub-dir-a/sub-dir-b/sub-dir-c/quuxs' => 'handler_82',
      '/sub-dir-a/sub-dir-b/sub-dir-c/quux/new' => 'handler_88',
    ),
    'HEAD' => 
    array (
      '/sub-dir-a/sub-dir-b/sub-dir-c/foos' => 'handler_2',
      '/sub-dir-a/sub-dir-b/sub-dir-c/bars' => 'handler_11',
      '/sub-dir-a/sub-dir-b/sub-dir-c/bazs' => 'handler_20',
      '/sub-dir-a/sub-dir-b/sub-dir-c/dibs' => 'handler_29',
      '/sub-dir-a/sub-dir-b/sub-dir-c/zims' => 'handler_38',
      '/sub-dir-a/sub-dir-b/sub-dir-c/girs' => 'handler_47',
      '/sub-dir-a/sub-dir-b/sub-dir-c/irks' => 'handler_56',
      '/sub-dir-a/sub-dir-b/sub-dir-c/dooms' => 'handler_65',
      '/sub-dir-a/sub-dir-b/sub-dir-c/quxs' => 'handler_74',
      '/sub-dir-a/sub-dir-b/sub-dir-c/quuxs' => 'handler_83',
    ),
    'POST' => 
    array (
      '/sub-dir-a/sub-dir-b/sub-dir-c/foo' => 'handler_8',
      '/sub-dir-a/sub-dir-b/sub-dir-c/bar' => 'handler_17',
      '/sub-dir-a/sub-dir-b/sub-dir-c/baz' => 'handler_26',
      '/sub-dir-a/sub-dir-b/sub-dir-c/dib' => 'handler_35',
      '/sub-dir-a/sub-dir-b/sub-dir-c/zim' => 'handler_44',
      '/sub-dir-a/sub-dir-b/sub-dir-c/gir' => 'handler_53',
      '/sub-dir-a/sub-dir-b/sub-dir-c/irk' => 'handler_62',
      '/sub-dir-a/sub-dir-b/sub-dir-c/doom' => 'handler_71',
      '/sub-dir-a/sub-dir-b/sub-dir-c/qux' => 'handler_80',
      '/sub-dir-a/sub-dir-b/sub-dir-c/quux' => 'handler_89',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/foo/(\\d+)|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/foo/(\\d+)/edit()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/bar/(\\d+)()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/bar/(\\d+)/edit()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/baz/(\\d+)()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/baz/(\\d+)/edit()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/dib/(\\d+)()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/dib/(\\d+)/edit()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/zim/(\\d+)()()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/zim/(\\d+)/edit()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_3',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_5',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_12',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_14',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_21',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_23',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_30',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_32',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_39',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_41',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/gir/(\\d+)|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/gir/(\\d+)/edit()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/irk/(\\d+)()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/irk/(\\d+)/edit()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/doom/(\\d+)()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/doom/(\\d+)/edit()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/qux/(\\d+)()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/qux/(\\d+)/edit()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/quux/(\\d+)()()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/quux/(\\d+)/edit()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_48',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_50',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_59',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_66',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_68',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_75',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_77',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_84',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_86',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'HEAD' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/foo/(\\d+)|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/bar/(\\d+)()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/baz/(\\d+)()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/dib/(\\d+)()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/zim/(\\d+)()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/gir/(\\d+)()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/irk/(\\d+)()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/doom/(\\d+)()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/qux/(\\d+)()()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/quux/(\\d+)()()()()()()()()())$~',
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
            0 => 'handler_13',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_22',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_31',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_40',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_49',
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
            0 => 'handler_67',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_76',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_85',
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
        'regex' => '~^(?|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/foo/(\\d+)|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/bar/(\\d+)()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/baz/(\\d+)()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/dib/(\\d+)()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/zim/(\\d+)()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/gir/(\\d+)()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/irk/(\\d+)()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/doom/(\\d+)()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/qux/(\\d+)()()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/quux/(\\d+)()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_6',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_15',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_24',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_33',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_42',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_51',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_60',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_69',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_78',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_87',
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
        'regex' => '~^(?|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/foo/(\\d+)|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/bar/(\\d+)()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/baz/(\\d+)()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/dib/(\\d+)()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/zim/(\\d+)()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/gir/(\\d+)()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/irk/(\\d+)()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/doom/(\\d+)()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/qux/(\\d+)()()()()()()()()|/sub\\-dir\\-a/sub\\-dir\\-b/sub\\-dir\\-c/quux/(\\d+)()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'handler_9',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'handler_18',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'handler_27',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'handler_36',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'handler_45',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'handler_54',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'handler_63',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'handler_72',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'handler_81',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'handler_90',
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