<?php
/**
 * Auto generated from define.proto at 2022-01-18 09:01:36
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CondType enum
 */
final class CondType
{
    const enmCondType_None = 0;
    const enmCondType_Role_Level = 10001;
    const enmCondType_More_Score = 20001;
    const enmCondType_More_Combo = 20002;
    const enmCondType_More_Grade = 20003;
    const enmCondType_Less_Miss = 20004;
    const enmCondType_More_Accuracy = 20005;
    const enmCondType_More_SPerfect = 20006;
    const enmCondType_More_Perfect = 20007;
    const enmCondType_More_CSPerfect = 20008;
    const enmCondType_AllCombo = 20009;
    const enmCondType_AllPerfect = 20010;
    const enmCondType_AllSPerfect = 20011;
    const enmCondType_Equal_Great = 20012;
    const enmCondType_Equal_SPerfect = 20013;
    const enmCondType_Equal_Perfect = 20014;
    const enmCondType_ScoreContain_X_Y = 20015;
    const enmCondType_ScoreContain_X_Y_Z = 20016;
    const enmCondType_ScoreContain_XYs = 20017;
    const enmCondType_ScoreEnd_X = 20018;
    const enmCondType_More_Bomb = 20019;
    const enmCondType_Dance_Source = 20020;
    const enmCondType_Dance_GamePlay = 20021;
    const enmCondType_Dance_GameMode = 20022;
    const enmCondType_Win_Source = 20023;
    const enmCondType_Qualify_Title = 20024;
    const enmCondType_More_CPerfect = 20025;
    const enmCondType_Task_MusicWork = 30001;
    const enmCondType_Item_Add = 40001;
    const enmCondType_Item_Donate = 41001;
    const enmCondType_House_Level = 50001;
    const enmCondType_House_Merge = 50101;
    const enmCondType_House_Produce = 50102;
    const enmCondType_House_Make = 50201;
    const enmCondType_House_Dress = 50202;
    const enmCondType_House_Visit = 50301;
    const enmCondType_House_Like = 50302;
    const enmCondType_Friend_Count = 60001;
    const enmCondType_Friend_Favorability = 60002;
    const enmCondType_TreeKey_Collect = 80001;
    const enmCondType_TreeKey_CollectAll = 80002;
    const enmCondType_UseScore = 90001;
    const enmCondType_SendFameTotal = 90002;
    const enmCondType_GiveLike = 90003;
    const enmCondType_AcheveCupSilver = 90004;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCondType_None' => self::enmCondType_None,
            'enmCondType_Role_Level' => self::enmCondType_Role_Level,
            'enmCondType_More_Score' => self::enmCondType_More_Score,
            'enmCondType_More_Combo' => self::enmCondType_More_Combo,
            'enmCondType_More_Grade' => self::enmCondType_More_Grade,
            'enmCondType_Less_Miss' => self::enmCondType_Less_Miss,
            'enmCondType_More_Accuracy' => self::enmCondType_More_Accuracy,
            'enmCondType_More_SPerfect' => self::enmCondType_More_SPerfect,
            'enmCondType_More_Perfect' => self::enmCondType_More_Perfect,
            'enmCondType_More_CSPerfect' => self::enmCondType_More_CSPerfect,
            'enmCondType_AllCombo' => self::enmCondType_AllCombo,
            'enmCondType_AllPerfect' => self::enmCondType_AllPerfect,
            'enmCondType_AllSPerfect' => self::enmCondType_AllSPerfect,
            'enmCondType_Equal_Great' => self::enmCondType_Equal_Great,
            'enmCondType_Equal_SPerfect' => self::enmCondType_Equal_SPerfect,
            'enmCondType_Equal_Perfect' => self::enmCondType_Equal_Perfect,
            'enmCondType_ScoreContain_X_Y' => self::enmCondType_ScoreContain_X_Y,
            'enmCondType_ScoreContain_X_Y_Z' => self::enmCondType_ScoreContain_X_Y_Z,
            'enmCondType_ScoreContain_XYs' => self::enmCondType_ScoreContain_XYs,
            'enmCondType_ScoreEnd_X' => self::enmCondType_ScoreEnd_X,
            'enmCondType_More_Bomb' => self::enmCondType_More_Bomb,
            'enmCondType_Dance_Source' => self::enmCondType_Dance_Source,
            'enmCondType_Dance_GamePlay' => self::enmCondType_Dance_GamePlay,
            'enmCondType_Dance_GameMode' => self::enmCondType_Dance_GameMode,
            'enmCondType_Win_Source' => self::enmCondType_Win_Source,
            'enmCondType_Qualify_Title' => self::enmCondType_Qualify_Title,
            'enmCondType_More_CPerfect' => self::enmCondType_More_CPerfect,
            'enmCondType_Task_MusicWork' => self::enmCondType_Task_MusicWork,
            'enmCondType_Item_Add' => self::enmCondType_Item_Add,
            'enmCondType_Item_Donate' => self::enmCondType_Item_Donate,
            'enmCondType_House_Level' => self::enmCondType_House_Level,
            'enmCondType_House_Merge' => self::enmCondType_House_Merge,
            'enmCondType_House_Produce' => self::enmCondType_House_Produce,
            'enmCondType_House_Make' => self::enmCondType_House_Make,
            'enmCondType_House_Dress' => self::enmCondType_House_Dress,
            'enmCondType_House_Visit' => self::enmCondType_House_Visit,
            'enmCondType_House_Like' => self::enmCondType_House_Like,
            'enmCondType_Friend_Count' => self::enmCondType_Friend_Count,
            'enmCondType_Friend_Favorability' => self::enmCondType_Friend_Favorability,
            'enmCondType_TreeKey_Collect' => self::enmCondType_TreeKey_Collect,
            'enmCondType_TreeKey_CollectAll' => self::enmCondType_TreeKey_CollectAll,
            'enmCondType_UseScore' => self::enmCondType_UseScore,
            'enmCondType_SendFameTotal' => self::enmCondType_SendFameTotal,
            'enmCondType_GiveLike' => self::enmCondType_GiveLike,
            'enmCondType_AcheveCupSilver' => self::enmCondType_AcheveCupSilver,
        );
    }
}
}