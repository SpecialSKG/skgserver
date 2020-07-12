<?php

function setActiveLine($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}

function setActiveColor($routeName)
{
    return request()->routeIs($routeName) ? 'activo' : 'blanco';
}
