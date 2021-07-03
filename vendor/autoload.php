<?php

/**
 *      [Discuz! X Pack] (C)2021-9999 Discuz! X Community Team.
 *      This is a freeware, use is subject to license terms
 *
 *      $Id$
 */

spl_autoload_register(function ($class) {

    // 命名空间前缀对应的基础目录
    $base_dir = __DIR__ . '/src/';

    // 命名空间前缀替换为基础目录，
    // 将相对类名中命名空间分隔符替换为目录分隔符，
    // 附加 .php
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    // 需要把路径转换为小写
    $file = strtolower($file);

    // 如果文件存在，加载它
    if (file_exists($file)) {
        require $file;
    }
});
