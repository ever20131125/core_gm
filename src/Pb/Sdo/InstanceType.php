<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InstanceType enum
 */
final class InstanceType
{
    const enmInstanceType_Dance = 0;
    const enmInstanceType_GuildRoom = 1;
    const enmInstanceType_Boat = 2;
    const enmInstanceType_Wheel = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmInstanceType_Dance' => self::enmInstanceType_Dance,
            'enmInstanceType_GuildRoom' => self::enmInstanceType_GuildRoom,
            'enmInstanceType_Boat' => self::enmInstanceType_Boat,
            'enmInstanceType_Wheel' => self::enmInstanceType_Wheel,
        );
    }
}
}