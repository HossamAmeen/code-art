<?php

/**
 * @param string $routeName
 * @return string
 */
function is_active(string $routeName)
{
    return null !== request()->segment(2) && request()->segment(2) == $routeName ? 'active' : '';
}

function edit_profle_is_active(string $routeName)
{
    return null !== request()->segment(2) && request()->segment(2) == $routeName && request()->segment(4) == "edit" ? 'active' : '';
}
