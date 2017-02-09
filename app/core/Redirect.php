<?php

class Redirect
{
    public function redirectTo($path)
    {
        header("Location: $path");
    }
}