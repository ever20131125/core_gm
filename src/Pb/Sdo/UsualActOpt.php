<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UsualActOpt enum
 */
final class UsualActOpt
{
    const enmUsualActOpt_Null = 0;
    const enmUsualActOpt_GetFrameInfo = 1;
    const enmUsualActOpt_GetDetailInfo = 2;
    const enmUsualActOpt_UpdateActInfo = 3;
    const enmUsualActOpt_GetPrize = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUsualActOpt_Null' => self::enmUsualActOpt_Null,
            'enmUsualActOpt_GetFrameInfo' => self::enmUsualActOpt_GetFrameInfo,
            'enmUsualActOpt_GetDetailInfo' => self::enmUsualActOpt_GetDetailInfo,
            'enmUsualActOpt_UpdateActInfo' => self::enmUsualActOpt_UpdateActInfo,
            'enmUsualActOpt_GetPrize' => self::enmUsualActOpt_GetPrize,
        );
    }
}
}