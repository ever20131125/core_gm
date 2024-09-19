<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * StageObjKind enum
 */
final class StageObjKind
{
    const enmStageObj_None = 0;
    const enmStageObj_Chair = 1;
    const enmStageObj_Boat = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmStageObj_None' => self::enmStageObj_None,
            'enmStageObj_Chair' => self::enmStageObj_Chair,
            'enmStageObj_Boat' => self::enmStageObj_Boat,
        );
    }
}
}