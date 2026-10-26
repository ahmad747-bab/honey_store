<!DOCTYPE html>
<html lang="{{ session('locale', 'ar') }}" dir="{{ session('locale', 'ar') == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ session('locale', 'ar') == 'ar' ? 'لماذا عسل إسراء الملكي؟' : 'Why Esraa Royal Honey?' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="bg-amber-50 text-gray-800 p-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-xl border-t-4 border-amber-600">
        <h1 class="text-3xl font-bold text-amber-900 mb-6">{{ session('locale', 'ar') == 'ar' ? 'لماذا عسل إسراء الملكي؟' : 'Why Esraa Royal Honey?' }}</h1>
        <div class="space-y-4 text-gray-700 leading-loose text-lg">
            <p class="font-bold text-amber-900">{{ session('locale', 'ar') == 'ar' ? 'لأننا نؤمن أن الجودة الحقيقية تبدأ من خلية النحل.' : 'Because we believe true quality starts from the beehive.' }}</p>
            <ul class="list-disc list-inside space-y-3">
                @if(session('locale', 'ar') == 'ar')
                    <li>خبرة تمتد منذ عام 1994 في تربية النحل وإنتاج منتجات خلية النحل.</li>
                    <li>منتجات طبيعية يتم إنتاجها بعناية مع الحفاظ على خصائصها.</li>
                    <li>مناحل تُنقل إلى مراعي متنوعة لاختيار أفضل مصادر الرحيق.</li>
                    <li>تشكيلة متكاملة من منتجات خلية النحل لتلبية مختلف الاحتياجات.</li>
                    <li>ثقة آلاف العملاء على مدار أكثر من ثلاثين عامًا من العمل.</li>
                @else
                    <li>Experience since 1994 in beekeeping and hive production.</li>
                    <li>Natural products produced carefully while preserving properties.</li>
                    <li>Apiaries moved to diverse pastures for best nectar sources.</li>
                    <li>Comprehensive selection of bee products to meet various needs.</li>
                    <li>Trust of thousands of customers over three decades of work.</li>
                @endif
            </ul>
        </div>
        <div class="mt-8">
            <a href="/" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg font-bold transition">{{ session('locale', 'ar') == 'ar' ? 'العودة للرئيسية ↩' : 'Back to Home ↩' }}</a>
        </div>
    </div>
</body>
</html>