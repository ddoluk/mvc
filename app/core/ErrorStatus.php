<?php

class ErrorStatus
{
    public function getError404(){

        return 'HTTP/1.0 404 Not Found';

    }

    public function getError403(){

        return 'HTTP/1.0 403 Forbidden';

    }

}