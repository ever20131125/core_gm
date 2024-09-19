<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AssetType enum
 */
final class AssetType
{
    const enmAssetType_None = 0;
    const enmAssetType_Money = 1;
    const enmAssetType_Score = 2;
    const enmAssetType_GCoin = 4;
    const enmAssetType_Stamina = 8;
    const enmAssetType_Experience = 16;
    const enmAssetType_Level = 32;
    const enmAssetType_QCoin = 64;
    const enmAssetType_HCoin = 128;
    const enmAssetType_Achieve = 256;
    const enmAssetType_Couple = 512;
    const enmAssetType_GWealth = 1024;
    const enmAssetType_ConsumeCoin = 2048;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmAssetType_None' => self::enmAssetType_None,
            'enmAssetType_Money' => self::enmAssetType_Money,
            'enmAssetType_Score' => self::enmAssetType_Score,
            'enmAssetType_GCoin' => self::enmAssetType_GCoin,
            'enmAssetType_Stamina' => self::enmAssetType_Stamina,
            'enmAssetType_Experience' => self::enmAssetType_Experience,
            'enmAssetType_Level' => self::enmAssetType_Level,
            'enmAssetType_QCoin' => self::enmAssetType_QCoin,
            'enmAssetType_HCoin' => self::enmAssetType_HCoin,
            'enmAssetType_Achieve' => self::enmAssetType_Achieve,
            'enmAssetType_Couple' => self::enmAssetType_Couple,
            'enmAssetType_GWealth' => self::enmAssetType_GWealth,
            'enmAssetType_ConsumeCoin' => self::enmAssetType_ConsumeCoin,
        );
    }
}
}