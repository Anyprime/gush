<?php

/*
 * This file is part of Gush package.
 *
 * (c) 2013-2014 Luis Cordova <cordoval@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Gush\Util;

final class StringUtil
{
    public static function splitLines($input)
    {
        $input = trim($input);

        return ((string) $input === '') ? [] : preg_split('{\r?\n}', $input);
    }
}
