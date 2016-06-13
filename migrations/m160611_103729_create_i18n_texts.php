<?php

use yii\db\Migration;

/**
 * Handles the creation for table `i18n_texts`.
 */
class m160611_103729_create_i18n_texts extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('i18n_texts', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'scope' => $this->string(100),
            'en-US' => $this->text(),
            'ru-RU' => $this->text(),
            'es-ES' => $this->text(),
        ]);

        $this->createIndex(
            'idx-i18n_texts-name',
            'i18n_texts',
            'name'
        );

        $this->insert('i18n_texts', [
            'name' => 'main/intro',
            'scope' => 'main',
            'ru-RU' => '# Благотворительный проект

В проекте Health&Help почти <b>сотня</b> людей объединилась для того, чтобы дать гватемальским индейцам
Майя доступ к базовой медицинской помощи. Работаем, чтобы помогать людям, а для покупки лекарств,
расходных материалов и оборудования нам нужна ваша помощь. Даже сто рублей могут помочь вылечить
человека'
        ]);


        $this->insert('i18n_texts', [
            'name' => 'help/pharmacy/part1',
            'scope' => 'help',
            'ru-RU' =>

'# Готовые наборы

Включают в себя самое необходимое на текущий момент

Пожертвование пойдет на закупку и отправку препаратов'

        ]);


        $this->insert('i18n_texts', [
            'name' => 'help/pharmacy/part2',
            'scope' => 'help',
            'ru-RU' =>

'## Если хотите самостоятельно купить препараты и отправить в Гватемалу

Есть несколько вариантов отправлений

1. [Готовые наборы с AliExpress](#);</li>
1. [Почтой РФ](#);</li>
1. [Почтой СНГ](#);</li>
1. [Курьерские службы](#).</li>

## Полный список необходимых медикаментв

####  Перевязка и расходные материалы

| Бинт стерильный 16 м х 1000 мм (2 уп.) | 30 ₽ |
| Бинт стерильный 14 м х 700 мм (3 уп.) | 21 ₽ |
| Бинт стерильный 10 м х 700 мм (3 уп.) | 4 ₽ |
| Салфетки стерильные 14 x 16 см в упаковках по 20 штук (5 уп.) | 24 ₽ |
| Трубчатые эластичные сетчато-трубчатые бинты № 1 (5 уп.) | 15 ₽ |
| Трубчатые эластичные сетчато-трубчатые бинты № 2 (5 уп.) | 12 ₽ |
| Клей БФ-6 10,0 (Лифузоль, Фуропласт, Пластубол) (5 уп.) | 50 ₽ |
| Лейкопластырь на тканевой основе рулонный, 3 м х 500 мм (5 уп.) | 69 ₽ |
| Салфетки кровоостанавливающие в упаковках по 7 штук (3 уп.) | 90 ₽ |
| Перчатки хирургические стерильные (10 уп.) | 14 ₽ |
| Перчатки хирургические нестерильные (10 уп.) | 8 ₽ |

#### Медицинский препараты
| Анальгин в таблетках (20 уп.) | 40 ₽ |
| Анальгин в ампулах (5 уп.) | 100 ₽ |
| Нимика (Нимесулид, Найз, 10 уп.) | 63 ₽ |
| Кетанов (Кеторолак, Кетокам) 10 мг №20, (3 уп.) | 56 ₽ |
| Парацетамол (100 уп.) | 40 ₽ |
| Аспирин (ацетилсалициловая кислота) №20 (10 уп.) | 200 ₽ |
| Но-шпа или дротаверин в таб. №24 (1 уп.) | 177 ₽ |
| Но-шпа в амп. №5 (1 уп.) | 97 ₽ |
| Фуразолидон №20 (5 уп.) | 120 ₽ |
| Амоксициллин 0,5-№16 (10 уп.) | 60 ₽ |
| Азитромицин0,25 №6 (10 уп.) | 80 ₽ |
| Тетрациклин таб0,1 №20 (5 уп.) | 60 ₽ |
| Линкомицин в амп. №10 (5 уп.) | 53 ₽ |
| Лоратадин  в таб. 10мг №30 – (5 уп.) | 51 ₽ |
| Тавегил в амп. №5 – (1 уп.) | 201 ₽ |
| Хлоропирамин (супрастин) в таб. №20 (2 уп.) | 110 ₽ |
| Хлоропирамин (супрастин) в амп. №5 (2 уп.) | 128 ₽ |
| Дексаметазон 4 мг/мл №25 (1 уп.) | 177 ₽ |
| Драмина (от укачивания, 2 уп.) | 152 ₽ |
| Крем «Бепантен», «Пантенол» 50,0 (5 уп.) | 101 ₽ |
| Левомеколь мазь 40,0 (5 уп.) | 120 ₽ |
| Вермокс 0,1 № 6 таб. (5 уп.) | 100 ₽ |
| Пирантел 0,25 №3 (5 уп.) | 24 ₽ |
| Немазол  (5 уп.) | 145 ₽ |
| Метронидазол (5 уп.) | 20 ₽ |
| Лидокаин в амп. 2%, 2 мл, №10 (1 уп.) | 30 ₽ |
| Новокаин в амп. 2%, 2 мл, №10 (2 уп.) | 30 ₽ |
| Ацикловир в таб. №20 (5 уп.) | 50 ₽ |
| Папаверин в амп. №10 (2 уп.) | 80 ₽ |
| Фуросемид в таб. (1 уп.) | 27 ₽ |
| Фуросемид в амп. (1 уп.) | 30 ₽ |
| Домперидон в таб. 10 мг №30 (1 уп.) | 87 ₽ |
| Эналаприл 10 мг  №20 (1 уп.) | 20 ₽ |
| Омепразол 20 мг №20 (2 уп.) | 50 ₽ |
| Фталозол в таб. №20 (5 уп.) | 22 ₽ |
| Цефалексин 0,5 №16 (2 уп.) | 77 ₽ |
| Гидровит/регидрон №10 (5 уп.) | 120 ₽ |
| Комплевит №60 (2 уп.) | 135 ₽ |
| Селмевит №60 (2 уп.) | 226 ₽ |'

        ]);


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('i18n_texts');
    }
}
