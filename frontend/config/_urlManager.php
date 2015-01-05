<?php
return [
    'class'=>'yii\web\UrlManager',
    'enablePrettyUrl'=>true,
    'urlFormat'=>'path',
    'showScriptName'=>false,
    'rules'=> [
        ['pattern'=>'page/<alias>', 'route'=>'page/view']
    ]
];