<?php
/**
 * Auto generated from define.proto at 2021-10-26 06:02:43
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleDiaryType enum
 */
final class CoupleDiaryType
{
    const enmDiaryType_Role = 0;
    const enmDiaryType_Anniversary = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmDiaryType_Role' => self::enmDiaryType_Role,
            'enmDiaryType_Anniversary' => self::enmDiaryType_Anniversary,
        );
    }
}
}