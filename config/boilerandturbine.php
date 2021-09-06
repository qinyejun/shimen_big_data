<?php
return [
    //锅炉运行报表
    'boiler5run' => array(
        "tableA" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "汽水系统",
                "tagList" => array(
                    array(
                        "cn_name" => "汽包压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRA_06",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "汽包水位",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.LRSA_01",
                        "measure" => "mm"
                    ),
                    array(
                        "cn_name" => "蒸汽压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRSA_10",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "蒸汽温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "蒸汽流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "蒸汽流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "给水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_633",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "给水压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PIA_01",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "给水流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_01COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "给水流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_01COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "一减流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FR_02COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "一减流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FR_02COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "二减流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FR_03COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "二减流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FR_03COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "低过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_05",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "低过出口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_06",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_07",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过出口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_08",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "高过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_09",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "风烟道系统温度",
                "tagList" => array(
                    array(
                        "cn_name" => "炉膛下部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛中部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛上部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_18PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛出口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_19L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "一烟道上部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_19L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "三烟道入口左",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_20L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "三烟道入口右",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_20R",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "高过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_21L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_22L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "低过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_23L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "省煤器入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_24L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "排烟温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_26R",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "布袋入口烟温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRC_52",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "布袋出口烟温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_53",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "液压系统",
                "tagList" => array(
                    array(
                        "cn_name" => "油温",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS05..M_TI_01Y",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "油压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS05..M_PI_01Y",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "油位",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS05..M_LI_01Y",
                        "measure" => "mm"
                    )
                )
            )
        ),
        "tableB" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "送引风系统",
                "tagList" => array(
                    array(
                        "cn_name" => "送风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRC_07COM",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "送风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.GF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "送风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.GF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "cn_name" => "送风机出口风压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_15",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "左总风室风压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS05..M_PI_130L",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "右总风室风压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS05..M_PI_130R",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "引风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_LL",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "引风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.YF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "引风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.YF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "systemName" => "一次风蒸预器风温",
                        "tagList" => array(
                            array(
                                "cn_name" => "低压",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRC_13",
                                "measure" => "℃"
                            ),
                            array(
                                "cn_name" => "高压",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRC_14",
                                "measure" => "℃"
                            ),
                        )
                    ),
                    array(
                        "cn_name" => "一次风温度",
                        "tag_name" => "once_wind_temperature",
                        "measure" => "℃",
                        "type" => "input"
                    ),
                    array(
                        "cn_name" => "二次风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRC_08COM",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "二次风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.RF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "二次风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.RF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "cn_name" => "二次风压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_16",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "二次风温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_46",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "风烟道路系统压力",
                "tagList" => array(
                    array(
                        "cn_name" => "炉膛出口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "三烟道入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_20L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "高过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_21L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "中过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_22L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "低过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_23L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "省煤器入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_24L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "省煤器出口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_25L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "中和塔入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_26L",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "布袋入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_52",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "引风机入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PI_56",
                        "measure" => "KPa"
                    )
                )
            ),
            array(
                "systemName" => "空压系统",
                "tagList" => array(
                    array(
                        "cn_name" => "压缩空气总压力",
                        "tag_name" => "air_compression_pressure",
                        "measure" => "MPa",
                        "type" => "input"
                    ),
                    array(
                        "cn_name" => "工业用气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.PI_024",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "仪表用气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.PI_025",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "布袋吹灰压力",
                        "tag_name" => "hop_pocket_blowing_pressure",
                        "measure" => "MPa",
                        "type" => "input"
                    )
                )
            )
        )
    ),
    'boiler6run' => array(
        "tableA" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "汽水系统",
                "tagList" => array(
                    array(
                        "cn_name" => "汽包压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRA_06",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "汽包水位",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.LRSA_01",
                        "measure" => "mm"
                    ),
                    array(
                        "cn_name" => "蒸汽压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRSA_10",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "蒸汽温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "蒸汽流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "蒸汽流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "给水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_633",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "给水压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PIA_01",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "给水流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_01COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "给水流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_01COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "一减流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FR_02COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "一减流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FR_02COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "二减流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FR_03COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "二减流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FR_03COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "低过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_05",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "低过出口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_06",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_07",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过出口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_08",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "高过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_09",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "风烟道系统温度",
                "tagList" => array(
                    array(
                        "cn_name" => "炉膛下部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛中部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛上部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_18PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛出口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_19L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "一烟道上部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_19L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "三烟道入口左",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_20L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "三烟道入口右",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_20R",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "高过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_21L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_22L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "低过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_23L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "省煤器入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_24L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "排烟温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_26R",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "布袋入口烟温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRC_52",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "布袋出口烟温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_53",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "液压系统",
                "tagList" => array(
                    array(
                        "cn_name" => "油温",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS06..M_TI_01Y",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "油压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS06..M_PI_01Y",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "油位",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS06..M_LI_01Y",
                        "measure" => "mm"
                    )
                )
            )
        ),
        "tableB" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "送引风系统",
                "tagList" => array(
                    array(
                        "cn_name" => "送风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRC_07COM",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "送风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.GF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "送风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.GF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "cn_name" => "送风机出口风压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_15",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "左总风室风压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS06..M_PI_130L",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "右总风室风压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS06..M_PI_130R",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "引风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_LL",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "引风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.YF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "引风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.YF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "systemName" => "一次风蒸预器风温",
                        "tagList" => array(
                            array(
                                "cn_name" => "低压",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRC_13",
                                "measure" => "℃"
                            ),
                            array(
                                "cn_name" => "高压",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRC_14",
                                "measure" => "℃"
                            ),
                        )
                    ),
                    array(
                        "cn_name" => "一次风温度",
                        "tag_name" => "once_wind_temperature",
                        "measure" => "℃",
                        "type" => "input"
                    ),
                    array(
                        "cn_name" => "二次风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRC_08COM",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "二次风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.RF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "二次风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.RF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "cn_name" => "二次风压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_16",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "二次风温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_46",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "风烟道路系统压力",
                "tagList" => array(
                    array(
                        "cn_name" => "炉膛出口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "三烟道入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_20L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "高过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_21L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "中过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_22L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "低过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_23L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "省煤器入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_24L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "省煤器出口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_25L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "中和塔入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_26L",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "布袋入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_52",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "引风机入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PI_56",
                        "measure" => "KPa"
                    )
                )
            ),
            array(
                "systemName" => "空压系统",
                "tagList" => array(
                    array(
                        "cn_name" => "压缩空气总压力",
                        "tag_name" => "air_compression_pressure",
                        "measure" => "MPa",
                        "type" => "input"
                    ),
                    array(
                        "cn_name" => "工业用气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.PI_024",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "仪表用气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.PI_025",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "布袋吹灰压力",
                        "tag_name" => "hop_pocket_blowing_pressure",
                        "measure" => "MPa",
                        "type" => "input"
                    )
                )
            )
        )
    ),
    'boiler7run' => array(
        "tableA" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "汽水系统",
                "tagList" => array(
                    array(
                        "cn_name" => "汽包压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRA_06",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "汽包水位",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.LRSA_01",
                        "measure" => "mm"
                    ),
                    array(
                        "cn_name" => "蒸汽压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRSA_10",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "蒸汽温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "蒸汽流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "蒸汽流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "给水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_633",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "给水压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PIA_01",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "给水流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_01COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "给水流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_01COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "一减流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FR_02COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "一减流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FR_02COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "二减流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FR_03COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "二减流量累计",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FR_03COM_Acc",
                        "measure" => "T"
                    ),
                    array(
                        "cn_name" => "低过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_05",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "低过出口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_06",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_07",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过出口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_08",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "高过入口气温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_09",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "风烟道系统温度",
                "tagList" => array(
                    array(
                        "cn_name" => "炉膛下部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛中部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛上部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_18PJ",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "炉膛出口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_19L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "一烟道上部",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_19L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "三烟道入口左",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_20L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "三烟道入口右",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_20R",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "高过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_21L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "中过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_22L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "低过入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_23L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "省煤器入口",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_24L",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "排烟温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_26R",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "布袋入口烟温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRC_52",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "布袋出口烟温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_53",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "液压系统",
                "tagList" => array(
                    array(
                        "cn_name" => "油温",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS07..M_TI_01Y",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "油压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS07..M_PI_01Y",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "油位",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS07..M_LI_01Y",
                        "measure" => "mm"
                    )
                )
            )
        ),
        "tableB" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "送引风系统",
                "tagList" => array(
                    array(
                        "cn_name" => "送风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRC_07COM",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "送风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.GF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "送风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.GF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "cn_name" => "送风机出口风压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_15",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "左总风室风压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS07..M_PI_130L",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "右总风室风压",
                        "tag_name" => "DESKTOP-T2UTQV2.ACCS07..M_PI_130R",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "引风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_LL",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "引风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.YF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "引风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.YF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "systemName" => "一次风蒸预器风温",
                        "tagList" => array(
                            array(
                                "cn_name" => "低压",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRC_13",
                                "measure" => "℃"
                            ),
                            array(
                                "cn_name" => "高压",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRC_14",
                                "measure" => "℃"
                            ),
                        )
                    ),
                    array(
                        "cn_name" => "一次风温度",
                        "tag_name" => "once_wind_temperature",
                        "measure" => "℃",
                        "type" => "input"
                    ),
                    array(
                        "cn_name" => "二次风机风量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRC_08COM",
                        "measure" => "Nm³/h"
                    ),
                    array(
                        "cn_name" => "二次风机电流",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.RF_CE1",
                        "measure" => "A"
                    ),
                    array(
                        "cn_name" => "二次风机转速",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.RF_CE2",
                        "measure" => "r/mi"
                    ),
                    array(
                        "cn_name" => "二次风压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_16",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "二次风温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_46",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "风烟道路系统压力",
                "tagList" => array(
                    array(
                        "cn_name" => "炉膛出口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "三烟道入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_20L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "高过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_21L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "中过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_22L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "低过前负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_23L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "省煤器入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_24L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "省煤器出口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_25L",
                        "measure" => "Pa"
                    ),
                    array(
                        "cn_name" => "中和塔入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_26L",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "布袋入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_52",
                        "measure" => "KPa"
                    ),
                    array(
                        "cn_name" => "引风机入口负压",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PI_56",
                        "measure" => "KPa"
                    )
                )
            ),
            array(
                "systemName" => "空压系统",
                "tagList" => array(
                    array(
                        "cn_name" => "压缩空气总压力",
                        "tag_name" => "air_compression_pressure",
                        "measure" => "MPa",
                        "type" => "input"
                    ),
                    array(
                        "cn_name" => "工业用气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.PI_024",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "仪表用气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.PI_025",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "布袋吹灰压力",
                        "tag_name" => "hop_pocket_blowing_pressure",
                        "measure" => "MPa",
                        "type" => "input"
                    )
                )
            )
        )
    ),
    //汽机运行报表
    'turbine3run' => array(
        "tableA" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "cn_name" => "发电机功率",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.DEH_5R2",
                "measure" => "Kw"
            ),
            array(
                "systemName" => "主蒸汽",
                "tagList" => array(
                    array(
                        "cn_name" => "进气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PRA_503",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "进气温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TRA_502",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "进气流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_501COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "累计流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_501COM_Acc",
                        "measure" => "t/h"
                    )
                )
            ),
            array(
                "cn_name" => "调节级压力",
                "tag_name" => "adjust_pressure",
                "measure" => "MPa",
                "type"=>"input"
            ),
            array(
                "systemName" => "抽气",
                "tagList" => array(
                    array(
                        "systemName" => "一级",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_525",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "温度",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_525",
                                "measure" => "℃"
                            ),
                        )
                    ),
                    array(
                        "systemName" => "二级",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_527",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "温度",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_526",
                                "measure" => "℃"
                            ),
                        )
                    ),
                    array(
                        "systemName" => "三级",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_529",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "温度",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_527",
                                "measure" => "℃"
                            ),
                        )
                    )
                )
            ),
            array(
                "systemName" => "排气",
                "tagList" => array(
                    array(
                        "cn_name" => "压力",
                        "tag_name" => "venting_pressure",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TISA_512A",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "射水抽汽器",
                "tagList" => array(
                    array(
                        "systemName" => "一号",
                        "tagList" => array(
                            array(
                                "cn_name" => "射水压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PISA_539",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "真空",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_508",
                                "measure" => "KPa"
                            ),
                        )
                    ),
                    array(
                        "systemName" => "二号",
                        "tagList" => array(
                            array(
                                "cn_name" => "射水压力",
                                "tag_name" => "no2_spray_water_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "真空",
                                "tag_name" => "no2_spray_water_vacuum",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                        )
                    )
                )
            ),
            array(
                "systemName" => "油压",
                "tagList" => array(
                    array(
                        "cn_name" => "主油泵出口油",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_577C",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "调节油",
                        "tag_name" => "pilot_oil",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "保安油",
                        "tag_name" => "security_oil",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "OPC油",
                        "tag_name" => "opc_oil",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "润滑油",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_551",
                        "measure" => "MPa"
                    )
                )
            ),
            array(
                "systemName" => "冷油器",
                "tagList" => array(
                    array(
                        "cn_name" => "进油油温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_571",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出油油温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_562E",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "进水水温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_562C",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出水水温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_562D",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "cn_name" => "胀差1",
                "tag_name" => "no1_diff_exp",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "胀差2",
                "tag_name" => "no2_diff_exp",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "轴封位移1",
                "tag_name" => "no1_shaft_seal",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "轴封位移2",
                "tag_name" => "no2_shaft_seal",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "systemName" => "轴承温度",
                "tagList" => array(
                    array(
                        "systemName" => "汽轮机",
                        "tagList" => array(
                            array(
                                "cn_name" => "推力轴承",
                                "tag_name" => "turbine_push_bearing",
                                "measure" => "℃",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "前轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_576A",
                                "measure" => "℃"
                            ),
                            array(
                                "cn_name" => "后轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_577A",
                                "measure" => "℃"
                            )
                        )
                    ),
                    array(
                        "systemName" => "发电机",
                        "tagList" => array(
                            array(
                                "cn_name" => "前轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_578A",
                                "measure" => "℃"
                            ),
                            array(
                                "cn_name" => "后轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_579A",
                                "measure" => "℃"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "发电机风温",
                "tagList" => array(
                    array(
                        "cn_name" => "前进风",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_562B",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出风",
                        "tag_name" => "air_out",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "后进风",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_562A",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "汽轮机振动",
                "tagList" => array(
                    array(
                        "cn_name" => "前轴承座",
                        "tag_name" => "turbine_front_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "后轴承座",
                        "tag_name" => "turbine_rear_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    )
                )
            ),
            array(
                "systemName" => "发电机振动",
                "tagList" => array(
                    array(
                        "cn_name" => "前轴承座",
                        "tag_name" => "electric_front_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "后轴承座",
                        "tag_name" => "electric_rear_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    )
                )
            )
        ),
        "tableB" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "均压箱",
                "tagList" => array(
                    array(
                        "cn_name" => "压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PICA_535",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TICA_505B",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "凝汽器",
                "tagList" => array(
                    array(
                        "cn_name" => "进水压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_1017",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_562C",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出水压力",
                        "tag_name" => "exit_water_pressure",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_573",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "凝结水温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_501",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "真空",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_508",
                        "measure" => "MPa"
                    )
                )
            ),
            array(
                "cn_name" => "凝结水总管压力",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PISA_516",
                "measure" => "MPa"
            ),
            array(
                "systemName" => "汽封加热器",
                "tagList" => array(
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "enter_water_temperature",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "exit_water_temperature",
                        "measure" => "℃",
                        "type"=>"input"
                    )
                )
            ),
            array(
                "systemName" => "低加",
                "tagList" => array(
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_516B",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TI_523",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "除氧器",
                "tagList" => array(
                    array(
                        "cn_name" => "压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PICA_638A",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635A",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "水位",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LICSA_604A",
                        "measure" => "mm"
                    )
                )
            ),
            array(
                "systemName" => "给水泵系统",
                "tagList" => array(
                    array(
                        "cn_name" => "母管压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PICSA_633",
                        "measure" => "MPa"
                    ),
                    array(
                        "systemName" => "6#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no6_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB1_6_CE1",
                                "measure" => "A"
                            )
                        )
                    ),
                    array(
                        "systemName" => "7#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no7_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB2_6_CE1",
                                "measure" => "A"
                            )
                        )
                    ),
                    array(
                        "systemName" => "8#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no8_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB3_6_CE1",
                                "measure" => "A"
                            )
                        )
                    ),
                    array(
                        "systemName" => "9#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no9_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB4_6_CE1",
                                "measure" => "A"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "循环水泵系统",
                "tagList" => array(
                    array(
                        "systemName" => "5#循环泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no5_circulating_water_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "no5_circulating_water_pump_electricity",
                                "measure" => "A",
                                "type"=>"input"
                            )
                        )
                    ),
                    array(
                        "systemName" => "6#循环泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no6_circulating_water_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "no6_circulating_water_pump_electricity",
                                "measure" => "A",
                                "type"=>"input"
                            )
                        )
                    ),
                    array(
                        "systemName" => "7#循环泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no7_circulating_water_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "no7_circulating_water_pump_electricity",
                                "measure" => "A",
                                "type"=>"input"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "空冷器",
                "tagList" => array(
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_562C",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_570",
                        "measure" => "MPa"
                    )
                )
            ),
            array(
                "cn_name" => "邮箱油位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LIA_506",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "循环池水位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LISA_1004",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "疏水箱水位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LISA_607A",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "射水箱水位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LICA_505",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "5#冷却风扇油位",
                "tag_name" => "no5_cold_wind_oil_position",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "5#冷却风扇振动",
                "tag_name" => "no5_cold_wind_shake",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "6#冷却风扇油位",
                "tag_name" => "no6_cold_wind_oil_position",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "6#冷却风扇振动",
                "tag_name" => "no6_cold_wind_shake",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "7#冷却风扇油位",
                "tag_name" => "no7_cold_wind_oil_position",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "7#冷却风扇振动",
                "tag_name" => "no7_cold_wind_shake",
                "measure" => "mm",
                "type"=>"input"
            )
        ),
    ),
    'turbine4run' => array(
        "tableA" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "cn_name" => "发电机功率",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.DEH_4R2",
                "measure" => "Kw"
            ),
            array(
                "systemName" => "主蒸汽",
                "tagList" => array(
                    array(
                        "cn_name" => "进气压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PRA_403",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "进气温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TRA_402",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "进气流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_401COM",
                        "measure" => "t/h"
                    ),
                    array(
                        "cn_name" => "累计流量",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_401COM_Acc",
                        "measure" => "t/h"
                    )
                )
            ),
            array(
                "cn_name" => "调节级压力",
                "tag_name" => "adjust_pressure",
                "measure" => "MPa",
                "type"=>"input"
            ),
            array(
                "systemName" => "抽气",
                "tagList" => array(
                    array(
                        "systemName" => "一级",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_425",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "温度",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_425",
                                "measure" => "℃"
                            ),
                        )
                    ),
                    array(
                        "systemName" => "二级",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_427",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "温度",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_426",
                                "measure" => "℃"
                            ),
                        )
                    ),
                    array(
                        "systemName" => "三级",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_429",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "温度",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_427",
                                "measure" => "℃"
                            ),
                        )
                    )
                )
            ),
            array(
                "systemName" => "排气",
                "tagList" => array(
                    array(
                        "cn_name" => "压力",
                        "tag_name" => "venting_pressure",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TISA_412A",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "射水抽汽器",
                "tagList" => array(
                    array(
                        "systemName" => "一号",
                        "tagList" => array(
                            array(
                                "cn_name" => "射水压力",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PISA_439",
                                "measure" => "MPa"
                            ),
                            array(
                                "cn_name" => "真空",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_408",
                                "measure" => "KPa"
                            ),
                        )
                    ),
                    array(
                        "systemName" => "二号",
                        "tagList" => array(
                            array(
                                "cn_name" => "射水压力",
                                "tag_name" => "no2_spray_water_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "真空",
                                "tag_name" => "no2_spray_water_vacuum",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                        )
                    )
                )
            ),
            array(
                "systemName" => "油压",
                "tagList" => array(
                    array(
                        "cn_name" => "主油泵出口油",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_477C",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "调节油",
                        "tag_name" => "pilot_oil",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "保安油",
                        "tag_name" => "security_oil",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "OPC油",
                        "tag_name" => "opc_oil",
                        "measure" => "MPa",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "润滑油",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_451",
                        "measure" => "MPa"
                    )
                )
            ),
            array(
                "systemName" => "冷油器",
                "tagList" => array(
                    array(
                        "cn_name" => "进油油温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_471",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出油油温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_462E",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "进水水温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_462C",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出水水温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_462D",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "cn_name" => "胀差1",
                "tag_name" => "no1_diff_exp",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "胀差2",
                "tag_name" => "no2_diff_exp",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "轴封位移1",
                "tag_name" => "no1_shaft_seal",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "轴封位移2",
                "tag_name" => "no2_shaft_seal",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "systemName" => "轴承温度",
                "tagList" => array(
                    array(
                        "systemName" => "汽轮机",
                        "tagList" => array(
                            array(
                                "cn_name" => "推力轴承",
                                "tag_name" => "turbine_push_bearing",
                                "measure" => "℃",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "前轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_476A",
                                "measure" => "℃"
                            ),
                            array(
                                "cn_name" => "后轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_477A",
                                "measure" => "℃"
                            )
                        )
                    ),
                    array(
                        "systemName" => "发电机",
                        "tagList" => array(
                            array(
                                "cn_name" => "前轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_478A",
                                "measure" => "℃"
                            ),
                            array(
                                "cn_name" => "后轴承",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_479A",
                                "measure" => "℃"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "发电机风温",
                "tagList" => array(
                    array(
                        "cn_name" => "前进风",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_462B",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出风",
                        "tag_name" => "air_out",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "后进风",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_462A",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "汽轮机振动",
                "tagList" => array(
                    array(
                        "cn_name" => "前轴承座",
                        "tag_name" => "turbine_front_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "后轴承座",
                        "tag_name" => "turbine_rear_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    )
                )
            ),
            array(
                "systemName" => "发电机振动",
                "tagList" => array(
                    array(
                        "cn_name" => "前轴承座",
                        "tag_name" => "electric_front_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "后轴承座",
                        "tag_name" => "electric_rear_bearing_housing",
                        "measure" => "℃",
                        "type"=>"input"
                    )
                )
            )
        ),
        "tableB" => array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => "单位"
            ),
            array(
                "systemName" => "均压箱",
                "tagList" => array(
                    array(
                        "cn_name" => "压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PICA_435",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TICA_405B",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "凝汽器",
                "tagList" => array(
                    array(
                        "cn_name" => "进水压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_1017",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_462C",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出水压力",
                        "tag_name" => "exit_water_pressure",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_473",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "凝结水温",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_401",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "真空",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PIA_408",
                        "measure" => "MPa"
                    )
                )
            ),
            array(
                "cn_name" => "凝结水总管压力",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PISA_416",
                "measure" => "MPa"
            ),
            array(
                "systemName" => "汽封加热器",
                "tagList" => array(
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "enter_water_temperature",
                        "measure" => "℃",
                        "type"=>"input"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "exit_water_temperature",
                        "measure" => "℃",
                        "type"=>"input"
                    )
                )
            ),
            array(
                "systemName" => "低加",
                "tagList" => array(
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_416B",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TI_423",
                        "measure" => "℃"
                    )
                )
            ),
            array(
                "systemName" => "除氧器",
                "tagList" => array(
                    array(
                        "cn_name" => "压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PICA_638B",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635B",
                        "measure" => "℃"
                    ),
                    array(
                        "cn_name" => "水位",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LICSA_604B",
                        "measure" => "mm"
                    )
                )
            ),
            array(
                "systemName" => "给水泵系统",
                "tagList" => array(
                    array(
                        "cn_name" => "母管压力",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.PICSA_633",
                        "measure" => "MPa"
                    ),
                    array(
                        "systemName" => "6#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no6_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB1_6_CE1",
                                "measure" => "A"
                            )
                        )
                    ),
                    array(
                        "systemName" => "7#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no7_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB2_6_CE1",
                                "measure" => "A"
                            )
                        )
                    ),
                    array(
                        "systemName" => "8#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no8_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB3_6_CE1",
                                "measure" => "A"
                            )
                        )
                    ),
                    array(
                        "systemName" => "9#给水泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no9_feed_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.GB4_6_CE1",
                                "measure" => "A"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "循环水泵系统",
                "tagList" => array(
                    array(
                        "systemName" => "5#循环泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no5_circulating_water_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "no5_circulating_water_pump_electricity",
                                "measure" => "A",
                                "type"=>"input"
                            )
                        )
                    ),
                    array(
                        "systemName" => "6#循环泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no6_circulating_water_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "no6_circulating_water_pump_electricity",
                                "measure" => "A",
                                "type"=>"input"
                            )
                        )
                    ),
                    array(
                        "systemName" => "7#循环泵",
                        "tagList" => array(
                            array(
                                "cn_name" => "压力",
                                "tag_name" => "no7_circulating_water_pump_pressure",
                                "measure" => "MPa",
                                "type"=>"input"
                            ),
                            array(
                                "cn_name" => "电流",
                                "tag_name" => "no7_circulating_water_pump_electricity",
                                "measure" => "A",
                                "type"=>"input"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "空冷器",
                "tagList" => array(
                    array(
                        "cn_name" => "进水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_462C",
                        "measure" => "MPa"
                    ),
                    array(
                        "cn_name" => "出水温度",
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_470",
                        "measure" => "MPa"
                    )
                )
            ),
            array(
                "cn_name" => "邮箱油位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LIA_406",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "循环池水位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LISA_1004",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "疏水箱水位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LISA_607B",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "射水箱水位",
                "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.LICA_405",
                "measure" => "mm"
            ),
            array(
                "cn_name" => "5#冷却风扇油位",
                "tag_name" => "no5_cold_wind_oil_position",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "5#冷却风扇振动",
                "tag_name" => "no5_cold_wind_shake",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "6#冷却风扇油位",
                "tag_name" => "no6_cold_wind_oil_position",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "6#冷却风扇振动",
                "tag_name" => "no6_cold_wind_shake",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "7#冷却风扇油位",
                "tag_name" => "no7_cold_wind_oil_position",
                "measure" => "mm",
                "type"=>"input"
            ),
            array(
                "cn_name" => "7#冷却风扇振动",
                "tag_name" => "no7_cold_wind_shake",
                "measure" => "mm",
                "type"=>"input"
            )
        ),
    ),

    //人工采集数据tag
    'boilerTurbineTag' => array(
        "boiler5run"=>array(
            array(
                "en_name" => "once_wind_temperature",
                "cn_name" => "送引风系统一次风温",
                "measure" => "℃"
            ),
            array(
                "en_name" => "air_compression_pressure",
                "cn_name" => "空压系统压缩空气总压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "hop_pocket_blowing_pressure",
                "cn_name" => "空压系统布袋吹灰压力",
                "measure" => "MPa"
            )
        ),
        "boiler6run"=>array(
            array(
                "en_name" => "once_wind_temperature",
                "cn_name" => "送引风系统一次风温",
                "measure" => "℃"
            ),
            array(
                "en_name" => "air_compression_pressure",
                "cn_name" => "空压系统压缩空气总压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "hop_pocket_blowing_pressure",
                "cn_name" => "空压系统布袋吹灰压力",
                "measure" => "MPa"
            )
        ),
        "boiler7run"=>array(
            array(
                "en_name" => "once_wind_temperature",
                "cn_name" => "送引风系统一次风温",
                "measure" => "℃"
            ),
            array(
                "en_name" => "air_compression_pressure",
                "cn_name" => "空压系统压缩空气总压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "hop_pocket_blowing_pressure",
                "cn_name" => "空压系统布袋吹灰压力",
                "measure" => "MPa"
            )
        ),
        "turbine3run"=>array(
            array(
                "en_name" => "adjust_pressure",
                "cn_name" => "调节级压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "venting_pressure",
                "cn_name" => "排气压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no2_spray_water_pressure",
                "cn_name" => "射水抽汽器二号射水压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no2_spray_water_vacuum",
                "cn_name" => "射水抽汽器二号真空",
                "measure" => "KPa"
            ),
            array(
                "en_name" => "pilot_oil",
                "cn_name" => "油压调节油",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "security_oil",
                "cn_name" => "油压保安油",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "opc_oil",
                "cn_name" => "油压OPC油",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no1_diff_exp",
                "cn_name" => "胀差1",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no2_diff_exp",
                "cn_name" => "胀差2",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no1_shaft_seal",
                "cn_name" => "轴封位移1",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no2_shaft_seal",
                "cn_name" => "轴封位移2",
                "measure" => "mm"
            ),
            array(
                "en_name" => "turbine_push_bearing",
                "cn_name" => "汽轮机推力轴承",
                "measure" => "mm"
            ),
            array(
                "en_name" => "air_out",
                "cn_name" => "发电机风温出风",
                "measure" => "℃"
            ),
            array(
                "en_name" => "turbine_front_bearing_housing",
                "cn_name" => "汽轮机振动前轴承座",
                "measure" => "mm"
            ),
            array(
                "en_name" => "turbine_rear_bearing_housing",
                "cn_name" => "汽轮机振动后轴承座",
                "measure" => "mm"
            ),
            array(
                "en_name" => "enter_water_temperature",
                "cn_name" => "汽封加热器进水温度",
                "measure" => "℃"
            ),
            array(
                "en_name" => "exit_water_pressure",
                "cn_name" => "凝汽器出水压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no6_feed_pump_pressure",
                "cn_name" => "6#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no7_feed_pump_pressure",
                "cn_name" => "7#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no8_feed_pump_pressure",
                "cn_name" => "8#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no9_feed_pump_pressure",
                "cn_name" => "9#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no5_circulating_water_pump_pressure",
                "cn_name" => "5#循环泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no5_circulating_water_pump_electricity",
                "cn_name" => "5#循环泵电流",
                "measure" => "A"
            ),
            array(
                "en_name" => "no6_circulating_water_pump_pressure",
                "cn_name" => "6#循环泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no6_circulating_water_pump_electricity",
                "cn_name" => "6#循环泵电流",
                "measure" => "A"
            ),
            array(
                "en_name" => "no7_circulating_water_pump_pressure",
                "cn_name" => "7#循环泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no7_circulating_water_pump_electricity",
                "cn_name" => "7#循环泵电流",
                "measure" => "A"
            ),
            array(
                "en_name" => "no5_cold_wind_oil_position",
                "cn_name" => "5#冷却风扇油位",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no5_cold_wind_shake",
                "cn_name" => "5#冷却风扇振动",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no6_cold_wind_oil_position",
                "cn_name" => "6#冷却风扇油位",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no6_cold_wind_shake",
                "cn_name" => "6#冷却风扇振动",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no7_cold_wind_oil_position",
                "cn_name" => "7#冷却风扇油位",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no7_cold_wind_shake",
                "cn_name" => "7#冷却风扇振动",
                "measure" => "mm"
            )
        ),
        "turbine4run"=>array(
            array(
                "en_name" => "adjust_pressure",
                "cn_name" => "调节级压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "venting_pressure",
                "cn_name" => "排气压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no2_spray_water_pressure",
                "cn_name" => "射水抽汽器二号射水压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no2_spray_water_vacuum",
                "cn_name" => "射水抽汽器二号真空",
                "measure" => "KPa"
            ),
            array(
                "en_name" => "pilot_oil",
                "cn_name" => "油压调节油",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "security_oil",
                "cn_name" => "油压保安油",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "opc_oil",
                "cn_name" => "油压OPC油",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no1_diff_exp",
                "cn_name" => "胀差1",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no2_diff_exp",
                "cn_name" => "胀差2",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no1_shaft_seal",
                "cn_name" => "轴封位移1",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no2_shaft_seal",
                "cn_name" => "轴封位移2",
                "measure" => "mm"
            ),
            array(
                "en_name" => "air_out",
                "cn_name" => "发电机风温出风",
                "measure" => "℃"
            ),
            array(
                "en_name" => "turbine_front_bearing_housing",
                "cn_name" => "汽轮机振动前轴承座",
                "measure" => "mm"
            ),
            array(
                "en_name" => "turbine_rear_bearing_housing",
                "cn_name" => "汽轮机振动后轴承座",
                "measure" => "mm"
            ),
            array(
                "en_name" => "enter_water_temperature",
                "cn_name" => "汽封加热器进水温度",
                "measure" => "℃"
            ),
            array(
                "en_name" => "exit_water_pressure",
                "cn_name" => "凝汽器出水压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no6_feed_pump_pressure",
                "cn_name" => "6#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no7_feed_pump_pressure",
                "cn_name" => "7#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no8_feed_pump_pressure",
                "cn_name" => "8#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no9_feed_pump_pressure",
                "cn_name" => "9#给水泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no5_circulating_water_pump_pressure",
                "cn_name" => "5#循环泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no5_circulating_water_pump_electricity",
                "cn_name" => "5#循环泵电流",
                "measure" => "A"
            ),
            array(
                "en_name" => "no6_circulating_water_pump_pressure",
                "cn_name" => "6#循环泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no6_circulating_water_pump_electricity",
                "cn_name" => "6#循环泵电流",
                "measure" => "A"
            ),
            array(
                "en_name" => "no7_circulating_water_pump_pressure",
                "cn_name" => "7#循环泵压力",
                "measure" => "MPa"
            ),
            array(
                "en_name" => "no7_circulating_water_pump_electricity",
                "cn_name" => "7#循环泵电流",
                "measure" => "A"
            ),
            array(
                "en_name" => "no5_cold_wind_oil_position",
                "cn_name" => "5#冷却风扇油位",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no5_cold_wind_shake",
                "cn_name" => "5#冷却风扇振动",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no6_cold_wind_oil_position",
                "cn_name" => "6#冷却风扇油位",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no6_cold_wind_shake",
                "cn_name" => "6#冷却风扇振动",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no7_cold_wind_oil_position",
                "cn_name" => "7#冷却风扇油位",
                "measure" => "mm"
            ),
            array(
                "en_name" => "no7_cold_wind_shake",
                "cn_name" => "7#冷却风扇振动",
                "measure" => "mm"
            )
        )
    ),

    //交接考核
    'check' => array(
        //一般考核
        "handover"=>array(
            array(
                "cn_name" => "班次",
                "tag_name" => "datetime",
                "measure" => ""
            ),
            array(
                "systemName" => "5#炉",
                "tagList" => array(
                    array(
                        "cn_name" => "锅炉蒸发量",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04_H_NUM",
                                "measure" => "T/H",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛温度最低最高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_L_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛上部左右温度偏差",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "蒸汽温度低温超温",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛负压低/高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "高过入口平均温度",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_20_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_20_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "上部及中下部平均温度超温",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_20_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_20_H_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "二次风段平均温度",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_15_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_15_H_STAND"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "6#炉",
                "tagList" => array(
                    array(
                        "cn_name" => "锅炉蒸发量",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛温度最低最高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_L_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛上部左右温度偏差",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "蒸汽温度低温超温",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛负压低/高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "高过入口平均温度",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_20_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_20_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "上部及中下部平均温度超温",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_20_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_20_H_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "二次风段平均温度",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_15_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_15_H_STAND"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "7#炉",
                "tagList" => array(
                    array(
                        "cn_name" => "锅炉蒸发量",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛温度最低最高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_L_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛上部左右温度偏差",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "蒸汽温度低温超温",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "炉膛负压低/高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "高过入口平均温度",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_20_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_20_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "上部及中下部平均温度超温",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_20_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_20_H_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "二次风段平均温度",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_15_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_15_H_STAND"
                            )
                        )
                    )
                )
            )
        ),
        //烟气考核
        "fume"=>array(
            array(
                "cn_name" => "日期",
                "tag_name" => "datetime",
                "measure" => ""
            ),
            array(
                "systemName" => "5#炉",
                "tagList" => array(
                    array(
                        "cn_name" => "SO2",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_SO2_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_SO2_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "NOx",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_NOX_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_SO2_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "HCL",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_HCL_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_HCL_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "CO",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_CO_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_CO_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "粉尘",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_FC_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_FC_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "除氧器温度低/高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_STAND"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "6#炉",
                "tagList" => array(
                    array(
                        "cn_name" => "SO2",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_SO2_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_SO2_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "NOx",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_NOX_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_SO2_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "HCL",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_HCL_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_HCL_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "CO",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_CO_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_CO_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "粉尘",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_FC_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_FC_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "除氧器温度低/高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_STAND"
                            )
                        )
                    )
                )
            ),
            array(
                "systemName" => "7#炉",
                "tagList" => array(
                    array(
                        "cn_name" => "SO2",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_SO2_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_SO2_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "NOx",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_NOX_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_SO2_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "HCL",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_HCL_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_HCL_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "CO",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_CO_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_CO_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "粉尘",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_FC_H_NUM",
                                "measure" => "mg/m³",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_FC_H_STAND"
                            )
                        )
                    ),
                    array(
                        "cn_name" => "除氧器温度低/高",
                        "tagnames" => array(
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_STAND"
                            ),
                            array(
                                "name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_NUM",
                                "measure" => "",
                                "limit_tag" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_STAND"
                            )
                        )
                    )
                )
            )
        ),
        //报警考核统计
        "alarm" => array(
            array(
                "en_name" => "no5_boiler",
                "cn_name" => "5#锅炉考核",
                "tag_list" => array(
                    array(
                        "cn_name" => "高过入口平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_20_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_20_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TR_20_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部左右温度差值",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道下部最高温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_17_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部最低温度低温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_20_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_20_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_20_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道中下部平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_16_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "过热蒸汽温度低温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "过热蒸汽温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_10A_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "锅炉烟道含氧量低限额",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.ARCA_01_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.ARCA_01_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.ARCA_01_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "二次风断面平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_15_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_15_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.TRA_15_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "炉膛出口压力低压",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "炉膛出口压力高压",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.PRCA_19_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "锅炉流量",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "逆推自动时间",
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.ACCS05..M_NTZDKH_SJLJ"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测SO2含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_SO2_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_SO2_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_SO2_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检查CO含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_CO_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_CO_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_CO_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测HCL含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_HCL_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_HCL_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_HCL_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测粉尘含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_FC_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_FC_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_FC_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测NOx含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_NOX_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_NOX_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_NOX_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测NOx含量低",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_NOX_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_NOX_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ1_NOX_L_NUM"
                        )
                    )
                ),
            ),
            array(
                "en_name" => "no6_boiler",
                "cn_name" => "6#锅炉考核",
                "tag_list" => array(
                    array(
                        "cn_name" => "高过入口平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_20_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_20_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TR_20_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部左右温度差值",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道下部最高温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_17_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部最低温度低温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_20_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_20_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_20_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道中下部平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_16_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "过热蒸汽温度低温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "过热蒸汽温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_10A_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "锅炉烟道含氧量低限额",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.ARCA_01_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.ARCA_01_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.ARCA_01_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "二次风断面平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_15_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_15_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.TRA_15_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "炉膛出口压力低压",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "炉膛出口压力高压",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.PRCA_19_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "锅炉流量",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "逆推自动时间",
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.ACCS06..M_NTZDKH_SJLJ"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测SO2含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_SO2_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_SO2_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_SO2_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检查CO含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_CO_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_CO_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_CO_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测HCL含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_HCL_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_HCL_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_HCL_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测粉尘含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_FC_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_FC_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_FC_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测NOx含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_NOX_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_NOX_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_NOX_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测NOx含量低",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_NOX_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_NOX_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ2_NOX_L_NUM"
                        )
                    )
                ),
            ),
            array(
                "en_name" => "no7_boiler",
                "cn_name" => "7#锅炉考核",
                "tag_list" => array(
                    array(
                        "cn_name" => "高过入口平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_20_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_20_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TR_20_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部左右温度差值",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道下部最高温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_17_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部最低温度低温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道上部平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_20_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_20_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_20_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "一烟道中下部平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_16_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "过热蒸汽温度低温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "过热蒸汽温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_10A_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "锅炉烟道含氧量低限额",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.ARCA_01_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.ARCA_01_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.ARCA_01_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "二次风断面平均温度超温",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_15_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_15_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.TRA_15_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "炉膛出口压力低压",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_L_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "炉膛出口压力高压",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.PRCA_19_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "锅炉流量",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "逆推自动时间",
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.ACCS07..M_NTZDKH_SJLJ"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测SO2含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_SO2_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_SO2_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_SO2_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检查CO含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_CO_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_CO_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_CO_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测HCL含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_HCL_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_HCL_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_HCL_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测粉尘含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_FC_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_FC_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_FC_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测NOx含量高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_NOX_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_NOX_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_NOX_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "烟气检测NOx含量低",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"sec",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_NOX_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_NOX_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.YQ3_NOX_L_NUM"
                        )
                    )
                ),
            ),
            array(
                "en_name" => "no1_turbine",
                "cn_name" => "汽机考核",
                "tag_list" => array(
                    array(
                        "cn_name" => "除氧器水温高",
                        "time" => array(
                            "value"=>0,
                            "measure"=>"min",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_TIME"
                        ),
                        "limit" => array(
                            "value"=>0,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_H_NUM"
                        )
                    ),
                    array(
                        "cn_name" => "除氧器水温低",
                        "time" => array(
                            "value"=>10,
                            "measure"=>"min",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_TIME"
                        ),
                        "limit" => array(
                            "value"=>10,
                            "measure"=>"℃",
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_STAND"
                        ),
                        "number" => array(
                            "value"=>0,
                            "measure"=>"次", //次数
                            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.TIA_635_L_NUM"
                        )
                    )
                )
            )
        )
    ),
    //日常耗材
    "consumable" => array(
        array(
            "cn_name" => "日期",
            "tag_name" => "datetime",
            "measure" => ""
        ),
        array(
            "cn_name" => "除盐水用量",
            "input" => array(
                "tag_name" => "desalted_water",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "cn_name" => "自来水用量",
            "input" => array(
                "tag_name" => "tap_water",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "cn_name" => "上网电量",
            "input" => array(
                "tag_name" => "online_electric_energy",
                "value" => 0
            ),
            "measure" => "kwh"
        ),
        array(
            "cn_name" => "焚烧量",
            "input" => array(
                "tag_name" => "incineration_rubbish",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "cn_name" => "柴油量",
            "base" => array(
                "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                "value" => 0
            ),
            "input" => array(
                "tag_name" => "diesel",
                "value" => 0
            ),
            "measure" => "升"
        ),
        array(
            "cn_name" => "石灰量",
            "base" => array(
                "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                "value" => 0
            ),
            "input" => array(
                "tag_name" => "lime",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "systemName" => "活性炭",
            "tagList" => array(
                array(
                    "cn_name" => "1#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.HXT1_DP_LJJYL",
                        "value" => 0
                    ),
                    "input" => array(
                        "tag_name" => "no1_carbon",
                        "value" => 0
                    ),
                    "measure" => "吨"
                ),
                array(
                    "cn_name" => "2#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.HXT2_DP_LJJYL",
                        "value" => 0
                    ),
                    "input" => array(
                        "tag_name" => "no2_carbon",
                        "value" => 0
                    ),
                    "measure" => "吨"
                ),
                array(
                    "cn_name" => "3#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.Applications.CommonParts.HXT3_DP_LJJYL",
                        "value" => 0
                    ),
                    "input" => array(
                        "tag_name" => "no3_carbon",
                        "value" => 0
                    ),
                    "measure" => "吨"
                )
            )
        ),
        array(
            "cn_name" => "小苏打",
            "input" => array(
                "tag_name" => "little_soda",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "cn_name" => "片碱",
            "input" => array(
                "tag_name" => "pian_soda",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "systemName" => "尿素",
            "tagList" => array(
                array(
                    "cn_name" => "1#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.SNCR..M_SNCR_RYB_LLLJ",
                        "value" => 0
                    ),
                    "input" => array(
                        "tag_name" => "no1_urea",
                        "value" => 0
                    ),
                    "measure" => "吨"
                ),
                array(
                    "cn_name" => "2#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.SNCR..M_SNCR_RYB_LLLJ",
                        "value" => 0
                    ),
                    "input" => array(
                        "tag_name" => "no2_urea",
                        "value" => 0
                    ),
                    "measure" => "吨"
                ),
                array(
                    "cn_name" => "3#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.SNCR..M_SNCR_RYB_LLLJ",
                        "value" => 0
                    ),
                    "input" => array(
                        "tag_name" => "no3_urea",
                        "value" => 0
                    ),
                    "measure" => "吨"
                )
            )
        ),
        array(
            "cn_name" => "浓氨水",
            "base" => array(
                "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "systemName" => "氨气",
            "tagList" => array(
                array(
                    "cn_name" => "1#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                        "value" => 0
                    ),
                    "measure" => "吨"
                ),
                array(
                    "cn_name" => "2#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                        "value" => 0
                    ),
                    "measure" => "吨"
                ),
                array(
                    "cn_name" => "3#炉",
                    "base" => array(
                        "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                        "value" => 0
                    ),
                    "measure" => "吨"
                )
            )
        ),
        array(
            "cn_name" => "稀氨水",
            "base" => array(
                "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                "value" => 0
            ),
            "measure" => "吨"
        ),
        array(
            "cn_name" => "乙炔更换",
            "input" => array(
                "tag_name" => "update_acetylene_num",
                "value" => 0
            ),
            "measure" => "瓶"
        ),
        array(
            "cn_name" => "循环水液位",
            "base" => array(
                "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                "value" => 0
            ),
            "measure" => "mm"
        ),
        array(
            "cn_name" => "消防水液位",
            "base" => array(
                "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                "value" => 0
            ),
            "measure" => "mm"
        ),
        array(
            "cn_name" => "渗沥液液位",
            "base" => array(
                "tag_name" => "DESKTOP-T2UTQV2.SHZJ..M_SH_SHLJ_1",
                "value" => 0
            ),
            "measure" => "mm"
        ),
        array(
            "cn_name" => "渗沥液开泵时间",
            "input" => array(
                "tag_name" => "leachate_open_time",
                "value" => 0
            ),
            "measure" => ""
        ),
        array(
            "cn_name" => "渗沥液停泵时间",
            "input" => array(
                "tag_name" => "leachate_close_time",
                "value" => 0
            ),
            "measure" => ""
        ),
        array(
            "systemName" => "1#炉",
            "tagList" => array(
                array(
                    "cn_name" => "SO2",
                    "input" => array(
                        "tag_name" => "no1_so2",
                        "value" => 0
                    ),
                    "measure" => "mg/m³"
                ),
                array(
                    "cn_name" => "NOX",
                    "input" => array(
                        "tag_name" => "no1_nox",
                        "value" => 0
                    ),
                    "measure" => "mg/m³"
                )
            )
        ),
        array(
            "systemName" => "2#炉",
            "tagList" => array(
                array(
                    "cn_name" => "SO2",
                    "input" => array(
                        "tag_name" => "no2_so2",
                        "value" => 0
                    ),
                    "measure" => "mg/m³"
                ),
                array(
                    "cn_name" => "NOX",
                    "input" => array(
                        "tag_name" => "no2_nox",
                        "value" => 0
                    ),
                    "measure" => "mg/m³"
                )
            )
        ),
        array(
            "systemName" => "3#炉",
            "tagList" => array(
                array(
                    "cn_name" => "SO2",
                    "input" => array(
                        "tag_name" => "no3_so2",
                        "value" => 0
                    ),
                    "measure" => "mg/m³"
                ),
                array(
                    "cn_name" => "NOX",
                    "input" => array(
                        "tag_name" => "no3_nox",
                        "value" => 0
                    ),
                    "measure" => "mg/m³"
                )
            )
        )
    ),
    //日常耗材中人工录入的指标
    'consumableTag' => array(
        array(
            "en_name" => "desalted_water",
            "cn_name" => "除盐水用量",
            "measure" => "吨"
        ),
        array(
            "en_name" => "tap_water",
            "cn_name" => "自来水用量",
            "measure" => "瓶"
        ),
        array(
            "en_name" => "online_electric_energy",
            "cn_name" => "上网电量",
            "measure" => "kwh"
        ),
        array(
            "en_name" => "incineration_rubbish",
            "cn_name" => "焚烧量",
            "measure" => "吨"
        ),
        array(
            "en_name" => "diesel",
            "cn_name" => "柴油量",
            "measure" => "升"
        ),
        array(
            "en_name" => "lime",
            "cn_name" => "石灰量",
            "measure" => "吨"
        ),
        array(
            "en_name" => "no1_carbon",
            "cn_name" => "1#炉活性炭",
            "measure" => "吨"
        ),
        array(
            "en_name" => "no2_carbon",
            "cn_name" => "2#炉活性炭",
            "measure" => "吨"
        ),
        array(
            "en_name" => "no3_carbon",
            "cn_name" => "3#炉活性炭",
            "measure" => "吨"
        ),
        array(
            "en_name" => "little_soda",
            "cn_name" => "小苏打",
            "measure" => "吨"
        ),
        array(
            "en_name" => "pian_soda",
            "cn_name" => "片碱",
            "measure" => "吨"
        ),
        array(
            "en_name" => "no1_urea",
            "cn_name" => "1#炉尿素",
            "measure" => "吨"
        ),
        array(
            "en_name" => "no2_urea",
            "cn_name" => "2#炉尿素",
            "measure" => "吨"
        ),
        array(
            "en_name" => "no3_urea",
            "cn_name" => "3#炉尿素",
            "measure" => "吨"
        ),
        array(
            "en_name" => "update_acetylene_num",
            "cn_name" => "乙炔更换",
            "measure" => "瓶"
        ),
        array(
            "en_name" => "no1_so2",
            "cn_name" => "1#炉SO2",
            "measure" => "mg/m³"
        ),
        array(
            "en_name" => "no2_so2",
            "cn_name" => "2#炉SO2",
            "measure" => "mg/m³"
        ),
        array(
            "en_name" => "no3_so2",
            "cn_name" => "3#炉SO2",
            "measure" => "mg/m³"
        ),
        array(
            "en_name" => "no1_nox",
            "cn_name" => "1#炉NOX",
            "measure" => "mg/m³"
        ),
        array(
            "en_name" => "no2_nox",
            "cn_name" => "2#炉NOX",
            "measure" => "mg/m³"
        ),
        array(
            "en_name" => "no3_nox",
            "cn_name" => "3#炉NOX",
            "measure" => "mg/m³"
        )
    ),

    'tagPrefix'=> 'DESKTOP-T2UTQV2'
];
