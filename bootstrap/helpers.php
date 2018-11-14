<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2018/5/31
 * Time: 14:21
 */

//将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
//对帖子内容进行摘要，SEO
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}