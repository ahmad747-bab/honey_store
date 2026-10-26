<!DOCTYPE html>
<html lang="{{ session('locale', 'ar') }}" dir="{{ session('locale', 'ar') == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ session('locale', 'ar') == 'ar' ? 'رؤية الشركة' : 'Company Vision' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="bg-amber-50 text-gray-800 p-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-xl border-t-4 border-amber-600">
        <h1 class="text-3xl font-bold text-amber-900 mb-6">{{ session('locale', 'ar') == 'ar' ? 'رؤية الشركة' : 'Company Vision' }}</h1>
        <div class="space-y-4 text-gray-700 leading-loose text-lg">
            @if(session('locale', 'ar') == 'ar')
                <p>أن تكون عسل إسراء الملكي الاسم الأول الذي يثق به العملاء في مجال منتجات خلية النحل داخل سوريا، وأن توسع حضورها في الأسواق العربية والدولية من خلال تقديم منتجات طبيعية موثوقة تجمع بين الجودة والخبرة والابتكار، مع المحافظة على أصالة المهنة واحترام الطبيعة التي تمنحنا هذا العطاء.</p>
            @else
                <p>To be Esraa Royal Honey the first trusted name for customers in the field of hive products within Syria, and to expand its presence in Arab and international markets by offering reliable natural products combining quality, experience, and innovation.</p>
            @endif
        </div>
        <div class="mt-8">
            <a href="/" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg font-bold transition">{{ session('locale', 'ar') == 'ar' ? 'العودة للرئيسية ↩' : 'Back to Home ↩' }}</a>
        </div>
    </div>
</body>
</html>