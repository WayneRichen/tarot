<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarots')->insert([
            [
                'name' => '愚者',
                'english' => 'the fool',
                'file_name' => '01-the-fool-tarot-card.webp',
                'reversed_file_name' => '01-the-fool-reversed.jpeg'
            ],
            [
                'name' => '魔術師',
                'english' => 'the magician',
                'file_name' => '02-the-magician-tarot-card.webp',
                'reversed_file_name' => '02-the-magician-reversed.jpeg'
            ],
            [
                'name' => '女教皇',
                'english' => 'the high priestess',
                'file_name' => '03-the-high-priestess-tarot-card.webp',
                'reversed_file_name' => '03-the-high-priestess-reversed.webp'
            ],
            [
                'name' => '女皇',
                'english' => 'the mepress',
                'file_name' => '04-the-empress-tarot-card.webp',
                'reversed_file_name' => '04-the-empress-reversed.jpeg'
            ],
            [
                'name' => '皇帝',
                'english' => 'the emperor',
                'file_name' => '05-the-emperor-tarot-card.webp',
                'reversed_file_name' => '05-the-emperor-reversed.jpeg'
            ],
            [
                'name' => '教皇',
                'english' => 'the hierophant',
                'file_name' => '06-the-hierophant-tarot.webp',
                'reversed_file_name' => '06-the-hierophant-reversed.jpeg'
            ],
            [
                'name' => '戀人',
                'english' => 'the lovers',
                'file_name' => '07-the-lovers-tarot-card.webp',
                'reversed_file_name' => '07-the-lovers-reversed.jpeg'
            ],
            [
                'name' => '戰車',
                'english' => 'the chariot',
                'file_name' => '08-the-chariot-tarot-card.webp',
                'reversed_file_name' => '08-the-chariot-reversed.jpeg'
            ],
            [
                'name' => '力量',
                'english' => 'strength',
                'file_name' => '09-strength-tarot-card.webp',
                'reversed_file_name' => '09-strength-tarot-reversed.jpeg'
            ],
            [
                'name' => '隱士',
                'english' => 'the hermit',
                'file_name' => '10-the-hermit-tarot-card-meaning-rider-waite.webp',
                'reversed_file_name' => '10-hermit-tarot-card-meanings-reversed-position.jpeg'
            ],
            [
                'name' => '命運之輪',
                'english' => 'the wheel of fortune',
                'file_name' => '11-wheel-of-fortune-tarot-card.webp',
                'reversed_file_name' => '11-reversed-wheel-of-fortune-tarot-card.jpeg'
            ],
            [
                'name' => '正義',
                'english' => 'justice',
                'file_name' => '12-justice-tarot-card-meaning.webp',
                'reversed_file_name' => '12-justice-tarot-card-reversed-meaning.webp'
            ],
            [
                'name' => '吊人',
                'english' => 'the hanged man',
                'file_name' => '13-the-hanged-man-tarot-card-1.webp',
                'reversed_file_name' => '13-the-hanged-man-tarot-card-reversed.webp'
            ],
            [
                'name' => '死神',
                'english' => 'death',
                'file_name' => '14-death-tarot-card-image.webp',
                'reversed_file_name' => '14-death-tarot-card-reversed.webp'
            ],
            [
                'name' => '節制',
                'english' => 'the mperance',
                'file_name' => '15-temperance-card-in-tarot.webp',
                'reversed_file_name' => '15-temperance-card-reversed-tarot.webp'
            ],
            [
                'name' => '惡魔',
                'english' => 'the devil',
                'file_name' => '16-the-devil-card-upright.webp',
                'reversed_file_name' => '16-the-devil-card-reversed.jpeg'
            ],
            [
                'name' => '高塔',
                'english' => 'the tower',
                'file_name' => '17-the-tower-tarot-card-meaning.webp',
                'reversed_file_name' => '17-the-tower-tarot-card-reversed-meaning.jpeg'
            ],
            [
                'name' => '星星',
                'english' => 'the star',
                'file_name' => '18-the-star-card-in-tarot.webp',
                'reversed_file_name' => '18-the-star-card-in-reversed-position.jpeg'
            ],
            [
                'name' => '月亮',
                'english' => 'the moon',
                'file_name' => '19-the-moon-tarot-card-original.webp',
                'reversed_file_name' => '19-the-moon-tarot-card-reversed.jpeg'
            ],
            [
                'name' => '太陽',
                'english' => 'the sun',
                'file_name' => '20-the-sun-card-tarot-reading.webp',
                'reversed_file_name' => '20-the-sun-reversed.jpeg'
            ],
            [
                'name' => '審判',
                'english' => 'the judgement',
                'file_name' => '21-judgement-tarot-card-design.webp',
                'reversed_file_name' => '21-judgement-reversed-tarot-card-meaning.webp'
            ],
            [
                'name' => '世界',
                'english' => 'the world',
                'file_name' => '22-the-world-tarot-card.webp',
                'reversed_file_name' => '22-the-world-tarot-card-reversed-meaning.jpeg'
            ],
            [
                'name' => '聖杯1',
                'english' => '1 of Cup',
                'file_name' => '23-ace-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '23-ace-of-cups-reversed.jpeg'
            ],
            [
                'name' => '聖杯2',
                'english' => '2 of Cup',
                'file_name' => '24-two-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '24-two-of-cups-reversed.jpeg'
            ],
            [
                'name' => '聖杯3',
                'english' => '3 of Cup',
                'file_name' => '25-three-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '25-three-of-cups-reversed.jpeg'
            ],
            [
                'name' => '聖杯4',
                'english' => '4 of Cup',
                'file_name' => '26-four-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '26-four-of-cups-reversed.jpeg'
            ],
            [
                'name' => '聖杯5',
                'english' => '5 of Cup',
                'file_name' => '27-five-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '27-five-of-cups-reversed.jpeg'
            ],
            [
                'name' => '聖杯6',
                'english' => '6 of Cup',
                'file_name' => '28-six-of-cups-tarot-card.webp',
                'reversed_file_name' => '28-six-of-cups-reversed.webp'
            ],
            [
                'name' => '聖杯7',
                'english' => '7 of Cup',
                'file_name' => '29-seven-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '29-seven-of-cups-reversed.jpeg'
            ],
            [
                'name' => '聖杯8',
                'english' => '8 of Cup',
                'file_name' => '30-eight-of-cups-tarot-card.webp',
                'reversed_file_name' => '30-eight-of-cups-reversed.webp'
            ],
            [
                'name' => '聖杯9',
                'english' => '9 of Cup',
                'file_name' => '31-nine-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '31-nine-of-cups-reversed-1.jpeg'
            ],
            [
                'name' => '聖杯10',
                'english' => '10 of Cup',
                'file_name' => '32-ten-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '32-ten-of-cups-reversed-1.jpeg'
            ],
            [
                'name' => '聖杯侍者',
                'english' => 'Page of Cup',
                'file_name' => '33-page-of-cups-tarot-card.webp',
                'reversed_file_name' => '33-page-of-cups-reversed-1.webp'
            ],
            [
                'name' => '聖杯騎士',
                'english' => 'Knight of Cup',
                'file_name' => '34-knight-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '34-knight-of-cups-reversed-1.jpeg'
            ],
            [
                'name' => '聖杯皇后',
                'english' => 'Queen of Cup',
                'file_name' => '35-queen-of-cups-tarot-card.jpeg',
                'reversed_file_name' => '35-queen-of-cups-reversed-1.jpeg'
            ],
            [
                'name' => '聖杯國王',
                'english' => 'King of Cup',
                'file_name' => '36-king-of-cups-tarot-card.webp',
                'reversed_file_name' => '36-king-of-cups-reversed-1.webp'
            ],
            [
                'name' => '錢幣1',
                'english' => '1 of Pentacle',
                'file_name' => '37-ace-of-pentacles-tarot-card.webp',
                'reversed_file_name' => '37-ace-of-pentacles-reversed.webp'
            ],
            [
                'name' => '錢幣2',
                'english' => '2 of Pentacle',
                'file_name' => '38-two-of-pentacles-tarot-card.jpeg',
                'reversed_file_name' => '38-two-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣3',
                'english' => '3 of Pentacle',
                'file_name' => '39-three-of-pentacles-tarot.jpeg',
                'reversed_file_name' => '39-three-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣4',
                'english' => '4 of Pentacle',
                'file_name' => '40-four-of-pentacles-tarot-card.webp',
                'reversed_file_name' => '40-four-of-pentacles-reversed.webp'
            ],
            [
                'name' => '錢幣5',
                'english' => '5 of Pentacle',
                'file_name' => '41-five-of-pentacles-tarot-card.jpeg',
                'reversed_file_name' => '41-five-of-pentacles-reversed-1-622x1024.jpeg'
            ],
            [
                'name' => '錢幣6',
                'english' => '6 of Pentacle',
                'file_name' => '42-six-of-pentacles-tarot-card.jpeg',
                'reversed_file_name' => '42-six-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣7',
                'english' => '7 of Pentacle',
                'file_name' => '43-seven-of-pentacles-tarot-card-1.jpeg',
                'reversed_file_name' => '43-seven-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣8',
                'english' => '8 of Pentacle',
                'file_name' => '44-eight-of-pentacles-tarot-card.jpeg',
                'reversed_file_name' => '44-eight-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣9',
                'english' => '9 of Pentacle',
                'file_name' => '45-nine-of-pentacles-tarot.jpeg',
                'reversed_file_name' => '45-nine-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣10',
                'english' => '10 of Pentacle',
                'file_name' => '46-ten-of-pentacles-tarot-card.jpeg',
                'reversed_file_name' => '46-ten-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣侍者',
                'english' => 'Page of Pentacle',
                'file_name' => '47-page-of-pentacles-tarot-card-622x1024.jpeg',
                'reversed_file_name' => '47-page-of-pentacles-reversed-622x1024.jpeg'
            ],
            [
                'name' => '錢幣騎士',
                'english' => 'Knight of Pentacle',
                'file_name' => '48-knight-of-pentacles-tarot-card-622x1024.jpeg',
                'reversed_file_name' => '48-knight-of-pentacles-reversed-622x1024.jpeg'
            ],
            [
                'name' => '錢幣皇后',
                'english' => 'Queen of Pentacle',
                'file_name' => '49-queen-of-pentacles-tarot-card-1.jpeg',
                'reversed_file_name' => '49-queen-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '錢幣國王',
                'english' => 'King of Pentacle',
                'file_name' => '50-king-of-pentacles-tarot-card.jpeg',
                'reversed_file_name' => '50-king-of-pentacles-reversed.jpeg'
            ],
            [
                'name' => '寶劍1',
                'english' => '1 of Sword',
                'file_name' => '51-ace-of-swords-tarot-card.jpeg',
                'reversed_file_name' => '51-ace-of-swords-reversed.jpeg'
            ],
            [
                'name' => '寶劍2',
                'english' => '2 of Sword',
                'file_name' => '52-two-of-swords-tarot-card.webp',
                'reversed_file_name' => '52-two-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍3',
                'english' => '3 of Sword',
                'file_name' => '53-three-of-swords-tarot-card.jpeg',
                'reversed_file_name' => '53-three-of-swords-reversed.jpeg'
            ],
            [
                'name' => '寶劍4',
                'english' => '4 of Sword',
                'file_name' => '54-four-of-swords-tarot-card.webp',
                'reversed_file_name' => '54-four-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍5',
                'english' => '5 of Sword',
                'file_name' => '55-five-of-swords-tarot-card.webp',
                'reversed_file_name' => '55-five-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍6',
                'english' => '6 of Sword',
                'file_name' => '56-six-of-swords-tarot-card-1.webp',
                'reversed_file_name' => '56-six-of-swords-reversed-1.webp'
            ],
            [
                'name' => '寶劍7',
                'english' => '7 of Sword',
                'file_name' => '57-seven-of-swords-tarot-card.webp',
                'reversed_file_name' => '57-seven-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍8',
                'english' => '8 of Sword',
                'file_name' => '58-eight-of-swords-tarot.jpeg',
                'reversed_file_name' => '58-eight-of-swords-reversed.jpeg'
            ],
            [
                'name' => '寶劍9',
                'english' => '9 of Sword',
                'file_name' => '59-nine-of-swords-tarot-card-622x1024.webp',
                'reversed_file_name' => '59-nine-of-swords-reversed-1-622x1024.webp'
            ],
            [
                'name' => '寶劍10',
                'english' => '10 of Sword',
                'file_name' => '60-ten-of-swords-meaning.webp',
                'reversed_file_name' => '60-ten-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍侍者',
                'english' => 'Page of Sword',
                'file_name' => '61-page-of-swords.webp',
                'reversed_file_name' => '61-page-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍騎士',
                'english' => 'Knight of Sword',
                'file_name' => '62-knight-of-swords-tarot.webp',
                'reversed_file_name' => '62-knight-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍皇后',
                'english' => 'Queen of Sword',
                'file_name' => '63-queen-of-swords-tarot.webp',
                'reversed_file_name' => '63-queen-of-swords-reversed.webp'
            ],
            [
                'name' => '寶劍國王',
                'english' => 'King of Sword',
                'file_name' => '64-king-of-swords-meaning.jpeg',
                'reversed_file_name' => '64-king-of-swords-reversed.jpeg'
            ],
            [
                'name' => '權杖1',
                'english' => '1 of Wand',
                'file_name' => '65-ace-of-wands-tarot-card.webp',
                'reversed_file_name' => '65-ace-of-wands-reversed.webp'
            ],
            [
                'name' => '權杖2',
                'english' => '2 of Wand',
                'file_name' => '66-two-of-wands-tarot-card.jpeg',
                'reversed_file_name' => '66-two-of-wands-reversed.jpeg'
            ],
            [
                'name' => '權杖3',
                'english' => '3 of Wand',
                'file_name' => '67-three-of-wands-tarot-card.webp',
                'reversed_file_name' => '67-three-of-wands-reversed.webp'
            ],
            [
                'name' => '權杖4',
                'english' => '4 of Wand',
                'file_name' => '68-four-of-wands-tarot-card.jpeg',
                'reversed_file_name' => '68-four-of-wands-reversed.jpeg'
            ],
            [
                'name' => '權杖5',
                'english' => '5 of Wand',
                'file_name' => '69-five-of-wands-tarot-card.webp',
                'reversed_file_name' => '69-five-of-wands-reversed.webp'
            ],
            [
                'name' => '權杖6',
                'english' => '6 of Wand',
                'file_name' => '70-six-of-wands-tarot-card.jpeg',
                'reversed_file_name' => '70-six-of-wands-reversed.jpeg'
            ],
            [
                'name' => '權杖7',
                'english' => '7 of Wand',
                'file_name' => '71-seven-of-wands-tarot-card.jpeg',
                'reversed_file_name' => '71-seven-of-wands-reversed.jpeg'
            ],
            [
                'name' => '權杖8',
                'english' => '8 of Wand',
                'file_name' => '72-eight-of-wands-tarot-card.jpeg',
                'reversed_file_name' => '72-eight-of-wands-reversed.jpeg'
            ],
            [
                'name' => '權杖9',
                'english' => '9 of Wand',
                'file_name' => '73-nine-of-wands-tarot-card.webp',
                'reversed_file_name' => '73-nine-of-wands-reversed.webp'
            ],
            [
                'name' => '權杖10',
                'english' => '10 of Wand',
                'file_name' => '74-ten-of-wands-tarot-card.jpeg',
                'reversed_file_name' => '74-ten-of-wands-reversed.jpeg'
            ],
            [
                'name' => '權杖侍者',
                'english' => 'Page of Wand',
                'file_name' => '75-page-of-wands-tarot-card.webp',
                'reversed_file_name' => '75-page-of-wands-reversed-2-622x1024.webp'
            ],
            [
                'name' => '權杖騎士',
                'english' => 'Knight of Wand',
                'file_name' => '76-knight-of-wands-tarot-card.webp',
                'reversed_file_name' => '76-knight-of-wands-reversed-1-622x1024.webp'
            ],
            [
                'name' => '權杖皇后',
                'english' => 'Queen of Wand',
                'file_name' => '77-queen-of-wands-tarot-card-2.jpeg',
                'reversed_file_name' => '77-queen-of-wands-reversed-1.jpeg'
            ],
            [
                'name' => '權杖國王',
                'english' => 'King of Wand',
                'file_name' => '78-king-of-wands-tarot-card.webp',
                'reversed_file_name' => '78-king-of-wands-reversed.webp'
            ],
        ]);
    }
}
