<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameDataFlag enum
 */
final class GameDataFlag
{
    const enmDataFlag_None = 0;
    const enmDataFlag_Fresh_New = 1;
    const enmDataFlag_Fresh_Old = 2;
    const enmDataFlag_FreshMask = 3;
    const enmDataFlag_ExperBuy = 4;
    const enmDateFlag_LoveTree = 8;
    const enmDateFlag_Setting = 16;
    const enmDateFlag_Friend = 32;
    const enmDateFlag_Mall = 64;
    const enmDateFlag_TeachRHYTHM = 128;
    const enmDateFlag_TeachAU = 256;
    const enmDateFlag_UpPhoto = 512;
    const enmDateFlag_SysItem = 1024;
    const enmDateFlag_LevelUpItem = 2048;
    const enmDateFlag_RankUpItem = 4096;
    const enmDateFlag_Pet = 8192;
    const enmDateFlag_Kiki = 16384;
    const enmDateFlag_Office = 32768;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmDataFlag_None' => self::enmDataFlag_None,
            'enmDataFlag_Fresh_New' => self::enmDataFlag_Fresh_New,
            'enmDataFlag_Fresh_Old' => self::enmDataFlag_Fresh_Old,
            'enmDataFlag_FreshMask' => self::enmDataFlag_FreshMask,
            'enmDataFlag_ExperBuy' => self::enmDataFlag_ExperBuy,
            'enmDateFlag_LoveTree' => self::enmDateFlag_LoveTree,
            'enmDateFlag_Setting' => self::enmDateFlag_Setting,
            'enmDateFlag_Friend' => self::enmDateFlag_Friend,
            'enmDateFlag_Mall' => self::enmDateFlag_Mall,
            'enmDateFlag_TeachRHYTHM' => self::enmDateFlag_TeachRHYTHM,
            'enmDateFlag_TeachAU' => self::enmDateFlag_TeachAU,
            'enmDateFlag_UpPhoto' => self::enmDateFlag_UpPhoto,
            'enmDateFlag_SysItem' => self::enmDateFlag_SysItem,
            'enmDateFlag_LevelUpItem' => self::enmDateFlag_LevelUpItem,
            'enmDateFlag_RankUpItem' => self::enmDateFlag_RankUpItem,
            'enmDateFlag_Pet' => self::enmDateFlag_Pet,
            'enmDateFlag_Kiki' => self::enmDateFlag_Kiki,
            'enmDateFlag_Office' => self::enmDateFlag_Office,
        );
    }
}
}