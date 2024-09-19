<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TipOffType enum
 */
final class TipOffType
{
    const enmTipOff_None = 0;
    const enmTipOff_RoleInfo = 1;
    const enmTipOff_Photo = 2;
    const enmTipOff_Voice = 4;
    const enmTipOff_Chat = 8;
    const enmTipOff_Cheat = 16;
    const enmTipOff_Brush = 32;
    const enmTipOff_Custom = 64;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTipOff_None' => self::enmTipOff_None,
            'enmTipOff_RoleInfo' => self::enmTipOff_RoleInfo,
            'enmTipOff_Photo' => self::enmTipOff_Photo,
            'enmTipOff_Voice' => self::enmTipOff_Voice,
            'enmTipOff_Chat' => self::enmTipOff_Chat,
            'enmTipOff_Cheat' => self::enmTipOff_Cheat,
            'enmTipOff_Brush' => self::enmTipOff_Brush,
            'enmTipOff_Custom' => self::enmTipOff_Custom,
        );
    }
}
}