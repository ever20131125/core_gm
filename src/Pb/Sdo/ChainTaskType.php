<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChainTaskType enum
 */
final class ChainTaskType
{
    const enmChainTaskType_None = 0;
    const enmChainTaskType_Question = 1;
    const enmChainTaskType_Dance = 2;
    const enmChainTaskType_ClothGrade = 3;
    const enmChainTaskType_ClothDance = 4;
    const enmChainTaskType_ChalDance = 100;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmChainTaskType_None' => self::enmChainTaskType_None,
            'enmChainTaskType_Question' => self::enmChainTaskType_Question,
            'enmChainTaskType_Dance' => self::enmChainTaskType_Dance,
            'enmChainTaskType_ClothGrade' => self::enmChainTaskType_ClothGrade,
            'enmChainTaskType_ClothDance' => self::enmChainTaskType_ClothDance,
            'enmChainTaskType_ChalDance' => self::enmChainTaskType_ChalDance,
        );
    }
}
}