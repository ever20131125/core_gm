<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VoteType enum
 */
final class VoteType
{
    const enmVoteType_None = 0;
    const enmVoteType_WX_Single = 1;
    const enmVoteType_WX_Couple = 2;
    const enmVoteType_WX_Guild = 3;
    const enmVoteType_Game_Single = 4;
    const enmVoteType_Game_Couple = 5;
    const enmVoteType_Game_Guild = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmVoteType_None' => self::enmVoteType_None,
            'enmVoteType_WX_Single' => self::enmVoteType_WX_Single,
            'enmVoteType_WX_Couple' => self::enmVoteType_WX_Couple,
            'enmVoteType_WX_Guild' => self::enmVoteType_WX_Guild,
            'enmVoteType_Game_Single' => self::enmVoteType_Game_Single,
            'enmVoteType_Game_Couple' => self::enmVoteType_Game_Couple,
            'enmVoteType_Game_Guild' => self::enmVoteType_Game_Guild,
        );
    }
}
}