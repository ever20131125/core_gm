<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RelationshipStatus enum
 */
final class RelationshipStatus
{
    const enmRelationshipStatus_Invalid = 0;
    const enmRelationshipStatus_Single = 1;
    const enmRelationshipStatus_InLove = 2;
    const enmRelationshipStatus_Married = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRelationshipStatus_Invalid' => self::enmRelationshipStatus_Invalid,
            'enmRelationshipStatus_Single' => self::enmRelationshipStatus_Single,
            'enmRelationshipStatus_InLove' => self::enmRelationshipStatus_InLove,
            'enmRelationshipStatus_Married' => self::enmRelationshipStatus_Married,
        );
    }
}
}