<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * OnlineState enum
 */
final class OnlineState
{
    const enmOnlineState_Offline = 0;
    const enmOnlineState_Normal = 1;
    const enmOnlineState_Channel = 2;
    const enmOnlineState_Room = 3;
    const enmOnlineState_Dancing = 4;
    const enmOnlineState_Busy = 5;
    const enmOnlineState_Queue = 6;
    const enmOnlineState_Reconnecting = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmOnlineState_Offline' => self::enmOnlineState_Offline,
            'enmOnlineState_Normal' => self::enmOnlineState_Normal,
            'enmOnlineState_Channel' => self::enmOnlineState_Channel,
            'enmOnlineState_Room' => self::enmOnlineState_Room,
            'enmOnlineState_Dancing' => self::enmOnlineState_Dancing,
            'enmOnlineState_Busy' => self::enmOnlineState_Busy,
            'enmOnlineState_Queue' => self::enmOnlineState_Queue,
            'enmOnlineState_Reconnecting' => self::enmOnlineState_Reconnecting,
        );
    }
}
}