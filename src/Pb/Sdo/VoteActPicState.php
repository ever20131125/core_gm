<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VoteActPicState enum
 */
final class VoteActPicState
{
    const enmVoteActPicState_Null = 0;
    const enmVoteActPicState_Checking = 1;
    const enmVoteActPicState_Accepted = 2;
    const enmVoteActPicState_Refused = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmVoteActPicState_Null' => self::enmVoteActPicState_Null,
            'enmVoteActPicState_Checking' => self::enmVoteActPicState_Checking,
            'enmVoteActPicState_Accepted' => self::enmVoteActPicState_Accepted,
            'enmVoteActPicState_Refused' => self::enmVoteActPicState_Refused,
        );
    }
}
}