<?php
declare(strict_types=1);
/**
 * PasswordLock - Secure your password using password lock.
 *
 * @license MIT License. (https://github.com/Commander-Ant-Screwbin-Games/password-lock/blob/master/license)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * https://github.com/Commander-Ant-Screwbin-Games/firecms/tree/master/src/Core
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @package Commander-Ant-Screwbin-Games/password-lock.
 */

defined('PASSWORD_PBKDF2') || define('PASSWORD_PBKDF2', 5506);

/**
 * Determine if the hash is pbkdf2.
 *
 * @param string $hash The hash to check.
 *
 * @return bool Returns true if the hash is pbkdf2 and false if not.
 */
function is_pbkdf2(string $hash): bool
{
    $component = substr($hash, 0, 8);
    return (bool) ($component == '$pbkdf2$');
}
