<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MergeStatus enum
 */
final class MergeStatus
{
    const enmMergeStatus_Normal = 0;
    const enmMergeStatus_Lock = 1;
    const enmMergeStatus_Fog = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMergeStatus_Normal' => self::enmMergeStatus_Normal,
            'enmMergeStatus_Lock' => self::enmMergeStatus_Lock,
            'enmMergeStatus_Fog' => self::enmMergeStatus_Fog,
        );
    }
}
}