<?php

/**
 * 人工采集数据
 */

return [
    //人工录入时指标
    'taglist' => array(
        array(
            "en_name" => "no3_electric_energy",
            "cn_name" => "3#机组发电量（度）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no3_online_electric_energy",
            "cn_name" => "3#线路上网电量（度）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no3_accept_electric_energy",
            "cn_name" => "3#线路受电量（度）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no4_electric_energy",
            "cn_name" => "4#机组发电量（度）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no4_online_electric_energy",
            "cn_name" => "4#线路上网电量（度）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no4_accept_electric_energy",
            "cn_name" => "4#线路受电量（度）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "enter_factory_rubbish",
            "cn_name" => "垃圾进厂量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no5_incineration_rubbish",
            "cn_name" => "5#锅炉垃圾入炉量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no6_incineration_rubbish",
            "cn_name" => "6#锅炉垃圾入炉量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no7_incineration_rubbish",
            "cn_name" => "7#锅炉垃圾入炉量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "produce_leachate",
            "cn_name" => "渗沥液产生量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "handle_leachate",
            "cn_name" => "渗沥液处理量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "out_transport_leachate",
            "cn_name" => "渗沥液外运量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "enter_factory_leachate",
            "cn_name" => "渗沥液入厂量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "water_consume",
            "cn_name" => "自来水消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "cold_water_supply",
            "cn_name" => "水冷补水量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "chemistry_water_consume",
            "cn_name" => "化学制水的自来水消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "desalted_water",
            "cn_name" => "除盐水消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "lime_consume",
            "cn_name" => "消石灰消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "carbon_consume",
            "cn_name" => "活性炭消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ammonium_urea_consume",
            "cn_name" => "氨水/尿素消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "cement_consume",
            "cn_name" => "水泥消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "chelating_agent_consume",
            "cn_name" => "螯合剂消耗量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "oil_consume",
            "cn_name" => "燃油消耗量（升）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "slag_out_transport",
            "cn_name" => "炉渣外运量（吨）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "solidified_fly_ash_out_transport",
            "cn_name" => "固化飞灰外运量（吨）",
            "period" => "date,month,year"
        )
    ),

    //需要计算的指标
    'kpilist' => array(
        array(
            "en_name" => "auxiliary_power_ratio",
            "cn_name" => "厂用电率（%）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "steam_rate",
            "cn_name" => "汽耗率（%）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no5_boiler_total_steam",
            "cn_name" => "5#锅炉主蒸汽总流量（t）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no6_boiler_total_steam",
            "cn_name" => "6#锅炉主蒸汽总流量（t）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no7_boiler_total_steam",
            "cn_name" => "7#锅炉主蒸汽总流量（t）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no5_boiler_average_steam",
            "cn_name" => "5#锅炉主蒸汽平均流量（t/h）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no6_boiler_average_steam",
            "cn_name" => "6#锅炉主蒸汽平均流量（t/h）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no7_boiler_average_steam",
            "cn_name" => "7#锅炉主蒸汽平均流量（t/h）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no3_turbine_total_steam",
            "cn_name" => "3#汽轮机总进气量（t）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_501COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no4_turbine_total_steam",
            "cn_name" => "4#汽轮机总进气量（t）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_401COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no3_turbine_average_steam",
            "cn_name" => "3#汽轮机平均进气量（t/h）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_501COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "no4_turbine_average_steam",
            "cn_name" => "4#汽轮机平均进气量（t/h）",
            "tag_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_401COM_Acc",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "leachate_output_rate",
            "cn_name" => "渗沥液产出率（%）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ton_rubbish_consume_water",
            "cn_name" => "自来水单耗（kg/t）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ton_rubbish_consume_supply_cold_water",
            "cn_name" => "水冷补水单耗（kg/t）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ton_rubbish_consume_chemistry_water",
            "cn_name" => "化学制水单耗（kg/t）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ton_rubbish_consume_desalted_water",
            "cn_name" => "除盐水单耗（kg/t）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ton_rubbish_consume_lime",
            "cn_name" => "消石灰单耗（kg/t）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ton_rubbish_consume_carbon",
            "cn_name" => "活性炭单耗（kg/t）",
            "period" => "date,month,year"
        ),
        array(
            "en_name" => "ton_rubbish_consume_ammonium_urea",
            "cn_name" => "氨水/尿素单耗（kg/t）",
            "period" => "date,month,year"
        )
    ),

    //汽机总流量
    'turbineAcc' => array(
        array(
            "en_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_501COM_Acc",
            "cn_name" => "3#汽机",
            "measure" => "t/h"
        ),
        array(
            "en_name" => "DESKTOP-T2UTQV2.Applications.TurbineParts.FRQ_401COM_Acc",
            "cn_name" => "4#汽机",
            "measure" => "t/h"
        )
    ),

    //锅炉总流量
    'boilerAcc' => array(
        array(
            "en_name" => "DESKTOP-T2UTQV2.Applications.BurningLine1.FRQ_04COM_Acc",
            "cn_name" => "5#锅炉",
            "measure" => "t/h"
        ),
        array(
            "en_name" => "DESKTOP-T2UTQV2.Applications.BurningLine2.FRQ_04COM_Acc",
            "cn_name" => "6#锅炉",
            "measure" => "t/h"
        ),
        array(
            "en_name" => "DESKTOP-T2UTQV2.Applications.BurningLine3.FRQ_04COM_Acc",
            "cn_name" => "7#锅炉",
            "measure" => "t/h"
        )
    ),

    //经济指标参考变量，是taglist的一部分
    'economicIndicator' => array(
        array(
            "en_name" => "no3_electric_energy",
            "cn_name" => "3#机组发电量",
            "measure" => ""
        ),
        array(
            "en_name" => "no3_online_electric_energy",
            "cn_name" => "3#线路上网电量",
            "measure" => ""
        ),
        array(
            "en_name" => "no4_electric_energy",
            "cn_name" => "4#机组发电量",
            "measure" => ""
        ),
        array(
            "en_name" => "no4_online_electric_energy",
            "cn_name" => "4#线路上网电量",
            "measure" => ""
        ),
        array(
            "en_name" => "produce_leachate",
            "cn_name" => "渗沥液产生量",
            "measure" => ""
        ),
        array(
            "en_name" => "enter_factory_rubbish",
            "cn_name" => "垃圾进厂量",
            "measure" => ""
        ),
        array(
            "en_name" => "no5_incineration_rubbish",
            "cn_name" => "5#炉垃圾焚烧量",
            "measure" => ""
        ),
        array(
            "en_name" => "no6_incineration_rubbish",
            "cn_name" => "6#炉垃圾焚烧量",
            "measure" => ""
        ),
        array(
            "en_name" => "no7_incineration_rubbish",
            "cn_name" => "7#炉垃圾焚烧量",
            "measure" => ""
        ),
        array(
            "en_name" => "water_consume",
            "cn_name" => "自来水消耗量",
            "measure" => ""
        ),
        array(
            "en_name" => "cold_water_supply",
            "cn_name" => "水冷补水量",
            "measure" => ""
        ),
        array(
            "en_name" => "chemistry_water_consume",
            "cn_name" => "化学制水消耗量",
            "measure" => ""
        ),
        array(
            "en_name" => "desalted_water",
            "cn_name" => "除盐水量消耗量",
            "measure" => ""
        ),
        array(
            "en_name" => "lime_consume",
            "cn_name" => "消石灰消耗量",
            "measure" => ""
        ),
        array(
            "en_name" => "carbon_consume",
            "cn_name" => "活性炭消耗量",
            "measure" => ""
        ),
        array(
            "en_name" => "ammonium_urea_consume",
            "cn_name" => "氨水/尿素消耗量"
        )
    ),

    'homeGraghTag' => array(
        'enter_factory_rubbish',
        'no5_incineration_rubbish',
        'no6_incineration_rubbish',
        'no7_incineration_rubbish',
        'no3_electric_energy',
        'no4_electric_energy',
        'no3_online_electric_energy',
        'no4_online_electric_energy',
        'produce_leachate',
        'handle_leachate'
    )
];