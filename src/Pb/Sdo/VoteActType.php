<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VoteActType enum
 */
final class VoteActType
{
    const enmVoteActType_Null = 0;
    const enmVoteActType_InnerVote = 1;
    const enmVoteActType_WXVote = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmVoteActType_Null' => self::enmVoteActType_Null,
            'enmVoteActType_InnerVote' => self::enmVoteActType_InnerVote,
            'enmVoteActType_WXVote' => self::enmVoteActType_WXVote,
        );
    }
}
}