<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankType enum
 */
final class RankType
{
    const enmRankType_None = 0;
    const enmRankType_R01_TotalMoney = 1;
    const enmRankType_R02_WeekMoney = 2;
    const enmRankType_R03_Level = 3;
    const enmRankType_R04_Guild = 4;
    const enmRankType_R05_Speaker = 5;
    const enmRankType_R06_Lover = 6;
    const enmRankType_R07_Story = 7;
    const enmRankType_R08_Cloth = 8;
    const enmRankType_R09_FeteWin = 9;
    const enmRankType_R10_HistoryWeekCostFirst = 10;
    const enmRankType_R11_ScorePerMusic = 11;
    const enmRankType_R12_Qualifying_1v1 = 12;
    const enmRankType_R13_Qualifying_2v2 = 13;
    const enmRankType_R14_ScorePerMusicNoSkill = 14;
    const enmRankType_R15_EasyRank = 15;
    const enmRankType_R16_NormalRank = 16;
    const enmRankType_R17_HardRank = 17;
    const enmRankType_R18_AllRank = 18;
    const enmRankType_R19_TotalCup = 19;
    const enmRankType_R20_TotalCupRelax = 20;
    const enmRankType_R21_TotalCupProfessional = 21;
    const enmRankType_R22_TotalCupMaster = 22;
    const enmRankType_R23_WeekCup = 23;
    const enmRankType_R24_WeekCupRelax = 24;
    const enmRankType_R25_WeekCupProfessional = 25;
    const enmRankType_R26_WeekCupMaster = 26;
    const enmRankType_R27_TotalRankValue = 27;
    const enmRankType_R28_TotalRankValueRelax = 28;
    const enmRankType_R29_TotalRankValueProfessional = 29;
    const enmRankType_R30_TotalRankValueMaster = 30;
    const enmRankType_R31_WeekRankValue = 31;
    const enmRankType_R32_WeekRankValueRelax = 32;
    const enmRankType_R33_WeekRankValueProfessional = 33;
    const enmRankType_R34_WeekRankValueMaster = 34;
    const enmRankType_R35_CupScore = 35;
    const enmRankType_R36_CupScoreDropBall = 36;
    const enmRankType_R37_CupScoreHeartStar = 37;
    const enmRankType_R38_CupScoreAU = 38;
    const enmRankType_R39_Tournee = 39;
    const enmRankType_R40_Qualify = 40;
    const enmRankType_All_R01 = 101;
    const enmRankType_All_R02 = 102;
    const enmRankType_All_R03 = 103;
    const enmRankType_All_R04 = 104;
    const enmRankType_All_R05 = 105;
    const enmRankType_All_R06 = 106;
    const enmRankType_All_R07 = 107;
    const enmRankType_All_R08 = 108;
    const enmRankType_All_R09 = 109;
    const enmRankType_All_R10 = 110;
    const enmRankType_Wedding = 201;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRankType_None' => self::enmRankType_None,
            'enmRankType_R01_TotalMoney' => self::enmRankType_R01_TotalMoney,
            'enmRankType_R02_WeekMoney' => self::enmRankType_R02_WeekMoney,
            'enmRankType_R03_Level' => self::enmRankType_R03_Level,
            'enmRankType_R04_Guild' => self::enmRankType_R04_Guild,
            'enmRankType_R05_Speaker' => self::enmRankType_R05_Speaker,
            'enmRankType_R06_Lover' => self::enmRankType_R06_Lover,
            'enmRankType_R07_Story' => self::enmRankType_R07_Story,
            'enmRankType_R08_Cloth' => self::enmRankType_R08_Cloth,
            'enmRankType_R09_FeteWin' => self::enmRankType_R09_FeteWin,
            'enmRankType_R10_HistoryWeekCostFirst' => self::enmRankType_R10_HistoryWeekCostFirst,
            'enmRankType_R11_ScorePerMusic' => self::enmRankType_R11_ScorePerMusic,
            'enmRankType_R12_Qualifying_1v1' => self::enmRankType_R12_Qualifying_1v1,
            'enmRankType_R13_Qualifying_2v2' => self::enmRankType_R13_Qualifying_2v2,
            'enmRankType_R14_ScorePerMusicNoSkill' => self::enmRankType_R14_ScorePerMusicNoSkill,
            'enmRankType_R15_EasyRank' => self::enmRankType_R15_EasyRank,
            'enmRankType_R16_NormalRank' => self::enmRankType_R16_NormalRank,
            'enmRankType_R17_HardRank' => self::enmRankType_R17_HardRank,
            'enmRankType_R18_AllRank' => self::enmRankType_R18_AllRank,
            'enmRankType_R19_TotalCup' => self::enmRankType_R19_TotalCup,
            'enmRankType_R20_TotalCupRelax' => self::enmRankType_R20_TotalCupRelax,
            'enmRankType_R21_TotalCupProfessional' => self::enmRankType_R21_TotalCupProfessional,
            'enmRankType_R22_TotalCupMaster' => self::enmRankType_R22_TotalCupMaster,
            'enmRankType_R23_WeekCup' => self::enmRankType_R23_WeekCup,
            'enmRankType_R24_WeekCupRelax' => self::enmRankType_R24_WeekCupRelax,
            'enmRankType_R25_WeekCupProfessional' => self::enmRankType_R25_WeekCupProfessional,
            'enmRankType_R26_WeekCupMaster' => self::enmRankType_R26_WeekCupMaster,
            'enmRankType_R27_TotalRankValue' => self::enmRankType_R27_TotalRankValue,
            'enmRankType_R28_TotalRankValueRelax' => self::enmRankType_R28_TotalRankValueRelax,
            'enmRankType_R29_TotalRankValueProfessional' => self::enmRankType_R29_TotalRankValueProfessional,
            'enmRankType_R30_TotalRankValueMaster' => self::enmRankType_R30_TotalRankValueMaster,
            'enmRankType_R31_WeekRankValue' => self::enmRankType_R31_WeekRankValue,
            'enmRankType_R32_WeekRankValueRelax' => self::enmRankType_R32_WeekRankValueRelax,
            'enmRankType_R33_WeekRankValueProfessional' => self::enmRankType_R33_WeekRankValueProfessional,
            'enmRankType_R34_WeekRankValueMaster' => self::enmRankType_R34_WeekRankValueMaster,
            'enmRankType_R35_CupScore' => self::enmRankType_R35_CupScore,
            'enmRankType_R36_CupScoreDropBall' => self::enmRankType_R36_CupScoreDropBall,
            'enmRankType_R37_CupScoreHeartStar' => self::enmRankType_R37_CupScoreHeartStar,
            'enmRankType_R38_CupScoreAU' => self::enmRankType_R38_CupScoreAU,
            'enmRankType_R39_Tournee' => self::enmRankType_R39_Tournee,
            'enmRankType_R40_Qualify' => self::enmRankType_R40_Qualify,
            'enmRankType_All_R01' => self::enmRankType_All_R01,
            'enmRankType_All_R02' => self::enmRankType_All_R02,
            'enmRankType_All_R03' => self::enmRankType_All_R03,
            'enmRankType_All_R04' => self::enmRankType_All_R04,
            'enmRankType_All_R05' => self::enmRankType_All_R05,
            'enmRankType_All_R06' => self::enmRankType_All_R06,
            'enmRankType_All_R07' => self::enmRankType_All_R07,
            'enmRankType_All_R08' => self::enmRankType_All_R08,
            'enmRankType_All_R09' => self::enmRankType_All_R09,
            'enmRankType_All_R10' => self::enmRankType_All_R10,
            'enmRankType_Wedding' => self::enmRankType_Wedding,
        );
    }
}
}