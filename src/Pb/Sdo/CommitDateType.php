<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CommitDateType enum
 */
final class CommitDateType
{
    const enmCommitDateType_None = 0;
    const enmCommitDateType_Join = 1;
    const enmCommitDateType_Prayer = 2;
    const enmCommitDateType_Cover = 3;
    const enmCommitDateType_Pickup = 4;
    const enmCommitDateType_Prize = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmCommitDateType_None' => self::enmCommitDateType_None,
            'enmCommitDateType_Join' => self::enmCommitDateType_Join,
            'enmCommitDateType_Prayer' => self::enmCommitDateType_Prayer,
            'enmCommitDateType_Cover' => self::enmCommitDateType_Cover,
            'enmCommitDateType_Pickup' => self::enmCommitDateType_Pickup,
            'enmCommitDateType_Prize' => self::enmCommitDateType_Prize,
        );
    }
}
}