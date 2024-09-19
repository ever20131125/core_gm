<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VoiceType enum
 */
final class VoiceType
{
    const BackMusic = 0;
    const Room = 1;
    const Guild = 2;
    const Anchor = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'BackMusic' => self::BackMusic,
            'Room' => self::Room,
            'Guild' => self::Guild,
            'Anchor' => self::Anchor,
        );
    }
}
}