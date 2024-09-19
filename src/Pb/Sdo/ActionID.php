<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActionID enum
 */
final class ActionID
{
    const enmActionID_None = 0;
    const enmActionID_Move = 1;
    const enmActionID_AIRoad = 2;
    const enmActionID_Trans = 3;
    const enmActionID_Swim = 4;
    const enmActionID_Land = 5;
    const enmActionID_SitStage = 11;
    const enmActionID_InviteStage = 12;
    const enmActionID_SitHouse = 13;
    const enmActionID_InviteHouse = 14;
    const enmActionID_SitPlane = 15;
    const enmActionID_InvitePlane = 16;
    const enmActionID_SitItemStage = 17;
    const enmActionID_InviteItemStage = 18;
    const enmActionID_HostPress = 100;
    const enmActionID_OnVehicle = 200;
    const enmActionID_InviteVehicle = 201;
    const enmActionID_DriveVehicle = 202;
    const enmActionID_OffVehicle = 203;
    const enmActionID_GetVehicle = 204;
    const enmActionID_KickInvite = 205;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActionID_None' => self::enmActionID_None,
            'enmActionID_Move' => self::enmActionID_Move,
            'enmActionID_AIRoad' => self::enmActionID_AIRoad,
            'enmActionID_Trans' => self::enmActionID_Trans,
            'enmActionID_Swim' => self::enmActionID_Swim,
            'enmActionID_Land' => self::enmActionID_Land,
            'enmActionID_SitStage' => self::enmActionID_SitStage,
            'enmActionID_InviteStage' => self::enmActionID_InviteStage,
            'enmActionID_SitHouse' => self::enmActionID_SitHouse,
            'enmActionID_InviteHouse' => self::enmActionID_InviteHouse,
            'enmActionID_SitPlane' => self::enmActionID_SitPlane,
            'enmActionID_InvitePlane' => self::enmActionID_InvitePlane,
            'enmActionID_SitItemStage' => self::enmActionID_SitItemStage,
            'enmActionID_InviteItemStage' => self::enmActionID_InviteItemStage,
            'enmActionID_HostPress' => self::enmActionID_HostPress,
            'enmActionID_OnVehicle' => self::enmActionID_OnVehicle,
            'enmActionID_InviteVehicle' => self::enmActionID_InviteVehicle,
            'enmActionID_DriveVehicle' => self::enmActionID_DriveVehicle,
            'enmActionID_OffVehicle' => self::enmActionID_OffVehicle,
            'enmActionID_GetVehicle' => self::enmActionID_GetVehicle,
            'enmActionID_KickInvite' => self::enmActionID_KickInvite,
        );
    }
}
}