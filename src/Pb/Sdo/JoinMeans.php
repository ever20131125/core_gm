<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * JoinMeans enum
 */
final class JoinMeans
{
    const enmJoinMeans_Create = 0;
    const enmJoinMeans_Normal = 1;
    const enmJoinMeans_Quick = 2;
    const enmJoinMeans_Match = 3;
    const enmJoinMeans_Invite = 4;
    const enmJoinMeans_Track = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmJoinMeans_Create' => self::enmJoinMeans_Create,
            'enmJoinMeans_Normal' => self::enmJoinMeans_Normal,
            'enmJoinMeans_Quick' => self::enmJoinMeans_Quick,
            'enmJoinMeans_Match' => self::enmJoinMeans_Match,
            'enmJoinMeans_Invite' => self::enmJoinMeans_Invite,
            'enmJoinMeans_Track' => self::enmJoinMeans_Track,
        );
    }
}
}