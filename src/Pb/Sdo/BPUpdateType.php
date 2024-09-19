<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BPUpdateType enum
 */
final class BPUpdateType
{
    const enmBPUpdateType_None = 0;
    const enmBPUpdateType_EXP = 1;
    const enmBPUpdateType_ActiveLimit = 2;
    const enmBPUpdateType_Exchange = 3;
    const enmBPUpdateType_Purchase = 4;
    const enmBPUpdateType_Level = 5;
    const enmBPUpdateType_Active = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmBPUpdateType_None' => self::enmBPUpdateType_None,
            'enmBPUpdateType_EXP' => self::enmBPUpdateType_EXP,
            'enmBPUpdateType_ActiveLimit' => self::enmBPUpdateType_ActiveLimit,
            'enmBPUpdateType_Exchange' => self::enmBPUpdateType_Exchange,
            'enmBPUpdateType_Purchase' => self::enmBPUpdateType_Purchase,
            'enmBPUpdateType_Level' => self::enmBPUpdateType_Level,
            'enmBPUpdateType_Active' => self::enmBPUpdateType_Active,
        );
    }
}
}