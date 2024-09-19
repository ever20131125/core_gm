<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VoteActOpt enum
 */
final class VoteActOpt
{
    const enmVoteActOpt_Null = 0;
    const enmVoteActOpt_GetOpenAct = 1;
    const enmVoteActOpt_Sign = 2;
    const enmVoteActOpt_GetMyProfile = 3;
    const enmVoteActOpt_ModifyPicture = 4;
    const enmVoteActOpt_ModifyState = 5;
    const enmVoteActOpt_PlayerVote = 6;
    const enmVoteActOpt_GmVote = 7;
    const enmVoteActOpt_GetInfoByIndex = 8;
    const enmVoteActOpt_GetInfoByRoleID = 9;
    const enmVoteActOpt_GetMyFollowers = 10;
    const enmVoteActOpt_GetMyIdols = 11;
    const enmVoteActOpt_GetPrizeList = 12;
    const enmVoteActOpt_GetVoteUseItem = 13;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmVoteActOpt_Null' => self::enmVoteActOpt_Null,
            'enmVoteActOpt_GetOpenAct' => self::enmVoteActOpt_GetOpenAct,
            'enmVoteActOpt_Sign' => self::enmVoteActOpt_Sign,
            'enmVoteActOpt_GetMyProfile' => self::enmVoteActOpt_GetMyProfile,
            'enmVoteActOpt_ModifyPicture' => self::enmVoteActOpt_ModifyPicture,
            'enmVoteActOpt_ModifyState' => self::enmVoteActOpt_ModifyState,
            'enmVoteActOpt_PlayerVote' => self::enmVoteActOpt_PlayerVote,
            'enmVoteActOpt_GmVote' => self::enmVoteActOpt_GmVote,
            'enmVoteActOpt_GetInfoByIndex' => self::enmVoteActOpt_GetInfoByIndex,
            'enmVoteActOpt_GetInfoByRoleID' => self::enmVoteActOpt_GetInfoByRoleID,
            'enmVoteActOpt_GetMyFollowers' => self::enmVoteActOpt_GetMyFollowers,
            'enmVoteActOpt_GetMyIdols' => self::enmVoteActOpt_GetMyIdols,
            'enmVoteActOpt_GetPrizeList' => self::enmVoteActOpt_GetPrizeList,
            'enmVoteActOpt_GetVoteUseItem' => self::enmVoteActOpt_GetVoteUseItem,
        );
    }
}
}