<?php
/**
 * Auto generated from define.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GameMeans enum
 */
final class GameMeans
{
    const enmGameMeans_Play = 0;
    const enmGameMeans_Observe = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGameMeans_Play' => self::enmGameMeans_Play,
            'enmGameMeans_Observe' => self::enmGameMeans_Observe,
        );
    }
}
}