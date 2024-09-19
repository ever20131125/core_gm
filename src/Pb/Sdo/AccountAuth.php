<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AccountAuth enum
 */
final class AccountAuth
{
    const enmAccountAuth_Normal = 0;
    const enmAccountAuth_GM = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAccountAuth_Normal' => self::enmAccountAuth_Normal,
            'enmAccountAuth_GM' => self::enmAccountAuth_GM,
        );
    }
}
}