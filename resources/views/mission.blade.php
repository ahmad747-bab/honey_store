<!DOCTYPE html>
<html lang="{{ session('locale', 'ar') }}" dir="{{ session('locale', 'ar') == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ session('locale', 'ar') == 'ar' ? 'مهمة الشركة وطريقة العمل' : 'Mission & Workflow' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="bg-amber-50 text-gray-800 p-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-xl border-t-4 border-amber-600">
        <h1 class="text-3xl font-bold text-amber-900 mb-6">{{ session('locale', 'ar') == 'ar' ? 'مهمة الشركة وطريقة العمل' : 'Mission & Workflow' }}</h1>
        <div class="space-y-4 text-gray-700 leading-loose text-lg">
            @if(session('locale', 'ar') == 'ar')
                <h3 class="font-bold text-xl text-amber-900">مهمة الشركة:</h3>
                <p>نسعى إلى توفير منتجات طبيعية من خلية النحل تتميز بالجودة والنقاء، من خلال الاهتمام بالنحل ورعايته، واختيار أفضل المراعي، والاعتماد على أساليب إنتاج وتعبئة دقيقة تضمن وصول المنتج إلى المستهلك بأفضل صورة.</p>
                <h3 class="font-bold text-xl text-amber-900 mt-6">طريقة العمل:</h3>
                <p>تبدأ رحلتنا بالعناية المستمرة بخلايا النحل ومتابعتها وفق أسس علمية دقيقة، ثم نقلها إلى المراعي الغنية بالأزهار، وتُقطف المنتجات بعناية وتُعبأ بعبوات أنيقة تحمل هوية عسل إسراء الملكي.</p>
            @else
                <h3 class="font-bold text-xl text-amber-900">Our Mission:</h3>
                <p>We strive to provide natural, high-quality and pure bee products through careful bee care, selecting the best pastures, and relying on precise production and packaging methods.</p>
                <h3 class="font-bold text-xl text-amber-900 mt-6">Workflow:</h3>
                <p>Our journey begins with continuous hive care, moving them to floral pastures, harvesting carefully, and packaging them under Esraa Royal Honey identity.</p>
            @endif
        </div>
        <div class="mt-8">
            <a href="/" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg font-bold transition">{{ session('locale', 'ar') == 'ar' ? 'العودة للرئيسية ↩' : 'Back to Home ↩' }}</a>
        </div>
    </div>
</body>
</html>