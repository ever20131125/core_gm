<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExitRoomReason enum
 */
final class ExitRoomReason
{
    const enmExitRoomReason_Normal = 0;
    const enmExitRoomReason_Unknown = 1;
    const enmExitRoomReason_BeKicked = 2;
    const enmExitRoomReason_RoomDelete = 3;
    const enmExitRoomReason_ServerRestart = 4;
    const enmExitRoomReason_Inactive = 5;
    const enmExitRoomReason_LoadingTimeOut = 6;
    const enmExitRoomReason_ChangeRoom = 7;
    const enmExitRoomReason_StoryEnd = 8;
    const enmExitRoomReason_RoomDeleteNoPlayer = 9;
    const enmExitRoomReason_ObserveExitGame = 10;
    const enmExitRoomReason_ErrorRoomState = 11;
    const enmExitRoomReason_JoinRoomFailed = 12;
    const enmExitRoomReason_EnterHouseFailed = 13;
    const enmExitRoomReason_EnterSNSRoomFailed = 14;
    const enmExitRoomReason_Offline = 15;
    const enmExitRoomReason_WeddingRoomTimeOver = 16;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmExitRoomReason_Normal' => self::enmExitRoomReason_Normal,
            'enmExitRoomReason_Unknown' => self::enmExitRoomReason_Unknown,
            'enmExitRoomReason_BeKicked' => self::enmExitRoomReason_BeKicked,
            'enmExitRoomReason_RoomDelete' => self::enmExitRoomReason_RoomDelete,
            'enmExitRoomReason_ServerRestart' => self::enmExitRoomReason_ServerRestart,
            'enmExitRoomReason_Inactive' => self::enmExitRoomReason_Inactive,
            'enmExitRoomReason_LoadingTimeOut' => self::enmExitRoomReason_LoadingTimeOut,
            'enmExitRoomReason_ChangeRoom' => self::enmExitRoomReason_ChangeRoom,
            'enmExitRoomReason_StoryEnd' => self::enmExitRoomReason_StoryEnd,
            'enmExitRoomReason_RoomDeleteNoPlayer' => self::enmExitRoomReason_RoomDeleteNoPlayer,
            'enmExitRoomReason_ObserveExitGame' => self::enmExitRoomReason_ObserveExitGame,
            'enmExitRoomReason_ErrorRoomState' => self::enmExitRoomReason_ErrorRoomState,
            'enmExitRoomReason_JoinRoomFailed' => self::enmExitRoomReason_JoinRoomFailed,
            'enmExitRoomReason_EnterHouseFailed' => self::enmExitRoomReason_EnterHouseFailed,
            'enmExitRoomReason_EnterSNSRoomFailed' => self::enmExitRoomReason_EnterSNSRoomFailed,
            'enmExitRoomReason_Offline' => self::enmExitRoomReason_Offline,
            'enmExitRoomReason_WeddingRoomTimeOver' => self::enmExitRoomReason_WeddingRoomTimeOver,
        );
    }
}
}