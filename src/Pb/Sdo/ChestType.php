<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChestType enum
 */
final class ChestType
{
    const enmChest_None = 0;
    const enmChest_SmallGame = 1;
    const enmChest_Stage = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmChest_None' => self::enmChest_None,
            'enmChest_SmallGame' => self::enmChest_SmallGame,
            'enmChest_Stage' => self::enmChest_Stage,
        );
    }
}
}