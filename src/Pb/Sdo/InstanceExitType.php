<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InstanceExitType enum
 */
final class InstanceExitType
{
    const enmInstanceExitType_Normal = 0;
    const enmInstanceExitType_BeKick = 1;
    const enmInstanceExitType_TimeOver = 2;
    const enmInstanceExitType_Offline = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmInstanceExitType_Normal' => self::enmInstanceExitType_Normal,
            'enmInstanceExitType_BeKick' => self::enmInstanceExitType_BeKick,
            'enmInstanceExitType_TimeOver' => self::enmInstanceExitType_TimeOver,
            'enmInstanceExitType_Offline' => self::enmInstanceExitType_Offline,
        );
    }
}
}