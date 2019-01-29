<?php

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'Где можно узнавать о новых технологиях и разработках?',
            'Как организовать беспрерывную запись ffmpeg?',
            'Что значит html полностью готовить на стороне клиента на JS?',
            'Интересные лендинги, продающие один товар?',
            'Недорогой VPS с большим диском?',
            'Как сделать многопоточный HTTP(S) сервер в ноде?',
            'Какой сейчас хороший зарубежный регистратор доменов?',
            'На каких ресурсах разработчику можно найти неофициальную удаленную работу: хочу вторую работу,кроме официальной?',
            'Как рассчитать экономику для игры?',
            'Где найти интересные решения макетов для интерфейса сайта?',
            'Можно ли пробросить игровую виртуальную машину на тонкий клиент?',
            'Как удобнее делать дебаггинг для NET?',
            'Как организовать систему плагинов (пакетов) в Node.JS + Electron?',
            'Как полностью написать сайт с нуля, если ты знаешь только frontend?'
        ];
        $body = 'Как построен алгоритм искусственного интеллекта, в котором он получает "вознаграждения"? Что способствует нейрону понять что правильно а что нет?';

        foreach ($titles as $title) {
            Question::create([
                'title' => $title,
                'body' => $body
            ]);
        }
    }
}
