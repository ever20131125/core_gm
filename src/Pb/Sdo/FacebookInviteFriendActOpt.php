<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FacebookInviteFriendActOpt enum
 */
final class FacebookInviteFriendActOpt
{
    const enmFacebookInviteFriendActOpt_Null = 0;
    const enmFacebookInviteFriendActOpt_UpdateFriendCount = 1;
    const enmFacebookInviteFriendActOpt_GetInfo = 2;
    const enmFacebookInviteFriendActOpt_GetPrize = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmFacebookInviteFriendActOpt_Null' => self::enmFacebookInviteFriendActOpt_Null,
            'enmFacebookInviteFriendActOpt_UpdateFriendCount' => self::enmFacebookInviteFriendActOpt_UpdateFriendCount,
            'enmFacebookInviteFriendActOpt_GetInfo' => self::enmFacebookInviteFriendActOpt_GetInfo,
            'enmFacebookInviteFriendActOpt_GetPrize' => self::enmFacebookInviteFriendActOpt_GetPrize,
        );
    }
}
}