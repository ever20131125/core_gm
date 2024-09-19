<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * DeposeVoteType enum
 */
final class DeposeVoteType
{
    const enmDeposeVoteType_Invalid = 0;
    const enmDeposeVoteType_Agree = 1;
    const enmDeposeVoteType_Disagree = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmDeposeVoteType_Invalid' => self::enmDeposeVoteType_Invalid,
            'enmDeposeVoteType_Agree' => self::enmDeposeVoteType_Agree,
            'enmDeposeVoteType_Disagree' => self::enmDeposeVoteType_Disagree,
        );
    }
}
}