<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Soler Palau TD-160/100 N Silent',
            'description' => 'Вентиляторы серии TD разработаны специально для работы с каналами большой протяженности и в условиях повышенных требований к уровню шума в помещении. Имеют достоинства центробежных вентиляторов (большое давление на выходе) и преимущества осевых вентиляторов (большой расход воздуха, малые уровень шума и габаритные размеры). Вентиляторы серии TD предназначены для монтажа в вентиляционных каналах. Вместе с вентилятором поставляются крепежные элементы. Возможен как вертикальный, так и горизонтальный монтаж.',
                'price' => 9580.0,
                'quantity' => 338,
                'category_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Soler Palau TD-350/125 Silent',
                'description' => 'Вентиляторы серии TD-SILENT с диагональными лопатками, изготавливаются из прочного пластика. Внутренний перфорированный корпус специальной конструкции и слой шумопоглощающего материала, значительно снижают уровень шума от вентилятора. Вентиляторы комплектуются монтажными кронштейнами с быстроразъемными хомутами, это позволяет извлекать корпус вентилятора для обслуживания, без демонтажа воздуховодов.',
                'price' => 17830.0,
                'quantity' => 188,
                'category_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'DunLi EC102-B310-033 137-006-B-004 A-0',
                'description' => 'Серия надежных, энергоэффективных центробежных ЕС-вентиляторов от высокотехнологичного китайского производителя Dunli. Предназначен для различного климатического оборудования. Вентиляторы Dunli отвечают самым современным требованиям в сфере создания энергосберегающей системы вентиляции: обеспечивают экономию энергии до 35 % в сравнении с АС-двигателями.',
                'price' => 16820.0,
                'quantity' => 132,
                'category_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Soler Palau VMC-MINIFAN HI SIP',
            'description' => 'Вытяжные вентиляторы серии MINIFAN разработаны для обслуживания сразу нескольких помещений. Вентиляторы имеют 4 всасывающих патрубка и один вытяжной (для выброса воздуха на улицу), все диаметром 125мм. Могут устанавливаться за подвесным потолком, в стенных шкафах, на чердаках и других подсобных помещениях.',
                'price' => 68800.0,
                'quantity' => 35,
                'category_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Soler Palau TH 800',
                'description' => 'Крышные вентиляторы серии TH с диагональными лопатками предназначены для работы в вытяжных системах вентиляции, но, при необходимости, могут быть переоборудованы для работы на приток.',
                'price' => 34980.0,
                'quantity' => 79,
                'category_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Soler Palau TD 250/100',
            'description' => 'Вентиляторы серии TD разработаны специально для работы с каналами большой протяженности и в условиях повышенных требований к уровню шума в помещении. Имеют достоинства центробежных вентиляторов (большое давление на выходе) и преимущества осевых вентиляторов (большой расход воздуха, малые уровень шума и габаритные размеры). Вентиляторы серии TD предназначены для монтажа в вентиляционных каналах. Вместе с вентилятором поставляются крепежные элементы. Возможен как вертикальный, так и горизонтальный монтаж.',
                'price' => 11200.0,
                'quantity' => 115,
                'category_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'ВР 280-46 №3,15 1,5 KW',
            'description' => 'Макс. расход воздуха (м3/ч): 3400 Присоединительный диаметр (мм): 315 Страна производитель: Россия Класс защиты IP: IP54 Потребляемая мощность (Вт): 1500 Макс. рабочая температура (°С): 80',
                'price' => 84400.0,
                'quantity' => 24,
                'category_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Soler Palau OZEO H ST 2',
            'description' => 'Мультизональный вентилятор OZEO H ST 2 предназначен для использования в частных или коммерческих зданиях с несколькими изолированными помещениями. Вытяжка воздуха организуется из помещений кухни, санузлов, ванных комнат и т.д., а свежий воздух подается в помещения гостиных, спален, кабинетов, через приточные оконные или настенные клапаны (в комплект не входят). Вентилятор комплектуется однофазным односкоростным электродвигателем и предназначен для постоянной работы.',
                'price' => 20261.0,
                'quantity' => 95,
                'category_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Ровен ВЦ-14-46-5,0-О-РВ-4,0/1000/220-380 Л0',
            'description' => 'Вентилятор среднего давления. Лопатки, загнутые вперед. Корпус вентилятора из оцинкованной стали. Рама вентилятора из оцинкованной стали (№ 2,0-4,0) или из углеродистой стали окрашенной (№ 5,0-8,0). Трехфазный асинхронный двигатель (380 В). Конструктивная схема 1 по ГОСТ 5976-90. Класс защиты двигателя IP54.',
                'price' => 92315.0,
                'quantity' => 13,
                'category_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Soler Palau OZEO E ECOWATT 2 RF',
            'description' => 'Материал: Пластик. Макс. расход воздуха (м3/ч): 380/260/150. Страна производитель: Испания. Цвет: Белый. Макс. рабочая температура (°С): 45. Двигатель постоянного тока: Да.',
                'price' => 39991.0,
                'quantity' => 63,
                'category_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'DunLi EC72-B225-004 092-007-B-001',
                'description' => 'Серия надежных, энергоэффективных центробежных ЕС-вентиляторов от высокотехнологичного китайского производителя Dunli. Предназначен для различного климатического оборудования. Вентиляторы Dunli отвечают самым современным требованиям в сфере создания энергосберегающей системы вентиляции: обеспечивают экономию энергии до 35 % в сравнении с АС-двигателями.',
                'price' => 47560.0,
                'quantity' => 105,
                'category_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Soler & Palau TD EVO-200',
                'description' => 'TD-EVO - это новая серия низкопрофильных круглых канальных вентиляторов с диагональными лопатками. Модельный ряд состоит из нескольких типоразмеров с максимальным расходом воздуха от 210 до 1840 м3/ч. Оптимизированная конструкция крыльчатки, направляющего аппарата и обтекателя на выходе воздуха позволяют увеличить производительность и снизить уровень шума вентилятора.',
                'price' => 23860.0,
                'quantity' => 138,
                'category_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Soler Palau CTB/4-1300/315 ECOWATT',
                'description' => 'Круглые канальные вентиляторы TDECOWATT комплектуются высокоэффективными электрокоммутируемыми двигателями и крыльчатками с диагональными лопатками. Корпуса и крыльчатки вентиляторов от 160 до 800 модели изготавливаются из высококачественного пластика, у моделей 1300 и 2000 корпуса - из стали, крыльчатки - из алюминия. Конструкция корпуса вентилятора позволяет извлекать блок двигатель крыльчатка без демонтажа воздуховодов.',
                'price' => 101446.0,
                'quantity' => 0,
                'category_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Soler Palau CTHT/4-250',
            'description' => 'Серия крышных центробежных вентиляторов с горизонтальным выбросом воздуха CTHB / CTHT разработана специально для систем дымоудаления(1). Также, все вентиляторы могут работать в продолжительном режиме при температуре перемещаемого воздуха до 120°C*, а модели 140, 180, 200 и 225 до 200°С*. Основание вентиляторов изготовлено из оцинкованной стали, крышка - из алюминия. Все вентиляторы оснащены защитной решеткой на нагнетательной стороне.',
                'price' => 113594.0,
                'quantity' => 11,
                'category_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Soler Palau TPSB/2-250/084',
                'description' => 'Низкопрофильные крышные вентиляторы с горизонтальным выбросом воздуха серии TPSB предназначены для организации вытяжной вентиляции из различных бытовых и общественных помещений. Высокоэффективные центробежные рабочие колеса с загнутыми назад лопатками, основание электродвигателя и крышка вентилятора изготавливаются из высокопрочного литого пластика. Основание выполнено из листовой стали, защищено от коррозии катафоретическим покрытием и черной полиэфирной краской.',
                'price' => 40158.0,
                'quantity' => 80,
                'category_id' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Soler Palau OZEO-E ECOWATT RF',
                'description' => 'Мультизональные вентиляторы серии OZEO-E предназначены для использования в частных или коммерческих зданиях с несколькими изолированными помещениями. Вытяжка воздуха организуется из помещений кухни, санузлов, ванных комнат и т.д., а свежий воздух подается в помещения гостиных, спален, кабинетов, через приточные оконные или настенные клапаны. Вентилятор состоит из пластикового корпуса с четырьмя всасывающими патрубками и одним нагнетательным, все патрубки имеют диаметр 125 мм.',
                'price' => 32671.0,
                'quantity' => 91,
                'category_id' => 4,
            ),
        ));
        
        
    }
}