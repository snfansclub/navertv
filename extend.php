<?php

namespace snfansclub\navertv;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addCustom(
               '[naver id={NUMBER1?}][/naver]',
               '<iframe src="https://tv.naver.com/embed/{NUMBER1}?autoPlay=true" frameborder="no" scrolling="no" marginwidth="0" marginheight="0" WIDTH="544" HEIGHT="306" allow="autoplay" allowfullscreen></iframe>'
            );
        })
];