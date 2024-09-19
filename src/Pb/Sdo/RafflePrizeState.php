<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RafflePrizeState enum
 */
final class RafflePrizeState
{
    const enmRafflePrizeState_Normal = 1;
    const enmRafflePrizeState_Ban = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRafflePrizeState_Normal' => self::enmRafflePrizeState_Normal,
            'enmRafflePrizeState_Ban' => self::enmRafflePrizeState_Ban,
        );
    }
}
}