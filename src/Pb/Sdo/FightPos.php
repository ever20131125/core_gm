<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FightPos enum
 */
final class FightPos
{
    const enmFightPos_Normal = 0;
    const enmFightPos_Idol_1 = 0;
    const enmFightPos_Idol_2 = 1;
    const enmFightPos_Idol_3 = 2;
    const enmFightPos_Idol_4 = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFightPos_Normal' => self::enmFightPos_Normal,
            'enmFightPos_Idol_1' => self::enmFightPos_Idol_1,
            'enmFightPos_Idol_2' => self::enmFightPos_Idol_2,
            'enmFightPos_Idol_3' => self::enmFightPos_Idol_3,
            'enmFightPos_Idol_4' => self::enmFightPos_Idol_4,
        );
    }
}
}