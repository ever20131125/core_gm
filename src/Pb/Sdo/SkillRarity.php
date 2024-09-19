<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SkillRarity enum
 */
final class SkillRarity
{
    const enmSkillRarity_None = 0;
    const enmSkillRarity_Lv1 = 1;
    const enmSkillRarity_Lv2 = 2;
    const enmSkillRarity_Lv3 = 3;
    const enmSkillRarity_Lv4 = 4;
    const enmSkillRarity_Num = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSkillRarity_None' => self::enmSkillRarity_None,
            'enmSkillRarity_Lv1' => self::enmSkillRarity_Lv1,
            'enmSkillRarity_Lv2' => self::enmSkillRarity_Lv2,
            'enmSkillRarity_Lv3' => self::enmSkillRarity_Lv3,
            'enmSkillRarity_Lv4' => self::enmSkillRarity_Lv4,
            'enmSkillRarity_Num' => self::enmSkillRarity_Num,
        );
    }
}
}