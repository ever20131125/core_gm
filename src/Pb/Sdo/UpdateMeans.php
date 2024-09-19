<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UpdateMeans enum
 */
final class UpdateMeans
{
    const enmUpdateMeans_None = 0;
    const enmUpdateMeans_Add = 1;
    const enmUpdateMeans_Replace = 2;
    const enmUpdateMeans_Record = 3;
    const enmUpdateMeans_Spend = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUpdateMeans_None' => self::enmUpdateMeans_None,
            'enmUpdateMeans_Add' => self::enmUpdateMeans_Add,
            'enmUpdateMeans_Replace' => self::enmUpdateMeans_Replace,
            'enmUpdateMeans_Record' => self::enmUpdateMeans_Record,
            'enmUpdateMeans_Spend' => self::enmUpdateMeans_Spend,
        );
    }
}
}