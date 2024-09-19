<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SpeakerSourceType enum
 */
final class SpeakerSourceType
{
    const enmSpeakerSourceType_Common = 0;
    const enmSpeakerSourceType_LoverTask = 1;
    const enmSpeakerSourceType_GuildTask = 2;
    const enmSpeakerSourceType_GuildRecruit = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSpeakerSourceType_Common' => self::enmSpeakerSourceType_Common,
            'enmSpeakerSourceType_LoverTask' => self::enmSpeakerSourceType_LoverTask,
            'enmSpeakerSourceType_GuildTask' => self::enmSpeakerSourceType_GuildTask,
            'enmSpeakerSourceType_GuildRecruit' => self::enmSpeakerSourceType_GuildRecruit,
        );
    }
}
}