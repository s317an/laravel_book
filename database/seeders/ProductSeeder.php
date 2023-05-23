<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'        => '確かな力が身につくPHP「超」入門 第2版',
            'images'       => '/images/1.jpg',
            'price'       => '2860',
            'description' => 'PHPの基礎から、コマースサイトの作成に必要な知識まで、しっかりと解説します。',
        ],  [
            'name'        => '図解即戦力 仮想化&コンテナがこれ1冊でしっかりわかる教科書',
            'images'       => '/images/2.jpg',
            'price'       => '2398',
            'description' => '関連する用語を一通り知ることのできる、1冊目の入門書としてふさわしい内容です。',
        ],  [
            'name'        => 'イラスト図解式 この一冊で全部わかるWeb技術の基本',
            'images'       => '/images/3.jpg',
            'price'       => '1848',
            'description' => 'これからWebにかかわる人が知っておきたい知識をこの一冊で丸ごと解説!',
        ],  [
            'name'        => '新しいLinuxの教科書',
            'images'       => '/images/4.jpg',
            'price'       => '2822',
            'description' => 'MS-DOSを知らない世代のエンジニアに向けたLinux入門書の決定版。',
        ],  [
            'name'        => 'SQL 第2版 ゼロからはじめるデータベース操作',
            'images'       => '/images/5.jpg',
            'price'       => '1861',
            'description' => '大好評のSQL定番入門書が改訂! SQLの書き方からアプリでの利用までしっかり学ぼう!',
        ],  [
            'name'        => '体系的に学ぶ 安全なWebアプリケーションの作り方',
            'images'       => '/images/6.jpg',
            'price'       => '3520',
            'description' => 'PHPサンプルへの攻撃を通して脆弱性が生まれる原理と具体的な対処方法が学べる!',
        ],  [
            'name'        => '情熱プログラマー ソフトウェア開発者の幸せな生き方',
            'images'       => '/images/7.jpg',
            'price'       => '2640',
            'description' => '等身大のプログラマの一人がキャリア開発の重要性を説き、そのための心構えなどを示したもの。',
        ],  [
            'name'        => '小さなチーム、大きな仕事',
            'images'       => '/images/8.jpg',
            'price'       => '704',
            'description' => '会社を成功させるのに、事業拡大も、派手な広告も、会議も、徹夜も、長期計画も、オフィスも必要ない。',
        ],  [
            'name'        => 'SCRUM BOOT CAMP THE BOOK',
            'images'       => '/images/9.jpg',
            'price'       => '2640',
            'description' => '世界中で注目されている「スクラム」。実際の開発現場にどう適用すればよいのかをとにかくわかりやすく解説しています。',
        ]
    ]);
    }
}
