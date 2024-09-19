<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CupChannelType enum
 */
final class CupChannelType
{
    const enmCupChannelType_None = 0;
    const enmCupChannelType_Score = 1;
    const enmCupChannelType_Combo = 2;
    const enmCupChannelType_Accuracy = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCupChannelType_None' => self::enmCupChannelType_None,
            'enmCupChannelType_Score' => self::enmCupChannelType_Score,
            'enmCupChannelType_Combo' => self::enmCupChannelType_Combo,
            'enmCupChannelType_Accuracy' => self::enmCupChannelType_Accuracy,
        );
    }
}
}