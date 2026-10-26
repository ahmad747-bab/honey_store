<!DOCTYPE html>
<html lang="{{ session('locale', 'ar') }}" dir="{{ session('locale', 'ar') == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>{{ session('locale', 'ar') == 'ar' ? 'لمحة عن الشركة' : 'About the Company' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="bg-amber-50 text-gray-800 p-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-xl border-t-4 border-amber-600">
        <h1 class="text-3xl font-bold text-amber-900 mb-6">{{ session('locale', 'ar') == 'ar' ? 'لمحة عن الشركة' : 'About the Company' }}</h1>
        <div class="space-y-4 text-gray-700 leading-loose text-lg">
            @if(session('locale', 'ar') == 'ar')
                <p>تأسست عسل إسراء الملكي في دمشق عام 1994، انطلاقًا من شغف حقيقي بعالم النحل. بدأت الفكرة أثناء دراسة مؤسس الشركة للهندسة الزراعية، حيث لفت هذا المجال اهتمامه، فتحول ذلك الشغف إلى مشروع متخصص هدفه تقديم منتجات نحل طبيعية وعالية الجودة.</p>
                <p>على مدار أكثر من ثلاثة عقود، واصلت الشركة تطوير خبراتها في تربية النحل وإنتاج وتسويق منتجات الخلية، مع الالتزام بأعلى معايير الجودة في جميع مراحل الإنتاج، بدءًا من رعاية النحل واختيار المراعي المناسبة، وصولًا إلى التعبئة والتغليف والتوزيع.</p>
                <p>تقدم الشركة مجموعة متكاملة من منتجات خلية النحل، تشمل أنواعًا متعددة من العسل الطبيعي، وغذاء الملكات، وشهد العسل، وشمع النحل، وغبار الطلع، وخبز النحل، والعكبر بمختلف أنواعه، وخل العسل، وسم النحل، بالإضافة إلى كريمات ومنتجات تجميل تعتمد على مكونات طبيعية من خلية النحل، وخلطات غذائية متنوعة لدعم المناعة، وصحة الجهاز التنفسي، والأعصاب، والحيوية العامة.</p>
                <p>وتخدم الشركة مختلف شرائح العملاء من الأفراد، والمحلات التجارية، والصيدليات، وتجار الجملة، مع الحرص على بناء علاقة قائمة على الثقة والجودة والاستمرارية.</p>
            @else
                <p>Esraa Royal Honey was established in Damascus in 1994, out of a true passion for the world of bees. The idea started during the founder's study of agricultural engineering, turning passion into a specialized project aiming to provide natural, high-quality bee products.</p>
                <p>Over more than three decades, the company has continued to develop its expertise in beekeeping and honey production, committed to the highest quality standards from hive care to packaging and distribution.</p>
                <p>The company offers an integrated range of hive products, including various types of natural honey, royal jelly, honeycomb, beeswax, bee pollen, propolis, and health mixtures to support immunity and vitality.</p>
            @endif
        </div>
        <div class="mt-8">
            <a href="/" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg font-bold transition">{{ session('locale', 'ar') == 'ar' ? 'العودة للرئيسية ↩' : 'Back to Home ↩' }}</a>
        </div>
    </div>
</body>
</html>