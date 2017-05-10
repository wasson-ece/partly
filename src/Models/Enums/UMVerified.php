<?php
/**
 * Created by PhpStorm.
 * User: chip
 * Date: 5/10/17
 * Time: 11:46 AM
 */

namespace Wasson_ECE\Partly\Enums;

use Wasson_ECE\PHPEnum\BasicEnum;

class UMVerified extends BasicEnum
{
    const NotFlagged = 0;
    const NeedsVerification = 1;
    const Verified = 100;
}