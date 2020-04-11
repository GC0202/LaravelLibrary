<?php

// +----------------------------------------------------------------------
// | LaravelLibrary 7.0 for Laravel 7.0
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/LaravelLibrary
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/LaravelLibrary
// | github 仓库地址 ：https://github.com/GC0202/LaravelLibrary
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/laravel-library
// +----------------------------------------------------------------------

if (!function_exists('sysconf')){
    /**
     * 获取或配置系统参数
     * @param string $name
     * @param null $value
     * @return string
     */
    function sysconf($name = '', $value = null){
        if (is_null($value) && is_string($name)) {
            return (new DtApp\LaravelLibrary\service\SystemService)->get($name);
        } else {
            return (new DtApp\LaravelLibrary\service\SystemService)->set($name, $value);
        }
    }
}

if (!function_exists('sysdata')) {
    /**
     * JSON 数据读取与存储
     * @param string $name 数据名称
     * @param mixed $value 数据内容
     * @return mixed
     */
    function sysdata($name, $value = null)
    {
        if (is_null($value)) {
            return (new DtApp\LaravelLibrary\service\SystemService)->getData($name);
        } else {
            return (new DtApp\LaravelLibrary\service\SystemService)->setData($name, $value);
        }
    }
}
