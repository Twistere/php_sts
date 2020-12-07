<?php

class delete {
    protected $db;

    function __construct(Db $db)
    {
        $this->db = $db;
    }
}
