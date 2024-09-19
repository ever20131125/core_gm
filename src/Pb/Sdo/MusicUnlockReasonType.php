<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MusicUnlockReasonType enum
 */
final class MusicUnlockReasonType
{
    const enmMusicUnlockReasonType_None = 0;
    const enmMusicUnlockReasonType_UseItem = 1;
    const enmMusicUnlockReasonType_DancerChallenge = 2;
    const enmMusicUnlockReasonType_LevelUp = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmMusicUnlockReasonType_None' => self::enmMusicUnlockReasonType_None,
            'enmMusicUnlockReasonType_UseItem' => self::enmMusicUnlockReasonType_UseItem,
            'enmMusicUnlockReasonType_DancerChallenge' => self::enmMusicUnlockReasonType_DancerChallenge,
            'enmMusicUnlockReasonType_LevelUp' => self::enmMusicUnlockReasonType_LevelUp,
        );
    }
}
}