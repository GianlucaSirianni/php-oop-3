<?php

include_once __DIR__ . '/../traits/workers.php';

class Employer
{
    use Worker;

    public $name;
    public $eta;


    use Worker;

    public function __construct(
        String $name,
        Int $eta

    ) {
        $this->name = $name;
        $this->eta = $eta;
    }
}