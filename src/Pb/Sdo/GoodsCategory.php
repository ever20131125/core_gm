<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GoodsCategory enum
 */
final class GoodsCategory
{
    const enmGoodsCategory_Cloth = 0;
    const enmGoodsCategory_Luxury = 1;
    const enmGoodsCategory_Paint = 2;
    const enmGoodsCategory_Beauty = 3;
    const enmGoodsCategory_Props = 4;
    const enmGoodsCategory_Hide = 5;
    const enmGoodsCategory_Count = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmGoodsCategory_Cloth' => self::enmGoodsCategory_Cloth,
            'enmGoodsCategory_Luxury' => self::enmGoodsCategory_Luxury,
            'enmGoodsCategory_Paint' => self::enmGoodsCategory_Paint,
            'enmGoodsCategory_Beauty' => self::enmGoodsCategory_Beauty,
            'enmGoodsCategory_Props' => self::enmGoodsCategory_Props,
            'enmGoodsCategory_Hide' => self::enmGoodsCategory_Hide,
            'enmGoodsCategory_Count' => self::enmGoodsCategory_Count,
        );
    }
}
}