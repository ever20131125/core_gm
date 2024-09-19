<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActType enum
 */
final class ActType
{
    const enmActType_None = 0;
    const enmActType_GMPrize = 1;
    const enmActType_Rebate = 2;
    const enmActType_Noti = 3;
    const enmActType_QA = 4;
    const enmActType_Advertise = 5;
    const enmActType_TimeOnline = 10;
    const enmActType_TimePeriod = 11;
    const enmActType_TimePoint = 12;
    const enmActType_LoginWeek = 21;
    const enmActType_LoginCount = 22;
    const enmActType_LoginMonth = 23;
    const enmActType_ActiveDay_Task = 25;
    const enmActType_ActiveDay_Price = 26;
    const enmActType_ActiveWeek_Prize = 27;
    const enmActType_DanceDrop = 30;
    const enmActType_Exchange = 31;
    const enmActType_JigsawCond = 40;
    const enmActType_JigsawPuzzle = 41;
    const enmActType_FirwWorks_Prize = 50;
    const enmActType_FirwWorks_Rank = 51;
    const enmActType_FirwWorks_Like = 52;
    const enmActType_FirwWorks_Fire = 53;
    const enmActType_Level = 60;
    const enmActType_MusicChallenge_Task = 70;
    const enmActType_MusicChallenge_Rank1 = 71;
    const enmActType_MusicChallenge_Rank2 = 72;
    const enmActType_MusicChallenge_Rank3 = 73;
    const enmActType_NewPlayerLogin = 80;
    const enmActType_NewPlayerTran_Prize = 81;
    const enmActType_NewPlayerTran_Day1 = 82;
    const enmActType_NewPlayerTran_Day2 = 83;
    const enmActType_NewPlayerTran_Day3 = 84;
    const enmActType_NewPlayerTran_Day4 = 85;
    const enmActType_NewPlayerTran_Day5 = 86;
    const enmActType_NewPlayerTran_Day6 = 87;
    const enmActType_NewPlayerTran_Day7 = 88;
    const enmActType_NewPlayLevelNormal = 89;
    const enmActType_NewPlayLevelCrown = 90;
    const enmActType_NewPlayTask1 = 91;
    const enmActType_NewPlayTask2 = 92;
    const enmActType_NewPlayTask3 = 93;
    const enmActType_NewPlayTask4 = 94;
    const enmActType_NewPlayTask5 = 95;
    const enmActType_BP = 1601;
    const enmActType_BP_Common = 1602;
    const enmActType_BP_Payment = 1603;
    const enmActType_BP_Task1 = 1604;
    const enmActType_BP_Task2 = 1605;
    const enmActType_BP_Task3 = 1606;
    const enmActType_BP_Task4 = 1607;
    const enmActType_BP_Task5 = 1608;
    const enmActType_BP_Exchange = 1609;
    const enmActType_BP_Active = 1610;
    const enmActType_BP_Purchase = 1611;
    const enmActType_BP_PurchaseLevel = 1612;
    const enmActType_Puzzle_Common = 1701;
    const enmActType_Puzzle_Day = 1702;
    const enmActType_Puzzle_Act = 1703;
    const enmActType_Puzzle_Accumulation = 1704;
    const enmActType_Puzzle_Box = 1705;
    const enmActType_Designer = 1800;
    const enmActType_Designer_Day = 1801;
    const enmActType_Designer_Rand = 1802;
    const enmActType_Designer_Acc = 1803;
    const enmActType_Designer_Material = 1804;
    const enmActType_Designer_Figure = 1805;
    const enmActType_Designer_Exchange = 1806;
    const enmActType_Recommendate = 1900;
    const enmActType_FirstPay = 2000;
    const enmActType_MonthCard = 2001;
    const enmActType_BlackCard = 2002;
    const enmActType_MonthCrown = 2003;
    const enmActType_YearCrown = 2004;
    const enmActType_CrownDayPrize = 2005;
    const enmActType_CrownMonthPrize = 2006;
    const enmActType_VIPLevelPrize = 2007;
    const enmActType_VIPWeekPrize = 2008;
    const enmActType_MakeWishFree = 2100;
    const enmActType_MakeWishBox = 2101;
    const enmActType_PPGame = 2105;
    const enmActType_MileStone = 2200;
    const enmActType_MileStone_Day1 = 2201;
    const enmActType_MileStone_Day2 = 2202;
    const enmActType_MileStone_Day3 = 2203;
    const enmActType_MergeLine = 2300;
    const enmActType_Treasure = 2310;
    const enmActType_StarCall = 2311;
    const enmActType_TestRebate = 2320;
    const enmActType_DirectPurchase = 2330;
    const enmActType_LuckyCity = 2340;
    const enmActType_Templat_1 = 9010;
    const enmActType_Templat_2 = 9020;
    const enmActType_Templat_3 = 9030;
    const enmActType_Templat_3_Sub1 = 9031;
    const enmActType_Templat_3_Sub2 = 9032;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmActType_None' => self::enmActType_None,
            'enmActType_GMPrize' => self::enmActType_GMPrize,
            'enmActType_Rebate' => self::enmActType_Rebate,
            'enmActType_Noti' => self::enmActType_Noti,
            'enmActType_QA' => self::enmActType_QA,
            'enmActType_Advertise' => self::enmActType_Advertise,
            'enmActType_TimeOnline' => self::enmActType_TimeOnline,
            'enmActType_TimePeriod' => self::enmActType_TimePeriod,
            'enmActType_TimePoint' => self::enmActType_TimePoint,
            'enmActType_LoginWeek' => self::enmActType_LoginWeek,
            'enmActType_LoginCount' => self::enmActType_LoginCount,
            'enmActType_LoginMonth' => self::enmActType_LoginMonth,
            'enmActType_ActiveDay_Task' => self::enmActType_ActiveDay_Task,
            'enmActType_ActiveDay_Price' => self::enmActType_ActiveDay_Price,
            'enmActType_ActiveWeek_Prize' => self::enmActType_ActiveWeek_Prize,
            'enmActType_DanceDrop' => self::enmActType_DanceDrop,
            'enmActType_Exchange' => self::enmActType_Exchange,
            'enmActType_JigsawCond' => self::enmActType_JigsawCond,
            'enmActType_JigsawPuzzle' => self::enmActType_JigsawPuzzle,
            'enmActType_FirwWorks_Prize' => self::enmActType_FirwWorks_Prize,
            'enmActType_FirwWorks_Rank' => self::enmActType_FirwWorks_Rank,
            'enmActType_FirwWorks_Like' => self::enmActType_FirwWorks_Like,
            'enmActType_FirwWorks_Fire' => self::enmActType_FirwWorks_Fire,
            'enmActType_Level' => self::enmActType_Level,
            'enmActType_MusicChallenge_Task' => self::enmActType_MusicChallenge_Task,
            'enmActType_MusicChallenge_Rank1' => self::enmActType_MusicChallenge_Rank1,
            'enmActType_MusicChallenge_Rank2' => self::enmActType_MusicChallenge_Rank2,
            'enmActType_MusicChallenge_Rank3' => self::enmActType_MusicChallenge_Rank3,
            'enmActType_NewPlayerLogin' => self::enmActType_NewPlayerLogin,
            'enmActType_NewPlayerTran_Prize' => self::enmActType_NewPlayerTran_Prize,
            'enmActType_NewPlayerTran_Day1' => self::enmActType_NewPlayerTran_Day1,
            'enmActType_NewPlayerTran_Day2' => self::enmActType_NewPlayerTran_Day2,
            'enmActType_NewPlayerTran_Day3' => self::enmActType_NewPlayerTran_Day3,
            'enmActType_NewPlayerTran_Day4' => self::enmActType_NewPlayerTran_Day4,
            'enmActType_NewPlayerTran_Day5' => self::enmActType_NewPlayerTran_Day5,
            'enmActType_NewPlayerTran_Day6' => self::enmActType_NewPlayerTran_Day6,
            'enmActType_NewPlayerTran_Day7' => self::enmActType_NewPlayerTran_Day7,
            'enmActType_NewPlayLevelNormal' => self::enmActType_NewPlayLevelNormal,
            'enmActType_NewPlayLevelCrown' => self::enmActType_NewPlayLevelCrown,
            'enmActType_NewPlayTask1' => self::enmActType_NewPlayTask1,
            'enmActType_NewPlayTask2' => self::enmActType_NewPlayTask2,
            'enmActType_NewPlayTask3' => self::enmActType_NewPlayTask3,
            'enmActType_NewPlayTask4' => self::enmActType_NewPlayTask4,
            'enmActType_NewPlayTask5' => self::enmActType_NewPlayTask5,
            'enmActType_BP' => self::enmActType_BP,
            'enmActType_BP_Common' => self::enmActType_BP_Common,
            'enmActType_BP_Payment' => self::enmActType_BP_Payment,
            'enmActType_BP_Task1' => self::enmActType_BP_Task1,
            'enmActType_BP_Task2' => self::enmActType_BP_Task2,
            'enmActType_BP_Task3' => self::enmActType_BP_Task3,
            'enmActType_BP_Task4' => self::enmActType_BP_Task4,
            'enmActType_BP_Task5' => self::enmActType_BP_Task5,
            'enmActType_BP_Exchange' => self::enmActType_BP_Exchange,
            'enmActType_BP_Active' => self::enmActType_BP_Active,
            'enmActType_BP_Purchase' => self::enmActType_BP_Purchase,
            'enmActType_BP_PurchaseLevel' => self::enmActType_BP_PurchaseLevel,
            'enmActType_Puzzle_Common' => self::enmActType_Puzzle_Common,
            'enmActType_Puzzle_Day' => self::enmActType_Puzzle_Day,
            'enmActType_Puzzle_Act' => self::enmActType_Puzzle_Act,
            'enmActType_Puzzle_Accumulation' => self::enmActType_Puzzle_Accumulation,
            'enmActType_Puzzle_Box' => self::enmActType_Puzzle_Box,
            'enmActType_Designer' => self::enmActType_Designer,
            'enmActType_Designer_Day' => self::enmActType_Designer_Day,
            'enmActType_Designer_Rand' => self::enmActType_Designer_Rand,
            'enmActType_Designer_Acc' => self::enmActType_Designer_Acc,
            'enmActType_Designer_Material' => self::enmActType_Designer_Material,
            'enmActType_Designer_Figure' => self::enmActType_Designer_Figure,
            'enmActType_Designer_Exchange' => self::enmActType_Designer_Exchange,
            'enmActType_Recommendate' => self::enmActType_Recommendate,
            'enmActType_FirstPay' => self::enmActType_FirstPay,
            'enmActType_MonthCard' => self::enmActType_MonthCard,
            'enmActType_BlackCard' => self::enmActType_BlackCard,
            'enmActType_MonthCrown' => self::enmActType_MonthCrown,
            'enmActType_YearCrown' => self::enmActType_YearCrown,
            'enmActType_CrownDayPrize' => self::enmActType_CrownDayPrize,
            'enmActType_CrownMonthPrize' => self::enmActType_CrownMonthPrize,
            'enmActType_VIPLevelPrize' => self::enmActType_VIPLevelPrize,
            'enmActType_VIPWeekPrize' => self::enmActType_VIPWeekPrize,
            'enmActType_MakeWishFree' => self::enmActType_MakeWishFree,
            'enmActType_MakeWishBox' => self::enmActType_MakeWishBox,
            'enmActType_PPGame' => self::enmActType_PPGame,
            'enmActType_MileStone' => self::enmActType_MileStone,
            'enmActType_MileStone_Day1' => self::enmActType_MileStone_Day1,
            'enmActType_MileStone_Day2' => self::enmActType_MileStone_Day2,
            'enmActType_MileStone_Day3' => self::enmActType_MileStone_Day3,
            'enmActType_MergeLine' => self::enmActType_MergeLine,
            'enmActType_Treasure' => self::enmActType_Treasure,
            'enmActType_StarCall' => self::enmActType_StarCall,
            'enmActType_TestRebate' => self::enmActType_TestRebate,
            'enmActType_DirectPurchase' => self::enmActType_DirectPurchase,
            'enmActType_LuckyCity' => self::enmActType_LuckyCity,
            'enmActType_Templat_1' => self::enmActType_Templat_1,
            'enmActType_Templat_2' => self::enmActType_Templat_2,
            'enmActType_Templat_3' => self::enmActType_Templat_3,
            'enmActType_Templat_3_Sub1' => self::enmActType_Templat_3_Sub1,
            'enmActType_Templat_3_Sub2' => self::enmActType_Templat_3_Sub2,
        );
    }
}
}