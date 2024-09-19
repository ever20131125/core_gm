<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyState enum
 */
final class QualifyState
{
    const QualifyState_Close = 0;
    const QualifyState_Dance = 1;
    const QualifyState_Prize = 2;
    const QualifyState_Rest = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'QualifyState_Close' => self::QualifyState_Close,
            'QualifyState_Dance' => self::QualifyState_Dance,
            'QualifyState_Prize' => self::QualifyState_Prize,
            'QualifyState_Rest' => self::QualifyState_Rest,
        );
    }
}
}