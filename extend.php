<?php

namespace snfansclub\navertv;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addCustom(
               '[naver id={NUMBER1?}][/naver]',
               'l<iframe style="height: 416px; width: 100%" src="//tv.naver.com/embed/{NUMBER1}" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe>'
            );
        })
];
