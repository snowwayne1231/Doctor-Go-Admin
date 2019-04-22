<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Product::truncate();
        App\Models\ProductDescription::truncate();

        $col = [
            "product_id","model","sku","upc","ean",
            "jan","isbn","mpn","location","quantity",
            "stock_status_id","image","manufacturer_id","shipping","price",
            "points","tax_class_id","date_available","weight","weight_class_id",
            "length","width","height","length_class_id","subtract",
            "minimum","sort_order","status","viewed","date_added",
            "date_modified"
        ];
        $rows = [
            ["47","Classic","","","","","","","","100","6","catalog/indexphoto/p01.png","0","1","59999.0000","0","0","2015-10-06","1.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","0","56","2015-10-06 12:57:09","2018-04-23 10:14:15"],
            ["50","xeomin","","","","","","","","60000","7","catalog/pro/Consumables/xeomin.png","0","1","6850.0000","0","9","2015-10-23","2.00000000","7","0.00000000","0.00000000","0.00000000","1","1","1","0","1","110","2015-02-03 16:59:00","2018-06-14 14:07:43"],
            ["229","私密處美容儀","","","","","","","","30","6","catalog/indexphoto/p04.png","0","1","0.0000","0","0","2018-04-02","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","0","19","2018-04-02 17:44:49","2018-06-01 13:27:54"],
            ["230","肉毒桿菌膠原蛋白","","","","","","","","1000","6","catalog/pro/Consumables/sunmax.png","0","1","3000.0000","0","0","2018-04-02","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","81","2018-04-02 17:51:54","2018-06-14 14:09:44"],
            ["236","微晶瓷","","","","","","","","3000","6","catalog/pro/Consumables/radiesse.png","0","1","6500.0000","0","0","2018-04-09","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","0","18","2018-04-09 14:24:50","2018-08-03 13:53:47"],
            ["231","sculptra","","","","","","","","1000","6","catalog/pro/Consumables/sculptra.png","0","1","7500.0000","0","0","2018-04-03","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","24","2018-04-03 15:26:56","2018-06-14 14:07:18"],
            ["232","Ellanse s","","","","","","","","300","6","catalog/pro/el.png","0","1","7500.0000","0","0","2018-04-03","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","51","2018-04-03 15:28:24","2018-06-14 14:06:28"],
            ["233","dysport 500u","","","","","","","原廠出貨","5000","6","catalog/pro/Consumables/dysport 500u.png","0","1","10000.0000","0","0","2018-04-03","0.00000000","8","0.00000000","0.00000000","0.00000000","1","0","1","1","1","42","2018-04-03 15:30:04","2018-06-14 14:06:53"],
            ["234","喬亞登voluma","","","","","","","","300","6","catalog/pro/Consumables/voluma.png","0","1","5800.0000","0","0","2018-04-03","0.00000000","8","0.00000000","0.00000000","0.00000000","1","1","1","1","1","29","2018-04-03 15:33:13","2018-06-14 14:08:35"],
            ["235","水龍捲皮膚氫淨機","","","","","","","","2","6","catalog/pro/iris/h2.png","0","1","380000.0000","0","0","2018-04-09","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","98","2018-04-09 13:50:09","2018-04-23 16:49:22"],
            ["237","IRIS","","","","","","","","5","6","catalog/pro/iris/iris.png","0","1","1900000.0000","0","0","2018-04-09","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","56","2018-04-09 17:31:44","2018-06-14 10:40:12"],
            ["238","body-jet®eco 艾可微粹脂水刀抽脂系統","","","","","","","","4","6","catalog/pro/p01-00.png","0","1","1500000.0000","0","0","2018-04-18","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","35","2018-04-18 17:41:01","2018-06-14 10:39:23"],
            ["239","body-jet®evo 艾娃水刀抽脂系統","","","","","","","","4","6","catalog/pro/p02-00.png","0","1","2800000.0000","0","0","2018-04-19","65.00000000","9","54.00000000","60.00000000","178.00000000","1","1","1","1","1","81","2018-04-19 09:34:58","2018-06-14 10:39:15"],
            ["240","御方草本洗卸去角質凝膠  120ml","","","","","","","","500","6","catalog/pro/p03-00.png","0","1","1980.0000","0","0","2018-04-19","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","26","2018-04-19 10:27:52","2018-04-19 13:46:27"],
            ["241","御方草本晚安凍膜 100ml","","","","","","","","500","6","catalog/pro/p04-00.png","0","1","1980.0000","0","0","2018-04-19","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","23","2018-04-19 10:34:29","2018-04-19 13:59:40"],
            ["242","御方草本全方位面膜 / 10片裝","","","","","","","","500","6","catalog/pro/p05-00.png","0","1","1980.0000","0","0","2018-04-19","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","34","2018-04-19 10:41:11","2018-04-19 13:58:51"],
            ["243","法薇亞MC123逆齡三部曲臉部精華液","","","","","","","","1000","6","catalog/pro/MCpro/MC00.png","0","1","5980.0000","0","0","2018-04-20","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","24","2018-04-20 14:57:00","0000-00-00 00:00:00"],
            ["244","O2ONE-H810","","","","","","","","10","6","catalog/pro/iris/qua.png","0","1","2500000.0000","0","0","2018-04-20","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","61","2018-04-20 16:59:32","2018-04-23 17:04:02"],
            ["245","CKS281","","","","","","","","5000","6","catalog/pro/Youleg/04-00.png","0","1","350.0000","0","0","2018-04-24","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","10","2018-04-24 11:35:58","2018-04-24 11:46:19"],
            ["246","CKS422","","","","","","","","5000","6","catalog/pro/Youleg/05-00.png","0","1","400.0000","0","0","2018-04-24","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","9","2018-04-24 11:44:56","2018-04-24 11:45:46"],
            ["247","CTS280S (紫色)","","","","","","","","5000","6","catalog/pro/Youleg/06-00.png","0","1","400.0000","0","0","2018-04-24","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","10","2018-04-24 14:28:55","0000-00-00 00:00:00"],
            ["248","MARK-VU","","","","","","","","20","6","catalog/pro/markvu/markvu01.png","97","1","380000.0000","0","0","2018-04-27","8.30000000","9","58.00000000","41.00000000","51.00000000","1","1","1","1","1","23","2018-04-27 17:08:42","2018-06-14 10:40:20"],
            ["249","Janus-3","","","","","","","","20","6","catalog/pro/janus/janus01.png","0","1","380000.0000","0","0","2018-04-27","8.10000000","9","42.50000000","40.00000000","50.00000000","1","1","1","1","1","17","2018-04-27 17:16:42","2018-05-09 14:05:55"],
            ["250","喬亞登volbella","","","","","","","","5000","6","catalog/pro/Consumables/volbella.png","0","1","5600.0000","0","0","2018-05-04","0.00000000","8","0.00000000","0.00000000","0.00000000","1","1","1","1","1","5","2018-05-04 16:39:28","2018-06-14 14:08:20"],
            ["251","喬亞登volift","","","","","","","","5000","6","catalog/pro/Consumables/Volift.png","0","1","5600.0000","0","0","2018-05-04","0.00000000","8","0.00000000","0.00000000","0.00000000","1","1","1","1","1","3","2018-05-04 16:45:58","2018-06-14 14:08:27"],
            ["252","瑞麗舒restylane lidocaine","","","","","","","","1000","6","catalog/pro/Consumables/restylane lidocaine.png","0","1","5040.0000","0","0","2018-05-04","0.00000000","8","0.00000000","0.00000000","0.00000000","1","1","1","1","1","0","2018-05-04 16:49:18","2018-06-14 14:09:30"],
            ["253","特麗朗vital","","","","","","","","5000","6","catalog/pro/Consumables/vital.png","0","1","4320.0000","0","0","2018-05-04","0.00000000","8","0.00000000","0.00000000","0.00000000","1","1","1","1","1","4","2018-05-04 16:53:06","2018-06-14 14:09:12"],
            ["254","史麗朗Sub-Q","","","","","","","","5000","6","catalog/pro/Consumables/subq.png","0","1","9600.0000","0","0","2018-05-04","0.00000000","8","0.00000000","0.00000000","0.00000000","1","1","2","1","1","7","2018-05-04 16:57:23","2018-06-14 14:08:09"],
            ["255","utmis音波3.0","","","","","","","","500","6","catalog/pro/U3.png","0","1","100000.0000","0","0","2018-05-04","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","6","2018-05-04 17:05:21","2018-06-14 10:40:37"],
            ["256","utmis音波4.5","","","","","","","","500","6","catalog/pro/U4.png","0","1","100000.0000","0","0","2018-05-04","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","3","2018-05-04 17:10:42","2018-06-14 10:40:43"],
            ["257","海芙音波3.0","","","","","","","","100","6","catalog/pro/3.PNG","0","1","160000.0000","0","0","2018-05-04","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","4","2018-05-04 17:16:54","2018-06-14 10:41:46"],
            ["258","海芙音波4.5探頭","","","","","","","","300","6","catalog/pro/4.PNG","0","1","160000.0000","0","0","2018-05-04","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","19","2018-05-04 17:24:37","2018-06-14 10:41:53"],
            ["259","第三代水光針頭","","","","","","","","10000","6","catalog/pro/Consumables/EAORON.png","0","1","495.0000","0","0","2018-05-04","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","0","0","2018-05-04 17:28:44","2018-06-12 09:30:35"],
            ["260","杜克C系列","","","","","","","","5000","6","catalog/pro/DUCK/DC.png","0","1","20580.0000","0","0","2018-05-09","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","6","2018-05-09 15:32:28","2018-05-09 16:49:10"],
            ["261","杜克E系列","","","","","","","","1000","6","catalog/pro/DUCK/DE.png","0","1","12600.0000","0","0","2018-05-09","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","5","2018-05-09 16:21:38","2018-05-09 17:47:15"],
            ["262","杜克H-光防護抗老系列","","","","","","","","1000","6","catalog/pro/DUCK/DH.png","0","1","5400.0000","0","0","2018-05-09","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","2","2018-05-09 16:39:57","2018-05-09 16:41:33"],
            ["228","飛梭雷射儀","","","","","","","","50","6","catalog/indexphoto/p02.png","0","1","80000.0000","0","0","2018-04-02","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","0","22","2018-04-02 17:42:32","2018-06-01 13:28:11"],
            ["263","出廠年份2016","","","","","","","","1","6","catalog/second hand/SH01.png","0","1","1500000.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","4","2018-06-01 13:27:11","2018-06-01 13:28:39"],
            ["264","出廠年份2016","","","","","","","","1","6","catalog/second hand/SH02.png","0","1","6000000.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","2","2018-06-01 13:30:31","0000-00-00 00:00:00"],
            ["265","RE.O","","","","","","","","5000","6","catalog/REO/REO02.png","0","1","5000.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","5","2018-06-01 13:38:01","0000-00-00 00:00:00"],
            ["266","RE.O","","","","","","","","5000","6","catalog/REO/REO01.png","0","1","1800.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","2","2018-06-01 13:39:51","0000-00-00 00:00:00"],
            ["267","RE.O","","","","","","","","5000","6","catalog/REO/REO03.png","0","1","4900.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","1","2018-06-01 13:41:29","2018-06-12 13:12:26"],
            ["268","CPT450","","","","","","","","1000","6","catalog/pro/CPT/CPT450.png","0","1","16000.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","1","2018-06-01 15:16:31","2018-06-14 10:40:02"],
            ["269","CPT1200","","","","","","","","1000","6","catalog/pro/CPT/CPT1200.png","0","1","28000.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","5","2018-06-01 15:18:40","2018-06-14 10:39:31"],
            ["270","CPT400","","","","","","","","200","6","catalog/pro/CPT/CPT400.png","0","1","30000.0000","0","0","2018-06-01","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","8","2018-06-01 15:29:01","2018-06-14 10:39:36"],
            ["271","寇斯特”優提斯A1超音波治療儀","","","","","","","","30","6","catalog/pro/UTIMS /UTIMS.png","0","1","700000.0000","0","0","2018-10-16","8.50000000","9","366.00000000","190.00000000","412.00000000","1","1","1","1","1","16","2018-10-16 11:03:53","2018-10-18 11:43:53"],
            ["272","UTIMS","","","","","","","","1000","6","catalog/pro/UTIMS /T01.png","0","1","90000.0000","0","0","2018-10-18","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","1","2018-10-18 11:39:02","0000-00-00 00:00:00"],
            ["273","UTIMS","","","","","","","","1000","6","catalog/pro/UTIMS /T02.png","0","1","90000.0000","0","0","2018-10-18","0.00000000","9","0.00000000","0.00000000","0.00000000","1","1","1","1","1","2","2018-10-18 11:43:06","0000-00-00 00:00:00);"],
        ];

        $deses = [
            "47"  => ["皮秒雷射儀","皮秒雷射儀"],
            "228" => ["飛梭雷射儀","飛梭雷射儀"],
            "229" => ["私密處美容儀","私密處美容儀"],
            "244" => ["高壓氧","高壓氧"],
            "237" => ["IRIS Laser 奈米蜂巢","IRIS"],
            "239" => ["body-jet®evo 艾娃水刀抽脂系統","body-jet®evo 艾娃水刀抽脂系統"],
            "240" => ["御方草本洗卸去角質凝膠  Exfoliating remover gel","御方草本洗卸去角質凝膠  120ml"],
            "242" => ["御方草本全方位面膜Muti-function Mask","御方草本全方位面膜Muti-function Mask"],
            "241" => ["御方草本晚安凍膜 Detox-white night jelly","御方草本晚安凍膜 Detox-white night jelly"],
            "243" => ["法薇亞MC123逆齡三部曲臉部精華液","法薇亞MC123逆齡三部曲臉部精華液"],
            "235" => ["水龍捲皮膚氫淨機","水龍捲皮膚氫淨機"],
            "245" => [ "280Den 中統彈性襪「露趾款」", "280Den 中統彈性襪「露趾款」"],
            "246" => [ "360D束小腿", "360D束小腿"],
            "247" => ["夜寢專用長統美腿襪","夜寢專用長統美腿襪"],
            "248" => ["LED四光源皮膚專業檢測儀","LED四光源皮膚專業檢測儀"],
            "249" => ["黛爾絲3D皮膚專業檢測儀","黛爾絲3D皮膚專業檢測儀"],
            "255" => ["utmis音波3.0探頭","utmis音波3.0探頭"],
            "258" => ["海芙音波4.5探頭","海芙音波4.5探頭"],
            "259" => ["第三代水光針頭","第三代水光針頭"],
            "260" => ["杜克C-預防抗老系列","杜克C系列"],
            "261" => ["杜克E-修護抗老系列","杜克E系列"],
            "262" => ["杜克H-光防護抗老系列","杜克H-光防護抗老系列"],
            "263" => ["liposonix","liposonix"],
            "264" => ["picosure","picosure"],
            "265" => ["訊聯生技RE.O - Anikine再生修護精萃三入組","訊聯生技RE.O - Anikine再生修護精萃三入組"]
        ];


        foreach($rows as $row){
            $id = $row[0];
            $item = [
                'model' => $row[1],
                'sku' => $row[2],
                'location' => $row[8],
                'quantity' => $row[9],
                'price' => $row[14],
                'viewed' => $row[28],
                'tax_id' => 1,
            ];
            $new_id = App\Models\Product::create($item)->id;

            if (isset($deses[$id])) {
                $des = $deses[$id];
                
                $item_des = [
                    'product_id' => $new_id,
                    'language_id' => 1,
                    'name' => $des[0],
                    'meta_title' => $des[1],
                ];

                App\Models\ProductDescription::create($item_des);
            }

        }
    }
}
