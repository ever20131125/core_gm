<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AnchorEventType enum
 */
final class AnchorEventType
{
    const enmAnchorEventType_None = 0;
    const enmAnchorEventType_Online = 1;
    const enmAnchorEventType_Puzzle = 2;
    const enmAnchorEventType_Other = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAnchorEventType_None' => self::enmAnchorEventType_None,
            'enmAnchorEventType_Online' => self::enmAnchorEventType_Online,
            'enmAnchorEventType_Puzzle' => self::enmAnchorEventType_Puzzle,
            'enmAnchorEventType_Other' => self::enmAnchorEventType_Other,
        );
    }
}
}