<?php namespace Mortimer\Rootrelativeurls;

use \Illuminate\Routing\UrlGenerator;

class RootrelativeUrlGenerator extends UrlGenerator {
    public function route($name, $parameters = [], $absolute = true) {
        return parent::route($name, $parameters, false);
    }

    public function action($action, $parameters = [], $absolute = true) {
        return parent::action($action, $parameters, false);
    }
}
