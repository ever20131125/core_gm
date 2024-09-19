<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VisitAuth enum
 */
final class VisitAuth
{
    const enmVisitAuth_All = 0;
    const enmVisitAuth_Friend = 1;
    const enmVisitAuth_Password = 2;
    const enmVisitAuth_Forbid = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmVisitAuth_All' => self::enmVisitAuth_All,
            'enmVisitAuth_Friend' => self::enmVisitAuth_Friend,
            'enmVisitAuth_Password' => self::enmVisitAuth_Password,
            'enmVisitAuth_Forbid' => self::enmVisitAuth_Forbid,
        );
    }
}
}