# generator_mvc_php
The generator dirs for type mvc php

json sorce:

{"app":{"class_model":["work_class","function","setings"],"page_view":{"0":"page_class","template":{"design":["css","js"]}},"work_controller":{"work":{"0":"user","1":"admin","auth":[]},"test":[]}},"images":[],"css":[],"js":[]}

array sorce:

$array['app']['class_model'] = ['work_class', 'function', 'setings'];
$array['app']['page_view'] = ['page_class', 'template' => ['design' => ['css', 'js']]];
$array['app']['work_controller'] =['work' => ['user', 'admin']];
$array['app']['work_controller']['work']['auth'] = [];
$array['app']['work_controller']['test'] = [];
$array['images'] = [];
$array['css'] = [];
$array['js'] = [];

array print structure:

    [app] => Array
        (
            [class_model] => Array
                (
                    [0] => work_class
                    [1] => function
                    [2] => setings
                )

            [page_view] => Array
                (
                    [0] => page_class
                    [template] => Array
                        (
                            [design] => Array
                                (
                                    [0] => css
                                    [1] => js
                                )

                        )

                )

            [work_controller] => Array
                (
                    [work] => Array
                        (
                            [0] => user
                            [1] => admin
                            [auth] => Array
                                (
                                )

                        )

                    [test] => Array
                        (
                        )

                )

        )

    [images] => Array
        (
        )

    [css] => Array
        (
        )

    [js] => Array
        (
        )

path example created dirs:

/home/bplilqd/work/autovector/app (a)
/home/bplilqd/work/autovector/app/class_model (c) - "restart function" 
/home/bplilqd/work/autovector/app/class_model/work_class (d)
/home/bplilqd/work/autovector/app/class_model/function (d)
/home/bplilqd/work/autovector/app/class_model/setings (d)
/home/bplilqd/work/autovector/app/page_view (c) - "restart function" 
/home/bplilqd/work/autovector/app/page_view/page_class (d)
/home/bplilqd/work/autovector/app/page_view/template (a)
/home/bplilqd/work/autovector/app/page_view/template/design (c) - "restart function" 
/home/bplilqd/work/autovector/app/page_view/template/design/css (d)
/home/bplilqd/work/autovector/app/page_view/template/design/js (d)
/home/bplilqd/work/autovector/app/work_controller (c) - "restart function" 
/home/bplilqd/work/autovector/app/work_controller/work (a)
/home/bplilqd/work/autovector/app/work_controller/work/user (b)
/home/bplilqd/work/autovector/app/work_controller/work/admin (b)
/home/bplilqd/work/autovector/app/work_controller/work/auth (c) - "restart function" 
/home/bplilqd/work/autovector/app/work_controller/test (e)
/home/bplilqd/work/autovector/images (e)
/home/bplilqd/work/autovector/css (e)
/home/bplilqd/work/autovector/js (e)
