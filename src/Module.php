<?php

namespace LevModel;

class Module {

    public function getConfig() {
        return require __DIR__ . '/config.php';
    }

    public function getDir() {
        return __DIR__;
    }

}
