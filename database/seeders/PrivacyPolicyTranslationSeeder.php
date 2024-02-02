<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicyTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivacyPolicyTranslationSeeder extends Seeder
{
    public function run(): void
    {
//        DB::table('privacy_policy_translations')->truncate();
        $data = [
            [
                'privacy_policy_id' => 1,
                'locale' => 'en',
                'title' => 'Privacy and security',
                'description' =>
                    '<p><strong>Privacy and security</strong></p>

<p><strong>General Provisions</strong><br />
&ldquo;Buta Rent a Car&rdquo; Limited Liability Company adheres to a privacy policy regarding personal information and personal data received from each of the visitors to the Company&#39;s website (the &ldquo;Site&rdquo;). The Company respects the rights of visitors to the Site and unconditionally recognizes the importance of confidentiality of personal information of visitors to the Site.</p>

<p>This Privacy Statement applies to all visitors to the Site, determines what personal data the Company can receive through the Site and how the Company can use the received personal data of visitors.</p>

<p><strong>Processing personal data.</strong><br />
Personal data means information related to the subject of personal data, in particular, last name, first name and patronymic, date of birth, passport data, data on a driver&rsquo;s license, length of service, address, contact details.</p>

<p>Providing your personal data voluntarily, you automatically agree to the processing of your personal data by the Company as follows, unless otherwise specified: storage, systematization, collection, accumulation, clarification, use, depersonalization, transfer, deletion.</p>

<p>The purpose of processing personal data is to provide you with the requested information and services on the Site.</p>

<p>If you do not want your Personal Data to be processed, please do not provide them.</p>

<p><strong>Minor users of the site.</strong><br />
If you are under 18 years old, before providing the Company with personal information, ask the permission of your parents or guardians. Users who do not have such permission are not allowed to provide personal information to the Company.</p>

<p><strong>Protection of information received and data storage.</strong><br />
The Company takes all reasonable technical and organizational measures to protect the information you provide from unlawful or accidental access to it, from destruction, alteration, blocking, copying, distribution, as well as from other illegal actions of third parties with it.</p>

<p>At the same time, users of the Site understand and agree that the Company does not provide guarantees of absolute protection of the information provided.</p>',
            ],
            [
                'privacy_policy_id' => 1,
                'locale' => 'az',
                'title' => 'Ümumi müddəalar',
                'description' =>
                    '     <p><strong>Məxfilik və təhl&uuml;kəsizlik</strong></p>

<p><strong>&Uuml;mumi m&uuml;ddəalar</strong><br />
&quot;Buta Rent a Car&quot; MMC&nbsp;veb saytına (&quot;Sayt&quot;) daxil olanların hər birindən alınan şəxsi məlumatlar və şəxsi məlumatlarla bağlı məxfilik siyasətinə riayət edir. Şirkət Saytın ziyarət&ccedil;ilərinin h&uuml;quqlarına h&ouml;rmət edir və Saytın ziyarət&ccedil;ilərinin şəxsi məlumatlarının məxfiliyinin vacibliyini qeyd-şərtsiz tanıyır.</p>

<p>Bu Məxfilik Bəyannaməsi Saytın b&uuml;t&uuml;n ziyarət&ccedil;ilərinə şamil edilir, Şirkətin Sayt vasitəsilə hansı şəxsi məlumatları əldə edə biləcəyini və Şirkətin qəbul edilmiş şəxsi məlumatlarından necə istifadə edə biləcəyini m&uuml;əyyənləşdirir.</p>

<p><strong>Şəxsi məlumatların işlənməsi.</strong><br />
Fərdi məlumatlar şəxsi məlumatların m&ouml;vzusu ilə əlaqəli məlumatları, x&uuml;susən də soyadı, adı və atasının adı, doğum tarixi, pasport məlumatları, s&uuml;r&uuml;c&uuml;n&uuml;n vəsiqəsi haqqında məlumat, iş stajı, &uuml;nvanı, əlaqə məlumatlarıdır.</p>

<p>Şəxsi məlumatlarınızı k&ouml;n&uuml;ll&uuml; olaraq təqdim etdikdə, başqa c&uuml;r g&ouml;stərilmədiyi təqdirdə şəxsi məlumatların aşağıdakı kimi şirkət tərəfindən işlənməsinə razılıq verilir: saxlama, sistemləşdirmə, yığma, dəqiqləşdirmə, istifadə, depersonalizasiya, &ouml;t&uuml;rmə, silmə.</p>

<p>Şəxsi məlumatların emalının məqsədi Saytda tələb olunan məlumatları və xidmətləri təmin etməkdir.</p>

<p>Şəxsi məlumatlarınızın işlənməsini istəmirsinizsə, zəhmət olmasa bunları təmin etməyin.</p>

<p><strong>Saytın az istifadə&ccedil;iləri.</strong><br />
18 yaşdan ki&ccedil;iksinizsə, Şirkətə şəxsi məlumat verməzdən əvvəl, valideynlərinizin&nbsp;icazəsini istəyin. Belə icazəsi olmayan istifadə&ccedil;ilərə şirkətə şəxsi məlumat verməyə icazə verilmir.</p>

<p><strong>Alınan məlumatların qorunması və məlumatların saxlanması.</strong><br />
Şirkət, verdiyiniz məlumatı ona qanunsuz və ya təsad&uuml;fi daxil olmaqdan, məhv etmək, dəyişdirmək, bloklamaq, &ccedil;ıxarmaq, yaymaqdan, habelə &uuml;&ccedil;&uuml;nc&uuml; tərəflərin digər qanunsuz hərəkətlərindən qorumaq &uuml;&ccedil;&uuml;n b&uuml;t&uuml;n məqbul texniki və təşkilati tədbirləri g&ouml;r&uuml;r.</p>

<p>Eyni zamanda, Sayt istifadə&ccedil;iləri başa d&uuml;ş&uuml;rlər və razılaşırlar ki, Şirkət təqdim olunan məlumatların m&uuml;tləq qorunmasına zəmanət vermir</p>',
            ],

        ];

        PrivacyPolicyTranslation::query()->insert($data);


    }
}
