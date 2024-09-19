<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BagType enum
 */
final class BagType
{
    const enmBagType_Normal = 0;
    const enmBagType_House = 1;
    const enmBagType_Town = 2;
    const enmBagType_Pet = 3;
    const enmBagType_Box = 4;
    const enmBagType_Locker = 5;
    const enmBagType_Plan = 6;
    const enmBagType_Unlock = 7;
    const enmBagType_All = 10;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBagType_Normal' => self::enmBagType_Normal,
            'enmBagType_House' => self::enmBagType_House,
            'enmBagType_Town' => self::enmBagType_Town,
            'enmBagType_Pet' => self::enmBagType_Pet,
            'enmBagType_Box' => self::enmBagType_Box,
            'enmBagType_Locker' => self::enmBagType_Locker,
            'enmBagType_Plan' => self::enmBagType_Plan,
            'enmBagType_Unlock' => self::enmBagType_Unlock,
            'enmBagType_All' => self::enmBagType_All,
        );
    }
}
}