<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate();
        DB::table('stocks')->insert([
            'name' => 'フィルムカメラ',
            'detail' => '1960年式のカメラです',
            'fee' => 200000,
            'last' => 1,
            'imgpath' => 'フィルムカメラ.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます',
            'fee' => 20000,
            'last' => 1,
            'imgpath' => 'イヤホン.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です',
            'fee' => 120000,
            'last' => 1,
            'imgpath' => '時計.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です',
            'fee' => 120000,
            'last' => 1,
            'imgpath' => '地球儀.jpg',
        ]);


        DB::table('stocks')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ',
            'fee' => 9800,
            'last' => 1,
            'imgpath' => '腕時計.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です',
            'fee' => 79800,
            'last' => 1,
            'imgpath' => 'レンズ.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ',
            'fee' => 800,
            'last' => 1,
            'imgpath' => 'シャンパン.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです',
            'fee' => 200,
            'last' => 1,
            'imgpath' => 'ビール.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです',
            'fee' => 1200,
            'last' => 1,
            'imgpath' => 'yakan.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '精米',
            'detail' => '米30Kgです',
            'fee' => 11200,
            'last' => 1,
            'imgpath' => 'kome.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です',
            'fee' => 11200,
            'last' => 1,
            'imgpath' => 'pasokon.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです',
            'fee' => 25600,
            'last' => 1,
            'imgpath' => 'アコギ.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです',
            'fee' => 15600,
            'last' => 1,
            'imgpath' => 'エレキギター.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '加湿器',
            'detail' => '乾燥する季節の必需品',
            'fee' => 3200,
            'last' => 1,
            'imgpath' => '加湿器.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'マウス',
            'detail' => 'ゲーミングマウスです',
            'fee' => 4200,
            'last' => 1,
            'imgpath' => 'マウス.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'Android Garxy10',
            'detail' => '中古美品です',
            'fee' => 84200,
            'last' => 1,
            'imgpath' => 'スマホ.jpg',
        ]);
    }
}
