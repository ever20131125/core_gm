<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlayerChannelState enum
 */
final class PlayerChannelState
{
    const enmPlayerChannelState_None = 0;
    const enmPlayerChannelState_InChannel = 1;
    const enmPlayerChannelState_InRoom = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPlayerChannelState_None' => self::enmPlayerChannelState_None,
            'enmPlayerChannelState_InChannel' => self::enmPlayerChannelState_InChannel,
            'enmPlayerChannelState_InRoom' => self::enmPlayerChannelState_InRoom,
        );
    }
}
}