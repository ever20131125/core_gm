<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ConnectionState enum
 */
final class ConnectionState
{
    const enmConnectionState_None = 0;
    const enmConnectionState_Normal = 1;
    const enmConnectionState_Offline = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmConnectionState_None' => self::enmConnectionState_None,
            'enmConnectionState_Normal' => self::enmConnectionState_Normal,
            'enmConnectionState_Offline' => self::enmConnectionState_Offline,
        );
    }
}
}