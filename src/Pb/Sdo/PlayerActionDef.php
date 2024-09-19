<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlayerActionDef enum
 */
final class PlayerActionDef
{
    const enmPlayerAction_Nonu = 0;
    const enmPlayerAction_OSUPlayTrain = 1;
    const enmPlayerAction_TaiKoPlayTrain = 2;
    const enmPlayerAction_AUPlayTrain = 3;
    const enmPlayerAction_ChatOneWord = 4;
    const enmPlayerAction_CompleteDialogue = 5;
    const enmPlayerAction_AddPlayerInfo = 6;
    const enmPlayerAction_CreateRoom = 7;
    const enmPlayerAction_Fixup = 8;
    const enmPlayerAction_Competition = 9;
    const enmPlayerAction_ArenaPK = 10;
    const enmPlayerAction_WorldTour = 11;
    const enmPlayerAction_DownLoadSong = 12;
    const enmPlayerAction_Coin10Lottery = 13;
    const enmPlayerAction_FateTree = 14;
    const enmPlayerAction_DoneSetting = 15;
    const enmPlayerAction_DownLoadAvatar = 16;
    const enmPlayerAction_DownLoadUI = 17;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmPlayerAction_Nonu' => self::enmPlayerAction_Nonu,
            'enmPlayerAction_OSUPlayTrain' => self::enmPlayerAction_OSUPlayTrain,
            'enmPlayerAction_TaiKoPlayTrain' => self::enmPlayerAction_TaiKoPlayTrain,
            'enmPlayerAction_AUPlayTrain' => self::enmPlayerAction_AUPlayTrain,
            'enmPlayerAction_ChatOneWord' => self::enmPlayerAction_ChatOneWord,
            'enmPlayerAction_CompleteDialogue' => self::enmPlayerAction_CompleteDialogue,
            'enmPlayerAction_AddPlayerInfo' => self::enmPlayerAction_AddPlayerInfo,
            'enmPlayerAction_CreateRoom' => self::enmPlayerAction_CreateRoom,
            'enmPlayerAction_Fixup' => self::enmPlayerAction_Fixup,
            'enmPlayerAction_Competition' => self::enmPlayerAction_Competition,
            'enmPlayerAction_ArenaPK' => self::enmPlayerAction_ArenaPK,
            'enmPlayerAction_WorldTour' => self::enmPlayerAction_WorldTour,
            'enmPlayerAction_DownLoadSong' => self::enmPlayerAction_DownLoadSong,
            'enmPlayerAction_Coin10Lottery' => self::enmPlayerAction_Coin10Lottery,
            'enmPlayerAction_FateTree' => self::enmPlayerAction_FateTree,
            'enmPlayerAction_DoneSetting' => self::enmPlayerAction_DoneSetting,
            'enmPlayerAction_DownLoadAvatar' => self::enmPlayerAction_DownLoadAvatar,
            'enmPlayerAction_DownLoadUI' => self::enmPlayerAction_DownLoadUI,
        );
    }
}
}