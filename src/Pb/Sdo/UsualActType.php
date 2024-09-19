<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UsualActType enum
 */
final class UsualActType
{
    const enmUsualActType_Null = 0;
    const enmUsualActType_GuildDance = 1;
    const enmUsualActType_GuildDonate = 2;
    const enmUsualActType_GuildWorship = 3;
    const enmUsualActType_CommonDacne = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmUsualActType_Null' => self::enmUsualActType_Null,
            'enmUsualActType_GuildDance' => self::enmUsualActType_GuildDance,
            'enmUsualActType_GuildDonate' => self::enmUsualActType_GuildDonate,
            'enmUsualActType_GuildWorship' => self::enmUsualActType_GuildWorship,
            'enmUsualActType_CommonDacne' => self::enmUsualActType_CommonDacne,
        );
    }
}
}