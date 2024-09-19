<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActForOtherServerType enum
 */
final class ActForOtherServerType
{
    const enmActForOtherServerType_Null = 0;
    const enmActForOtherServerType_Mission = 1;
    const enmActForOtherServerType_Dance = 2;
    const enmActForOtherServerType_Competition = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActForOtherServerType_Null' => self::enmActForOtherServerType_Null,
            'enmActForOtherServerType_Mission' => self::enmActForOtherServerType_Mission,
            'enmActForOtherServerType_Dance' => self::enmActForOtherServerType_Dance,
            'enmActForOtherServerType_Competition' => self::enmActForOtherServerType_Competition,
        );
    }
}
}