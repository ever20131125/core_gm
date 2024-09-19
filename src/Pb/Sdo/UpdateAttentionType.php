<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UpdateAttentionType enum
 */
final class UpdateAttentionType
{
    const UpdateAttentionType_None = 0;
    const UpdateAttentionType_Add = 1;
    const UpdateAttentionType_Del = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'UpdateAttentionType_None' => self::UpdateAttentionType_None,
            'UpdateAttentionType_Add' => self::UpdateAttentionType_Add,
            'UpdateAttentionType_Del' => self::UpdateAttentionType_Del,
        );
    }
}
}