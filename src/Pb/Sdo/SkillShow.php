<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SkillShow enum
 */
final class SkillShow
{
    const enmSkillShow_None = 0;
    const enmSkillShow_Positive = 1;
    const enmSkillShow_Negative = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSkillShow_None' => self::enmSkillShow_None,
            'enmSkillShow_Positive' => self::enmSkillShow_Positive,
            'enmSkillShow_Negative' => self::enmSkillShow_Negative,
        );
    }
}
}