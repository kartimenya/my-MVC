<?php

namespace core\middleware;

final class Guest
{
    
    public function handle()
    {
        if (check_auth()) {
            redirect('/');
       }
    }
}