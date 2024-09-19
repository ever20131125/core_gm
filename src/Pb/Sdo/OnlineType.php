<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * OnlineType enum
 */
final class OnlineType
{
    const enmOnlineType_Login = 0;
    const enmOnlineType_HeartBeat = 1;
    const enmOnlineType_Update = 2;
    const enmOnlineType_Offline = 3;
    const enmOnlineType_Reconnect = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmOnlineType_Login' => self::enmOnlineType_Login,
            'enmOnlineType_HeartBeat' => self::enmOnlineType_HeartBeat,
            'enmOnlineType_Update' => self::enmOnlineType_Update,
            'enmOnlineType_Offline' => self::enmOnlineType_Offline,
            'enmOnlineType_Reconnect' => self::enmOnlineType_Reconnect,
        );
    }
}
}