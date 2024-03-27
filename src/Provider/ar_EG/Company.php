<?php

namespace Faker\Provider\ar_EG;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{companyPrefix}} {{cityName}}',
        '{{companyPrefix}} {{lastName}}',
        '{{cityName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{cityName}} {{companySuffix}}',
    ];

    protected static $catchPhraseWords = [
        ['الخدمات', 'الحلول', 'الانظمة'],
        [
            'الذهبية', 'الذكية', 'المتطورة', 'المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية',
        ],
    ];

    /**
     * Source - https://englishlive.ef.com/ar-sa/blog/business-english/common-jobs-and-professions-in-english/
     */
    protected static $jobTitleFormat = [
        'محاسب', 'محاسب عام معتمد', 'مدير مالي', 'محاسب تكاليف', 'امين صندوق', 'محاسب التأمين', 'خبير اقتصادي', 'محلل اقتصادي', 'مخطط مالي', 'مدير الميزانية', 'مراقب التكلفة', 'مراقب مالي', 'مسئول استثمار', 'مسئول حسابات', 'موظف حسابات', 'معلم', 'طالب', 'ناظر/ مدير مدرسة', 'معلم/ مدرب', 'محامي', 'وكيل قانونى', 'محامي', 'قاضى', 'النائب العام', 'مستشار قانوني', 'محقق', 'مهندس', 'مهندس زراعي', 'مُهندس الملاحة الجوية', 'مهندس كيميائي', 'مهندس معماري', 'مهندس مدني', 'مهندس كمبيوتر', 'مهندس كهرباء', 'مهندس طيران', 'مهندس هيدروليكي', 'مهندس صناعي', 'مهندس ميكانيكي', 'مهندس إنتاج', 'مهندس نووي', 'مهندس مفاعل', 'مهندس برمجيات', 'مهندس تقني', 'مهندس إنشائي', 'مهندس سيارات', 'مهندس الكترونيات', 'مهندس تعدين', 'مهندس بحري', 'مهندس بيولوجي', 'مهندس ديكور', 'مهندس نظم', 'دكتور', 'طبيب الطوارئ', 'طبيب القلب', 'طبيب القلب والأوعية الدموية', 'طبيب مخ وأعصاب', 'طبيب جلدية', 'طبيب أنف وأذن وحنجرة', 'طبيب أمراض الدم', 'طبيب أورام', 'طبيب الأشعة', 'طبيب العظام', 'طبيب الأسنان', 'طبيب العيون', 'طبيب السمعيات', 'طبيب الأطفال', 'طبيب حديثي الولادة', 'طبيب نفسي', 'طبيب الباطنة', 'طبيب جرًّاح', 'طبيب الروماتيزم', 'طبيب التخدير', 'أخصائي تغذية', 'أخصائي صحة', 'طبيب بيطري', 'طبيب علاج طبيعي', 'ممرضة', 'صيدلي', 'أخصائي تسويق', 'محلل بيانات', 'مدير إداري', 'مدير عام', 'مدير إقليمي', 'مدير التخطيط', 'مدير التدريب', 'مدير التسويق', 'مدير بحوث تسويق', 'مدير تخطيط أعمال', 'مدير تسويق دولي', 'مدير تطوير أعمال', 'مدير تنفيذي', 'مدير عقود', 'مدير فرع', 'مدير قواعد بيانات', 'مدير مبيعات', 'مدير مخازن', 'مساعد مدير', 'مدير مشتريات', 'مدير مشروع', 'مدير نظم معلومات إدارية', 'مدير ويب', 'مدير علاقات عامة', 'مستشار تسويق ومبيعات', 'مشرف', 'بائع', 'بائع', 'بائع', 'مشرف مبيعات', 'سكرتير', 'مطور ويب', 'كهربائي', 'لحام كهربائي', 'حداد', 'نجار', 'حلاق', 'خياط', 'نقاش', 'رئيس عمال', 'رئيس قسم', 'راعى', 'راعى الغنم', 'ربان سفينة', 'رجل الإطفاء', 'رجل الإطفاء', 'رسام', 'رسام الكاريكاتير', 'سائق', 'سائق', 'سائق اتوبيس أو حافلة', 'سائق سيارة أجرة', 'سائق عربة الكارو', 'ساعاتي', 'ساعي', 'ساعي البريد', 'ساعي البريد', 'سباك صحي', 'سمسار', 'شيف', 'صائغ', 'صاحب متجر', 'صانع الأحذية', 'صانع زجاج', 'صباغ', 'صياد', 'صياد سمك', 'ضارب على الآلة الكاتبة', 'طحان', 'عامل المطبعة', 'عامل حرفي', 'عامل خراطة', 'عامل زراعي', 'عامل غزل', 'عامل نظافة', 'حداد', 'عامل مغسلة', 'عامل منجم', 'عامل نسيج', 'عامل نظافة', 'مصفف الشعر (كوافير)', 'ماسح الاحذية', 'مراكبي', 'مصمم أزياء', 'منجد', 'ميكانيكي', 'نادل (جرسون)', 'نادلة (جرسونة)', 'بواب (حارس)', 'حارس أمن', 'عامل بناء', 'جزار', 'خطاط', 'مصور فوتوغرافي', 'صانع القبعات', 'نّحات', 'بنّاء', 'تاجر', 'تاجر تجزئه', 'تاجر جملة', 'جواهرجى', 'حلاق', 'حلواني', 'حمّال', 'خادم', 'خادمة', 'خادمة منزل', 'خباز', 'نقاش', 'ترزي', 'أمين المكتبة', 'عارض ازياء', 'مقدم أخبار التلفزيون', 'صانع الأدوات البصرية (نظاراتي)', 'عامل مساعد بمتجر', 'مترجم', 'موظف استقبال', 'مساح أراضي', 'مصمم جرافيك', 'مصور سينمائي', 'مضيف أو مضيفة على الطائرة', 'مقاول',
    ];

    protected static $companyPrefix = ['شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض'];

    protected static $companySuffix = [
        ' ش.م.م',
        ' للتجاره العامه',
        'للأجهزة الطبيه',
        'للتوريدات',
        'للمقاولات',
        'للتطوير العقاري',
        'للدعايه و الاعلان',
        'للحلول المتقدمه',
        'للخدمات الدولية',
        'الدولية',
        'للانظمة المتكاملة',
    ];

    /**
     * @example 'مؤسسة'
     *
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

    /**
     * @example 'الحلول المتقدمة'
     */
    public function catchPhrase()
    {
        $result = [];

        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * example 010101010
     */
    public static function companyTaxIdNumber()
    {
        $partialValue = static::numerify(str_repeat('#', 9));

        return Luhn::generateLuhnNumber($partialValue);
    }

    /**
     * example 010101
     */
    public static function companyTradeRegisterNumber()
    {
        $partialValue = static::numerify(str_repeat('#', 6));

        return Luhn::generateLuhnNumber($partialValue);
    }
}
