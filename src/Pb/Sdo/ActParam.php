<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActParam enum
 */
final class ActParam
{
    const enmActParam_NULL = 0;
    const enmActParam_PayMoney = 1;
    const enmActParam_PayTodayMoney = 2;
    const enmActParam_PayTotalMoney = 3;
    const enmActParam_SpendMoney = 4;
    const enmActParam_SpendTodayMoney = 5;
    const enmActParam_SpendTotalMoney = 6;
    const enmActParam_AddScore = 7;
    const enmActParam_AddTodayScore = 8;
    const enmActParam_AddTotalScore = 9;
    const enmActParam_SpendScore = 10;
    const enmActParam_SpendTodayScore = 11;
    const enmActParam_SpendTotalScore = 12;
    const enmActParam_AddCoin = 13;
    const enmActParam_AddTodayCoin = 14;
    const enmActParam_AddTotalCoin = 15;
    const enmActParam_SpendCoin = 16;
    const enmActParam_SpendTodayCoin = 17;
    const enmActParam_SpendTotalCoin = 18;
    const enmActParam_Level = 19;
    const enmActParam_VIP = 20;
    const enmActParam_HeartValue = 21;
    const enmActParam_Exp = 22;
    const enmActParam_OnlineTime = 100;
    const enmActParam_TodayLoginCnt = 101;
    const enmActParam_TotalLoginCnt = 103;
    const enmActParam_StartTime = 104;
    const enmActParam_EndTime = 105;
    const enmActParam_StartDate = 106;
    const enmActParam_EndDate = 107;
    const enmActParam_ItemID = 108;
    const enmActParam_TaskCnt = 109;
    const enmActParam_ProbValue = 110;
    const enmActParam_Gender = 111;
    const enmActParam_Active = 112;
    const enmActParam_SignDay = 113;
    const enmActParam_Times = 114;
    const enmActParam_Days = 115;
    const enmActParam_Hours = 116;
    const enmActParam_Minutes = 117;
    const enmActParam_Seconds = 118;
    const enmActParam_ActiveValue = 119;
    const enmActParam_TaskID = 120;
    const enmActParam_FriendCnt = 121;
    const enmActParam_MarryCnt = 122;
    const enmActParam_StoryID = 123;
    const enmActParam_ArenaRank = 124;
    const enmActParam_DanceRank = 125;
    const enmActParam_LevelRank = 126;
    const enmActParam_ClothRank = 127;
    const enmActParam_LoverCnt = 128;
    const enmActParam_ComRank = 129;
    const enmActParam_RankType = 130;
    const enmActParam_RankValue = 131;
    const enmActParam_ClothCnt = 132;
    const enmActParam_ClothForeverCnt = 133;
    const enmActParam_LoverLevel = 134;
    const enmActParam_UseBigSpeader = 135;
    const enmActParam_UseProbsCard = 136;
    const enmActParam_OwnGuild = 137;
    const enmActParam_GuildLevel = 138;
    const enmActParam_AdvancedForever = 139;
    const enmActParam_UseUltraSpeader = 140;
    const enmActParam_BuyClothAtMall = 141;
    const enmActParam_UseSmallSpeaker = 142;
    const enmActParam_AdvancedCloth = 143;
    const enmActParam_GamePlay = 200;
    const enmActParam_GameMode = 201;
    const enmActParam_GameRank = 202;
    const enmActParam_GameScore = 203;
    const enmActParam_PlayTraditional = 204;
    const enmActParam_PlayTouch = 205;
    const enmActParam_PlayRhythm = 206;
    const enmActParam_WearAnyChoth = 207;
    const enmActParam_ExperRelaxRoom = 208;
    const enmActParam_ExperChallenage = 209;
    const enmActParam_GetActiveBox = 210;
    const enmActParam_ExperWelfareMall = 211;
    const enmActParam_ClearChapter_1 = 212;
    const enmActParam_GetStaminaGift = 213;
    const enmActParam_Raffle_10 = 214;
    const enmActParam_Raffle = 215;
    const enmActParam_BuyGCoin = 216;
    const enmActParam_Competition = 217;
    const enmActParam_ZuanPan = 218;
    const enmActParam_Laba = 219;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActParam_NULL' => self::enmActParam_NULL,
            'enmActParam_PayMoney' => self::enmActParam_PayMoney,
            'enmActParam_PayTodayMoney' => self::enmActParam_PayTodayMoney,
            'enmActParam_PayTotalMoney' => self::enmActParam_PayTotalMoney,
            'enmActParam_SpendMoney' => self::enmActParam_SpendMoney,
            'enmActParam_SpendTodayMoney' => self::enmActParam_SpendTodayMoney,
            'enmActParam_SpendTotalMoney' => self::enmActParam_SpendTotalMoney,
            'enmActParam_AddScore' => self::enmActParam_AddScore,
            'enmActParam_AddTodayScore' => self::enmActParam_AddTodayScore,
            'enmActParam_AddTotalScore' => self::enmActParam_AddTotalScore,
            'enmActParam_SpendScore' => self::enmActParam_SpendScore,
            'enmActParam_SpendTodayScore' => self::enmActParam_SpendTodayScore,
            'enmActParam_SpendTotalScore' => self::enmActParam_SpendTotalScore,
            'enmActParam_AddCoin' => self::enmActParam_AddCoin,
            'enmActParam_AddTodayCoin' => self::enmActParam_AddTodayCoin,
            'enmActParam_AddTotalCoin' => self::enmActParam_AddTotalCoin,
            'enmActParam_SpendCoin' => self::enmActParam_SpendCoin,
            'enmActParam_SpendTodayCoin' => self::enmActParam_SpendTodayCoin,
            'enmActParam_SpendTotalCoin' => self::enmActParam_SpendTotalCoin,
            'enmActParam_Level' => self::enmActParam_Level,
            'enmActParam_VIP' => self::enmActParam_VIP,
            'enmActParam_HeartValue' => self::enmActParam_HeartValue,
            'enmActParam_Exp' => self::enmActParam_Exp,
            'enmActParam_OnlineTime' => self::enmActParam_OnlineTime,
            'enmActParam_TodayLoginCnt' => self::enmActParam_TodayLoginCnt,
            'enmActParam_TotalLoginCnt' => self::enmActParam_TotalLoginCnt,
            'enmActParam_StartTime' => self::enmActParam_StartTime,
            'enmActParam_EndTime' => self::enmActParam_EndTime,
            'enmActParam_StartDate' => self::enmActParam_StartDate,
            'enmActParam_EndDate' => self::enmActParam_EndDate,
            'enmActParam_ItemID' => self::enmActParam_ItemID,
            'enmActParam_TaskCnt' => self::enmActParam_TaskCnt,
            'enmActParam_ProbValue' => self::enmActParam_ProbValue,
            'enmActParam_Gender' => self::enmActParam_Gender,
            'enmActParam_Active' => self::enmActParam_Active,
            'enmActParam_SignDay' => self::enmActParam_SignDay,
            'enmActParam_Times' => self::enmActParam_Times,
            'enmActParam_Days' => self::enmActParam_Days,
            'enmActParam_Hours' => self::enmActParam_Hours,
            'enmActParam_Minutes' => self::enmActParam_Minutes,
            'enmActParam_Seconds' => self::enmActParam_Seconds,
            'enmActParam_ActiveValue' => self::enmActParam_ActiveValue,
            'enmActParam_TaskID' => self::enmActParam_TaskID,
            'enmActParam_FriendCnt' => self::enmActParam_FriendCnt,
            'enmActParam_MarryCnt' => self::enmActParam_MarryCnt,
            'enmActParam_StoryID' => self::enmActParam_StoryID,
            'enmActParam_ArenaRank' => self::enmActParam_ArenaRank,
            'enmActParam_DanceRank' => self::enmActParam_DanceRank,
            'enmActParam_LevelRank' => self::enmActParam_LevelRank,
            'enmActParam_ClothRank' => self::enmActParam_ClothRank,
            'enmActParam_LoverCnt' => self::enmActParam_LoverCnt,
            'enmActParam_ComRank' => self::enmActParam_ComRank,
            'enmActParam_RankType' => self::enmActParam_RankType,
            'enmActParam_RankValue' => self::enmActParam_RankValue,
            'enmActParam_ClothCnt' => self::enmActParam_ClothCnt,
            'enmActParam_ClothForeverCnt' => self::enmActParam_ClothForeverCnt,
            'enmActParam_LoverLevel' => self::enmActParam_LoverLevel,
            'enmActParam_UseBigSpeader' => self::enmActParam_UseBigSpeader,
            'enmActParam_UseProbsCard' => self::enmActParam_UseProbsCard,
            'enmActParam_OwnGuild' => self::enmActParam_OwnGuild,
            'enmActParam_GuildLevel' => self::enmActParam_GuildLevel,
            'enmActParam_AdvancedForever' => self::enmActParam_AdvancedForever,
            'enmActParam_UseUltraSpeader' => self::enmActParam_UseUltraSpeader,
            'enmActParam_BuyClothAtMall' => self::enmActParam_BuyClothAtMall,
            'enmActParam_UseSmallSpeaker' => self::enmActParam_UseSmallSpeaker,
            'enmActParam_AdvancedCloth' => self::enmActParam_AdvancedCloth,
            'enmActParam_GamePlay' => self::enmActParam_GamePlay,
            'enmActParam_GameMode' => self::enmActParam_GameMode,
            'enmActParam_GameRank' => self::enmActParam_GameRank,
            'enmActParam_GameScore' => self::enmActParam_GameScore,
            'enmActParam_PlayTraditional' => self::enmActParam_PlayTraditional,
            'enmActParam_PlayTouch' => self::enmActParam_PlayTouch,
            'enmActParam_PlayRhythm' => self::enmActParam_PlayRhythm,
            'enmActParam_WearAnyChoth' => self::enmActParam_WearAnyChoth,
            'enmActParam_ExperRelaxRoom' => self::enmActParam_ExperRelaxRoom,
            'enmActParam_ExperChallenage' => self::enmActParam_ExperChallenage,
            'enmActParam_GetActiveBox' => self::enmActParam_GetActiveBox,
            'enmActParam_ExperWelfareMall' => self::enmActParam_ExperWelfareMall,
            'enmActParam_ClearChapter_1' => self::enmActParam_ClearChapter_1,
            'enmActParam_GetStaminaGift' => self::enmActParam_GetStaminaGift,
            'enmActParam_Raffle_10' => self::enmActParam_Raffle_10,
            'enmActParam_Raffle' => self::enmActParam_Raffle,
            'enmActParam_BuyGCoin' => self::enmActParam_BuyGCoin,
            'enmActParam_Competition' => self::enmActParam_Competition,
            'enmActParam_ZuanPan' => self::enmActParam_ZuanPan,
            'enmActParam_Laba' => self::enmActParam_Laba,
        );
    }
}
}