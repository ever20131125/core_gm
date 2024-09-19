<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RedBagType enum
 */
final class RedBagType
{
    const enmRedBagType_None = 0;
    const enmRedBagType_Zone = 1;
    const enmRedBagType_Room = 2;
    const enmRedBagType_Guild = 3;
    const enmRedBagType_System = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRedBagType_None' => self::enmRedBagType_None,
            'enmRedBagType_Zone' => self::enmRedBagType_Zone,
            'enmRedBagType_Room' => self::enmRedBagType_Room,
            'enmRedBagType_Guild' => self::enmRedBagType_Guild,
            'enmRedBagType_System' => self::enmRedBagType_System,
        );
    }
}
}