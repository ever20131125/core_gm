<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MallType enum
 */
final class MallType
{
    const enmMallType_Normal = 0;
    const enmMallType_Welfare = 1;
    const enmMallType_Prest = 2;
    const enmMallType_GWealth = 3;
    const enmMallType_Soul = 4;
    const enmMallType_Black = 5;
    const enmMallType_Achieve = 6;
    const enmMallType_Kiki = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMallType_Normal' => self::enmMallType_Normal,
            'enmMallType_Welfare' => self::enmMallType_Welfare,
            'enmMallType_Prest' => self::enmMallType_Prest,
            'enmMallType_GWealth' => self::enmMallType_GWealth,
            'enmMallType_Soul' => self::enmMallType_Soul,
            'enmMallType_Black' => self::enmMallType_Black,
            'enmMallType_Achieve' => self::enmMallType_Achieve,
            'enmMallType_Kiki' => self::enmMallType_Kiki,
        );
    }
}
}