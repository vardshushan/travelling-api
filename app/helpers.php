<?php

function svg_path($path)
{
    return asset("assets/img/svgs/{$path}.svg");
}

function active_link(...$route)
{
    if (request()->routeIs($route)) {
        return 'active';
    }
}

function active_link_admin(...$route)
{
    if (!request()->routeIs($route)) {
        return 'collapsed';
    }
}

function site_page($view, $data = [])
{
    return view("pages.$view", $data);
}

function admin_page($page, $data = [], $view = 'index')
{
    return view("admin.pages.$page.$view", $data);
}

if (!function_exists('to_route')) {
    function to_route($route, $parameters = [])
    {
        return redirect()->route($route, $parameters);
    }
}

if (!function_exists('to_back')) {
    function to_back($key = null, $value = null)
    {
        return $key ? redirect()->back()->with($key, $value) : redirect()->back();
    }
}
