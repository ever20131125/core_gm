<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WXVoteSource enum
 */
final class WXVoteSource
{
    const enmWXVoteSource_Null = 0;
    const enmWXVoteSource_Share = 1;
    const enmWXVoteSource_Download = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmWXVoteSource_Null' => self::enmWXVoteSource_Null,
            'enmWXVoteSource_Share' => self::enmWXVoteSource_Share,
            'enmWXVoteSource_Download' => self::enmWXVoteSource_Download,
        );
    }
}
}