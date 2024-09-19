<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ArenaNoti enum
 */
final class ArenaNoti
{
    const enmArenaNoti_Null = 0;
    const enmArenaNoti_Victory = 1;
    const enmArenaNoti_Defeat = 2;
    const enmArenaNoti_Defeated = 3;
    const enmArenaNoti_Victoryed = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmArenaNoti_Null' => self::enmArenaNoti_Null,
            'enmArenaNoti_Victory' => self::enmArenaNoti_Victory,
            'enmArenaNoti_Defeat' => self::enmArenaNoti_Defeat,
            'enmArenaNoti_Defeated' => self::enmArenaNoti_Defeated,
            'enmArenaNoti_Victoryed' => self::enmArenaNoti_Victoryed,
        );
    }
}
}