<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ElectionCommitType enum
 */
final class ElectionCommitType
{
    const ElectionCommitType_Data = 0;
    const ElectionCommitType_Opinion = 1;
    const ElectionCommitType_Vote = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'ElectionCommitType_Data' => self::ElectionCommitType_Data,
            'ElectionCommitType_Opinion' => self::ElectionCommitType_Opinion,
            'ElectionCommitType_Vote' => self::ElectionCommitType_Vote,
        );
    }
}
}