<?php

namespace core\middleware;

final class Auth
{
    public function handle()
    {
        if (!check_auth()) {
            redirect('/register');
       }
    }
}
