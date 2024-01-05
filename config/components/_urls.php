<?php
return [
//    '/' => 'main/default/index',
    '<controller>/<action>' => '<controller>/<action>',

    // Данные из модуля External
    '<module:(external)>/<controller:(telegram)>/<botname>/<action:(hook|set|delete|get|message)>' => '<module>/<controller>/<action>',
    '<module:(external)>/<controller:(icq)>/<botname>/<action:(self|event|message)>' => '<module>/<controller>/<action>',

    // Данные для работы скрипта
    '<module:(api)>/<controller:(servers|users|news)>' => '<module>/<controller>/index',

];