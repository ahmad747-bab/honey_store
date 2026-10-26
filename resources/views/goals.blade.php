<!DOCTYPE html>
<html lang="{{ session('locale', 'ar') }}" dir="{{ session('locale', 'ar') == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ session('locale', 'ar') == 'ar' ? 'أهداف الشركة' : 'Company Goals' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="bg-amber-50 text-gray-800 p-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-xl border-t-4 border-amber-600">
        <h1 class="text-3xl font-bold text-amber-900 mb-6">{{ session('locale', 'ar') == 'ar' ? 'أهداف الشركة' : 'Company Goals' }}</h1>
        <div class="space-y-4 text-gray-700 leading-loose text-lg">
            <ul class="list-disc list-inside space-y-3">
                @if(session('locale', 'ar') == 'ar')
                    <li>تقديم منتجات طبيعية عالية الجودة تلبي تطلعات العملاء.</li>
                    <li>الحفاظ على أعلى معايير الجودة والسلامة في جميع مراحل الإنتاج.</li>
                    <li>تطوير منتجات جديدة مستمدة من خلية النحل بما يواكب احتياجات السوق.</li>
                    <li>توسيع شبكة التوزيع داخل سوريا وخارجها.</li>
                    <li>بناء علاقة طويلة الأمد مع العملاء تقوم على الثقة والمصداقية.</li>
                @else
                    <li>Deliver high-quality natural products meeting customer expectations.</li>
                    <li>Maintain the highest quality and safety standards across all production stages.</li>
                    <li>Develop new hive products to keep pace with market needs.</li>
                    <li>Expand the distribution network inside and outside Syria.</li>
                    <li>Build long-term customer relationships based on trust and credibility.</li>
                @endif
            </ul>
        </div>
        <div class="mt-8">
            <a href="/" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg font-bold transition">{{ session('locale', 'ar') == 'ar' ? 'العودة للرئيسية ↩' : 'Back to Home ↩' }}</a>
        </div>
    </div>
</body>
</html>