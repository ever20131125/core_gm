<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SceneType enum
 */
final class SceneType
{
    const enmSceneType_Normal = 0;
    const enmSceneType_BG = 1;
    const enmSceneType_Leisure = 2;
    const enmSceneType_Client3 = 3;
    const enmSceneType_Client4 = 4;
    const enmSceneType_Client5 = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmSceneType_Normal' => self::enmSceneType_Normal,
            'enmSceneType_BG' => self::enmSceneType_BG,
            'enmSceneType_Leisure' => self::enmSceneType_Leisure,
            'enmSceneType_Client3' => self::enmSceneType_Client3,
            'enmSceneType_Client4' => self::enmSceneType_Client4,
            'enmSceneType_Client5' => self::enmSceneType_Client5,
        );
    }
}
}