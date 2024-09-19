<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VIPConfigType enum
 */
final class VIPConfigType
{
    const enmVIPConfig_Money = 0;
    const enmVIPConfig_ExpDayLimit = 1;
    const enmVIPConfig_GCoinDayLimit = 2;
    const enmVIPConfig_StaminaLimit = 3;
    const enmVIPConfig_DanceExpMul = 4;
    const enmVIPConfig_DanceGCoinMul = 5;
    const enmVIPConfig_Max = 32;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmVIPConfig_Money' => self::enmVIPConfig_Money,
            'enmVIPConfig_ExpDayLimit' => self::enmVIPConfig_ExpDayLimit,
            'enmVIPConfig_GCoinDayLimit' => self::enmVIPConfig_GCoinDayLimit,
            'enmVIPConfig_StaminaLimit' => self::enmVIPConfig_StaminaLimit,
            'enmVIPConfig_DanceExpMul' => self::enmVIPConfig_DanceExpMul,
            'enmVIPConfig_DanceGCoinMul' => self::enmVIPConfig_DanceGCoinMul,
            'enmVIPConfig_Max' => self::enmVIPConfig_Max,
        );
    }
}
}