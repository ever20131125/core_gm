<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingState enum
 */
final class WeddingState
{
    const enmWeddingState_Normal = 0;
    const enmWeddingState_CG = 1;
    const enmWeddingState_Breakup = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWeddingState_Normal' => self::enmWeddingState_Normal,
            'enmWeddingState_CG' => self::enmWeddingState_CG,
            'enmWeddingState_Breakup' => self::enmWeddingState_Breakup,
        );
    }
}
}