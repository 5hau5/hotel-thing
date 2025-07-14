<?php

if (! function_exists('current_role')) {
    function current_role()
    {
        return session('fake_role', 'visitor'); // default to visitor
    }
}
