<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AssetIndex enum
 */
final class AssetIndex
{
    const enmAssetIndex_Money = 0;
    const enmAssetIndex_Score = 1;
    const enmAssetIndex_GCoin = 2;
    const enmAssetIndex_Stamina = 3;
    const enmAssetIndex_Experience = 4;
    const enmAssetIndex_Level = 5;
    const enmAssetIndex_QCoin = 6;
    const enmAssetIndex_HCoin = 7;
    const enmAssetIndex_Achieve = 8;
    const enmAssetIndex_Couple = 9;
    const enmAssetIndex_GWealth = 10;
    const enmAssetIndex_Max = 20;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAssetIndex_Money' => self::enmAssetIndex_Money,
            'enmAssetIndex_Score' => self::enmAssetIndex_Score,
            'enmAssetIndex_GCoin' => self::enmAssetIndex_GCoin,
            'enmAssetIndex_Stamina' => self::enmAssetIndex_Stamina,
            'enmAssetIndex_Experience' => self::enmAssetIndex_Experience,
            'enmAssetIndex_Level' => self::enmAssetIndex_Level,
            'enmAssetIndex_QCoin' => self::enmAssetIndex_QCoin,
            'enmAssetIndex_HCoin' => self::enmAssetIndex_HCoin,
            'enmAssetIndex_Achieve' => self::enmAssetIndex_Achieve,
            'enmAssetIndex_Couple' => self::enmAssetIndex_Couple,
            'enmAssetIndex_GWealth' => self::enmAssetIndex_GWealth,
            'enmAssetIndex_Max' => self::enmAssetIndex_Max,
        );
    }
}
}