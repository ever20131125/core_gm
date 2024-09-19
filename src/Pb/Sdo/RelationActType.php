<?php
/**
 * Auto generated from define.proto at 2021-08-23 09:18:28
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RelationActType enum
 */
final class RelationActType
{
    const enmRelationActType_LikeHomePage = 0;
    const enmRelationActType_LikeHouse = 1;
    const enmRelationActType_VisitHomePage = 2;
    const enmRelationActType_VisitHouse = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmRelationActType_LikeHomePage' => self::enmRelationActType_LikeHomePage,
            'enmRelationActType_LikeHouse' => self::enmRelationActType_LikeHouse,
            'enmRelationActType_VisitHomePage' => self::enmRelationActType_VisitHomePage,
            'enmRelationActType_VisitHouse' => self::enmRelationActType_VisitHouse,
        );
    }
}
}