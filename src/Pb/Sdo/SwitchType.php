<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SwitchType enum
 */
final class SwitchType
{
    const enmSwitch_UseNoCRMusic = 0;
    const enmSwitch_OneYuan = 1;
    const enmSwitch_Max = 32;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSwitch_UseNoCRMusic' => self::enmSwitch_UseNoCRMusic,
            'enmSwitch_OneYuan' => self::enmSwitch_OneYuan,
            'enmSwitch_Max' => self::enmSwitch_Max,
        );
    }
}
}