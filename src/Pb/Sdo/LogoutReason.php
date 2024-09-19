<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LogoutReason enum
 */
final class LogoutReason
{
    const enmLogoutReason_Normal = 0;
    const enmLogoutReason_Unknown = 1;
    const enmLogoutReason_Disconnnected = 2;
    const enmLogoutReason_NoHeartBeat = 3;
    const enmLogoutReason_Relogin = 4;
    const enmLogoutReason_RoleClosed = 5;
    const enmLogoutReason_AntiPlugin = 6;
    const enmLogoutReason_VersionError = 7;
    const enmLogoutReason_MidNight = 8;
    const enmLogoutReason_ServerStop = 9;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmLogoutReason_Normal' => self::enmLogoutReason_Normal,
            'enmLogoutReason_Unknown' => self::enmLogoutReason_Unknown,
            'enmLogoutReason_Disconnnected' => self::enmLogoutReason_Disconnnected,
            'enmLogoutReason_NoHeartBeat' => self::enmLogoutReason_NoHeartBeat,
            'enmLogoutReason_Relogin' => self::enmLogoutReason_Relogin,
            'enmLogoutReason_RoleClosed' => self::enmLogoutReason_RoleClosed,
            'enmLogoutReason_AntiPlugin' => self::enmLogoutReason_AntiPlugin,
            'enmLogoutReason_VersionError' => self::enmLogoutReason_VersionError,
            'enmLogoutReason_MidNight' => self::enmLogoutReason_MidNight,
            'enmLogoutReason_ServerStop' => self::enmLogoutReason_ServerStop,
        );
    }
}
}