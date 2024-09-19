<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoundRule enum
 */
final class RoundRule
{
    const enmRoundRuleUnit_Space = 0;
    const enmRoundRuleUnit_A = 1;
    const enmRoundRuleUnit_AA = 2;
    const enmRoundRuleUnit_AB = 3;
    const enmRoundRuleUnit_AAA = 4;
    const enmRoundRuleUnit_AAB = 5;
    const enmRoundRuleUnit_ABA = 6;
    const enmRoundRuleUnit_ABC = 7;
    const enmRoundRuleUnit_Mask = 15;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRoundRuleUnit_Space' => self::enmRoundRuleUnit_Space,
            'enmRoundRuleUnit_A' => self::enmRoundRuleUnit_A,
            'enmRoundRuleUnit_AA' => self::enmRoundRuleUnit_AA,
            'enmRoundRuleUnit_AB' => self::enmRoundRuleUnit_AB,
            'enmRoundRuleUnit_AAA' => self::enmRoundRuleUnit_AAA,
            'enmRoundRuleUnit_AAB' => self::enmRoundRuleUnit_AAB,
            'enmRoundRuleUnit_ABA' => self::enmRoundRuleUnit_ABA,
            'enmRoundRuleUnit_ABC' => self::enmRoundRuleUnit_ABC,
            'enmRoundRuleUnit_Mask' => self::enmRoundRuleUnit_Mask,
        );
    }
}
}