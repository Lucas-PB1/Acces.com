<?php
function contains($value, $search)
{
    if (strpos($value, $search) !== false) {
        return true;
    } else {
        return false;
    }
}
