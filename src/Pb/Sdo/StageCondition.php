<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * StageCondition enum
 */
final class StageCondition
{
    const enmStageCon_None = 0;
    const enmStageCon_HaveLabelScore = 1;
    const enmStageCon_MissLabelScore = 2;
    const enmStageCon_HaveLabelPer = 3;
    const enmStageCon_MissLabelPer = 4;
    const enmStageCon_HaveItemIDScore = 5;
    const enmStageCon_MissItemIDScore = 6;
    const enmStageCon_HaveItemIDPer = 7;
    const enmStageCon_MissItemIDPer = 8;
    const enmStageCon_HaveItemTypeScore = 9;
    const enmStageCon_MissItemTypeScore = 10;
    const enmStageCon_HaveItemTypePer = 11;
    const enmStageCon_MissItemTypePer = 12;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmStageCon_None' => self::enmStageCon_None,
            'enmStageCon_HaveLabelScore' => self::enmStageCon_HaveLabelScore,
            'enmStageCon_MissLabelScore' => self::enmStageCon_MissLabelScore,
            'enmStageCon_HaveLabelPer' => self::enmStageCon_HaveLabelPer,
            'enmStageCon_MissLabelPer' => self::enmStageCon_MissLabelPer,
            'enmStageCon_HaveItemIDScore' => self::enmStageCon_HaveItemIDScore,
            'enmStageCon_MissItemIDScore' => self::enmStageCon_MissItemIDScore,
            'enmStageCon_HaveItemIDPer' => self::enmStageCon_HaveItemIDPer,
            'enmStageCon_MissItemIDPer' => self::enmStageCon_MissItemIDPer,
            'enmStageCon_HaveItemTypeScore' => self::enmStageCon_HaveItemTypeScore,
            'enmStageCon_MissItemTypeScore' => self::enmStageCon_MissItemTypeScore,
            'enmStageCon_HaveItemTypePer' => self::enmStageCon_HaveItemTypePer,
            'enmStageCon_MissItemTypePer' => self::enmStageCon_MissItemTypePer,
        );
    }
}
}