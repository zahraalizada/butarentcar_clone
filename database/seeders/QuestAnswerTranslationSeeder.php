<?php

namespace Database\Seeders;

use App\Models\QuestAnswerTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestAnswerTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quest_answer_translations')->truncate();
       $data = [
           [
               'quest_answer_id' => 1,
               'locale' => 'en',
               'question' => 'Who pays',
               'answer' =>
                   ' <p><strong>Who pays for the repair of a rental car if I get into an accident?</strong></p>

<p><br />
Buta Rent a Car cars are insured. In the event of damage to the car in an accident due to the fault of the tenant, he is liable within the franchise. With proven innocence, the tenant does NOT bear financial responsibility! In this case, you must perform all actions (call the traffic police, issue certificates) related to the accident. If you have a car accident, call the company manager and we will always help you in a stressful situation. We will also offer you a replacement car of the same class, if you are not the culprit.</p>

<p><strong>Where can I rent a rental car at the end of the rental period? Do I have to come to your office, or can I do it where it is more convenient for me?</strong></p>

<p>At the end of the rental period, you can rent it wherever it is more convenient for you, in our offices or anywhere in Baku. Car rental outside the office is subject to a surcharge. The place and time of the rental car must be warned by the company manager in advance.</p>

<p><strong>Can I install child seats in a rental car at your company?</strong></p>

<p>If you want to install child seats in a rental car, tell our manager in advance. When you arrive to pick up the car, it will be equipped with a child seat</p>

<p><strong>My friend and I would like to rent a car for two from you. Is it possible?</strong></p>

<p><br />
No problem! In order to rent a car for two, you need to add a second driver to the car rental agreement and write out two powers of attorney, for you and your friend, relative or wife.</p>',
           ],
           [
               'quest_answer_id' => 1,
               'locale' => 'az',
               'question' => 'Qəzaya düşsəm',
               'answer' =>
                   '<p><strong>Qəzaya d&uuml;şsəm icarə avtomobilinin təmirini kim &ouml;dəyir?</strong></p>

<p><br />
Buta Rent a Car avtomobilləri sığortalanır. Kiracının g&uuml;nahı &uuml;z&uuml;ndən qəza zamani&nbsp;avtomobilə ziyan dəyirsə, franşiza &ccedil;ər&ccedil;ivəsində məsuliyyət daşıyır. S&uuml;but edilmiş g&uuml;nahsızlığı ilə kirayə&ccedil;i maddi məsuliyyət daşımır! Bu vəziyyətdə, qəza ilə əlaqəli b&uuml;t&uuml;n hərəkətləri etməlisiniz (yol polisinə zəng edin, sənədləri təqdim edin). Qəza zamani şirkət numayəndəsinə&nbsp;zəng edin biz Sizə&nbsp;hər zaman sizə k&ouml;mək edəcəyik. G&uuml;nahkar deyilsinizsə, eyni sinifdə olan bir əvəzedici maşın təklif edəcəyik.</p>

<p><strong>Kirayə m&uuml;ddəti bitdikdə kirayə maşını harada təhvil verə bilərəm? Ofisinizə gəlməliyəm, yoxsa mənim &uuml;&ccedil;&uuml;n daha əlverişli olan yerdə bunu edə bilərəm?</strong></p>

<p>Kirayə m&uuml;ddətinin sonunda, sizin &uuml;&ccedil;&uuml;n daha uyğun yerdə, ofislərimizdə və ya Bakıdakı hər hansi yerdə təhvil verə bilərsiniz. Ofis xaricində avtomobil təhvili&nbsp;&uuml;&ccedil;&uuml;n əlavə &ouml;dəniş tələb olunur. Kirayə avtomobilin yeri və vaxtı şirkət rəhbərinə əvvəlcədən xəbərdar edilməlidir.</p>

<p><strong>Şirkətinizdə icarə avtomobilinə uşaq oturacaqları quraşdıra bilərəmmi?</strong></p>

<p>Kirayəlik bir avtomobildə uşaq oturacaqlarını quraşdırmaq istəyirsinizsə, əvvəlcədən bizə&nbsp;deyin. Maşını g&ouml;t&uuml;rməyə gəldiyiniz zaman uşaq oturacağı ilə təchiz ediləcəkdir</p>

<p><strong>Dostum və mən sizdən&nbsp;ikimizə&nbsp;bir maşın icarəyə g&ouml;t&uuml;rmək istərdik. M&uuml;mk&uuml;nd&uuml;r?</strong></p>

<p><br />
Problem deyil! Bir avtomobili iki nəfərə icarəyə g&ouml;t&uuml;rmək &uuml;&ccedil;&uuml;n avtomobil icarə m&uuml;qaviləsinə ikinci &nbsp;s&uuml;r&uuml;c&uuml;nu əlavə etməlisiniz.siz və dostunuz, qohum və ya həyat yoldaşınız &uuml;&ccedil;&uuml;n iki etibarnamə yazilacaq.</p>',
           ],
       ];

       QuestAnswerTranslation::query()->insert($data);

    }
}
