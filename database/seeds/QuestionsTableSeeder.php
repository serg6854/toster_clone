<?php

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
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

//        foreach ($titles as $title) {
//            /** @var Question $question */
//            factory(Question::class)->create([
//                'title' => $title,
//            ]);
//        }

        factory(Question::class, 100)
            ->create()
            ->each(function (Question $question) {
                factory(Answer::class, random_int(1, 10))->create([
                    'question_id' => $question->id
                ]);

                $subscribers = User::inRandomOrder()->take(random_int(1, 50))->get();
                $question->subscribers()->saveMany($subscribers);
            });

    }
}
