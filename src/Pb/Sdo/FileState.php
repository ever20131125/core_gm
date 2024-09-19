<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FileState enum
 */
final class FileState
{
    const enmFileState_Normal = 0;
    const enmFileState_Review = 1;
    const enmFileState_Forbid = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFileState_Normal' => self::enmFileState_Normal,
            'enmFileState_Review' => self::enmFileState_Review,
            'enmFileState_Forbid' => self::enmFileState_Forbid,
        );
    }
}
}