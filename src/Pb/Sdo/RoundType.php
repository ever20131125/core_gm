<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoundType enum
 */
final class RoundType
{
    const enmRoundType_None = 0;
    const enmRoundType_Normal = 1;
    const enmRoundType_FeverTime = 2;
    const enmRoundType_ShowTime = 3;
    const enmRoundType_RestTime = 4;
    const enmRoundType_TypeMask = 255;
    const enmRoundType_0_Rule = 0;
    const enmRoundType_4_Rule = 256;
    const enmRoundType_8_Rule = 512;
    const enmRoundType_12_Rule = 768;
    const enmRoundType_RuleMask = 3840;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoundType_None' => self::enmRoundType_None,
            'enmRoundType_Normal' => self::enmRoundType_Normal,
            'enmRoundType_FeverTime' => self::enmRoundType_FeverTime,
            'enmRoundType_ShowTime' => self::enmRoundType_ShowTime,
            'enmRoundType_RestTime' => self::enmRoundType_RestTime,
            'enmRoundType_TypeMask' => self::enmRoundType_TypeMask,
            'enmRoundType_0_Rule' => self::enmRoundType_0_Rule,
            'enmRoundType_4_Rule' => self::enmRoundType_4_Rule,
            'enmRoundType_8_Rule' => self::enmRoundType_8_Rule,
            'enmRoundType_12_Rule' => self::enmRoundType_12_Rule,
            'enmRoundType_RuleMask' => self::enmRoundType_RuleMask,
        );
    }
}
}