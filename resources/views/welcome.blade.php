<!DOCTYPE html>
<html lang="ar" dir="rtl" x-data="{ lang: 'ar' }" :dir="lang === 'ar' ? 'rtl' : 'ltr'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title x-text="lang === 'ar' ? 'عسل إسراء الملكي | Esraa Royal Honey' : 'Esraa Royal Honey | Royal Honey'"></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="bg-amber-50/40 text-gray-800">

    <!-- Header / الترويسة -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <!-- اللوجو واسم الشركة -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.jpg') }}" alt="لوجو عسل إسراء الملكي" class="w-14 h-14 object-cover rounded-full border-2 border-amber-500 shadow-md">
                <div>
                    <h1 class="text-xl font-extrabold text-amber-900" x-text="lang === 'ar' ? 'عسل إسراء الملكي' : 'Esraa Royal Honey'"></h1>
                    <p class="text-xs text-amber-700 font-semibold" x-text="lang === 'ar' ? 'أكثر من ثلاثة عقود في إنتاج أجود منتجات خلية النحل' : 'Over three decades of producing the finest bee hive products'"></p>
                </div>
            </div>
            <!-- زر تبديل اللغة -->
            <div>
                <button @click="lang = lang === 'ar' ? 'en' : 'ar'" class="bg-amber-100 hover:bg-amber-200 text-amber-900 px-4 py-2 rounded-lg text-sm font-bold transition border border-amber-300 shadow-sm">
                    <span x-text="lang === 'ar' ? 'English' : 'عربي'"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content / المحتوى الرئيسي -->
    <main class="max-w-6xl mx-auto px-4 py-10 space-y-8">
        
        <!-- Hero Section - محسنة لتظهر الصورة كاملة وبأعلى وضوح -->
        <div class="rounded-3xl overflow-hidden shadow-2xl bg-amber-950 border-4 border-amber-500/30 mb-12 flex flex-col">
            <!-- عرض الصورة كاملة بدون قص باستخدام object-contain وخلفية متناسقة -->
            <div class="w-full bg-black/90 flex justify-center items-center p-2">
                <img src="{{ asset('images/hero.banner.jpg') }}" alt="عسل إسراء الملكي" class="max-h-[500px] w-auto object-contain rounded-2xl shadow-lg">
            </div>
            <!-- صندوق العنوان والنص الملكي أسفل الصورة مباشرة ليكون واضحاً ومرتباً -->
            <div class="p-8 text-center space-y-3 bg-gradient-to-b from-amber-950 to-amber-900 text-white">
                <h2 class="text-3xl md:text-4xl font-extrabold text-amber-200 drop-shadow-lg" x-text="lang === 'ar' ? 'عسل إسراء الملكي' : 'Esraa Royal Honey'"></h2>
                <p class="text-amber-100 text-base md:text-lg max-w-2xl mx-auto leading-relaxed" x-text="lang === 'ar' ? 'نضع بين أيديكم إرثاً يمتد لأكثر من ثلاثين عاماً في تقديم أنقى منتجات العسل وخلية النحل الطبيعية بمعايير جودة ملكية.' : 'We put in your hands a heritage spanning more than thirty years in providing the purest natural honey and beehive products with royal quality standards.'">
                </p>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Card 1: لمحة عن الشركة -->
            <div x-data="{ open: false }" class="bg-white p-6 rounded-2xl shadow-md border border-amber-100 flex flex-col justify-between hover:shadow-lg transition">
            <div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3 border-b pb-2" x-text="lang === 'ar' ? 'لمحة عن الشركة' : 'Company Overview'"></h3>
                    <p class="text-gray-600 text-sm leading-relaxed" x-text="lang === 'ar' ? 'تأسست عسل إسراء الملكي في دمشق عام 1994، انطلاقًا من شغف حقيقي بعالم النحل. بدأت الفكرة أثناء دراسة مؤسس الشركة للهندسة الزراعية...' : 'Esraa Royal Honey was established in Damascus in 1994, driven by a true passion for the world of bees. The idea started during the founders studies in agricultural engineering...'">
                    </p>
                    <div x-show="open" x-transition class="mt-3 text-gray-600 text-sm leading-relaxed space-y-2">
                        <p x-text="lang === 'ar' ? 'على مدار أكثر من ثلاثة عقود، واصلت الشركة تطوير خبراتها في تربية النحل وإنتاج وتسويق منتجات الخلية، مع الالتزام بأعلى معايير الجودة في جميع مراحل الإنتاج، بدءًا من رعاية النحل واختيار المراعي المناسبة، وصولًا إلى التعبئة والتغليف والتوزيع.' : 'Over more than three decades, the company has continued to develop its expertise in beekeeping, production, and marketing of hive products, adhering to the highest quality standards.'"></p>
                        <p x-text="lang === 'ar' ? 'تقدم الشركة مجموعة متكاملة من منتجات خلية النحل، تشمل أنواعًا متعددة من العسل الطبيعي، وغذاء الملكات، وشهد العسل، وشمع النحل، وغبار الطلع، وخبز النحل، والعكبر بمختلف أنواعه، وخل العسل، وسم النحل، بالإضافة إلى كريمات ومنتجات تجميل ومقويات غذائية متنوعة.' : 'The company offers an integrated range of beehive products, including various types of natural honey, royal jelly, honeycomb, beeswax, pollen, bee bread, propolis, honey vinegar, and bee venom.'"></p>
                    </div>
                </div>
                <button @click="open = !open" class="mt-4 text-amber-700 font-bold text-sm flex items-center gap-1 hover:text-amber-900 transition">
                    <span x-text="lang === 'ar' ? (open ? 'إخفاء التفاصيل' : 'اقرأ المزيد...') : (open ? 'Hide Details' : 'Read More...')"></span>
                </button>
            </div>

            <!-- Card 2: رؤية الشركة -->
            <div x-data="{ open: false }" class="bg-white p-6 rounded-2xl shadow-md border border-amber-100 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3 border-b pb-2" x-text="lang === 'ar' ? 'رؤية الشركة' : 'Company Vision'"></h3>
                    <p class="text-gray-600 text-sm leading-relaxed" x-text="lang === 'ar' ? 'أن تكون عسل إسراء الملكي الاسم الأول الذي يثق به العملاء في مجال منتجات خلية النحل داخل سوريا وخارجها...' : 'To be Esraa Royal Honey the first trusted name by customers in the field of beehive products inside and outside Syria...'">
                    </p>
                    <div x-show="open" x-transition class="mt-3 text-gray-600 text-sm leading-relaxed">
                        <p x-text="lang === 'ar' ? 'أن توسع حضورها في الأسواق العربية والدولية من خلال تقديم منتجات طبيعية موثوقة تجمع بين الجودة والخبرة والابتكار، مع المحافظة على أصالة المهنة واحترام الطبيعة.' : 'To expand its presence in Arab and international markets by offering reliable natural products combining quality, experience, and innovation, while preserving tradition and nature.'"></p>
                    </div>
                </div>
                <button @click="open = !open" class="mt-4 text-amber-700 font-bold text-sm flex items-center gap-1 hover:text-amber-900 transition">
                    <span x-text="lang === 'ar' ? (open ? 'إخفاء التفاصيل' : 'اقرأ المزيد...') : (open ? 'Hide Details' : 'Read More...')"></span>
                </button>
            </div>

            <!-- Card 3: مهمة الشركة وطريقة العمل -->
                <div x-data="{ open: false }" class="bg-white p-6 rounded-2xl shadow-md border border-amber-100 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3 border-b pb-2" x-text="lang === 'ar' ? 'مهمة الشركة وطريقة العمل' : 'Mission & Working Method'"></h3>
                    <p class="text-gray-600 text-sm leading-relaxed" x-text="lang === 'ar' ? 'نسعى إلى توفير منتجات طبيعية من خلية النحل تتميز بالجودة والنقاء، من خلال الاهتمام بالنحل ورعايته واختيار أفضل المراعي...' : 'We strive to provide natural beehive products characterized by quality and purity, through careful beekeeping and selecting the best pastures...'">
                    </p>
                    <div x-show="open" x-transition class="mt-3 text-gray-600 text-sm leading-relaxed space-y-2">
                        <p><strong x-text="lang === 'ar' ? 'طريقة العمل:' :  'Working Method:'"></strong> <span x-text="lang === 'ar' ? 'تبدأ رحلتنا بالعناية المستمرة بخلايا النحل ومتابعتها وفق أسس علمية دقيقة، ثم يتم نقلها إلى المراعي الغنية بالأزهار المتنوعة.' : 'Our journey begins with continuous care of beehives based on precise scientific foundations, then moving them to diverse floral pastures.'"></span></p>
                        <p x-text="lang === 'ar' ? 'بعد اكتمال الموسم، تُقطف منتجات الخلية بعناية وبأسلوب يضمن الحفاظ على جودتها الطبيعية، ثم تمر بعمليات الفرز والتجهيز والتعبئة ضمن عبوات متعددة الأحجام.' : 'After the season is complete, hive products are carefully harvested to preserve natural quality, then sorted, processed, and packaged in various sizes.'"></p>
                    </div>
                </div>
                <button @click="open = !open" class="mt-4 text-amber-700 font-bold text-sm flex items-center gap-1 hover:text-amber-900 transition">
                    <span x-text="lang === 'ar' ? (open ? 'إخفاء التفاصيل' : 'اقرأ المزيد...') : (open ? 'Hide Details' : 'Read More...')"></span>
                </button>
            </div>

            <!-- Card 4: أهداف الشركة -->
            <div x-data="{ open: false }" class="bg-white p-6 rounded-2xl shadow-md border border-amber-100 flex flex-col justify-between hover:shadow-lg transition">
                <div>
                    <h3 class="text-xl font-bold text-amber-800 mb-3 border-b pb-2" x-text="lang === 'ar' ? 'أهداف الشركة' : 'Company Goals'"></h3>
                    <p class="text-gray-600 text-sm leading-relaxed" x-text="lang === 'ar' ? 'تقديم منتجات طبيعية عالية الجودة تلبي تطلعات العملاء، والحفاظ على أعلى معايير الجودة والسلامة...' : 'Providing high-quality natural products that meet customer aspirations, and maintaining the highest standards of quality and safety...'">
                    </p>
                    <div x-show="open" x-transition class="mt-3 text-gray-600 text-sm leading-relaxed">
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li x-text="lang === 'ar' ? 'تطوير منتجات جديدة مستمدة من خلية النحل بما يواكب احتياجات السوق.' : 'Developing new beehive-derived products to match market needs.'"></li>
                            <li x-text="lang === 'ar' ? 'توسيع شبكة التوزيع داخل سوريا وخارجها.' : 'Expanding the distribution network inside and outside Syria.'"></li>
                            <li x-text="lang === 'ar' ? 'بناء علاقة طويلة الأمد مع العملاء تقوم على الثقة والمصداقية.' : 'Building long-term customer relationships based on trust and credibility.'"></li>
                            <li x-text="lang === 'ar' ? 'دعم قطاع تربية النحل والمحافظة على استدامته.' : 'Supporting the beekeeping sector and maintaining its sustainability.'"></li>
                        </ul>
                    </div>
                </div>
                <button @click="open = !open" class="mt-4 text-amber-700 font-bold text-sm flex items-center gap-1 hover:text-amber-900 transition">
                <span x-text="lang === 'ar' ? (open ? 'إخفاء التفاصيل' : 'اقرأ المزيد...') : (open ? 'Hide Details' : 'Read More...')"></span>
                </button>
            </div>

        </div>

        <!-- Card 5: لماذا عسل إسراء الملكي؟ -->
        <div x-data="{ open: false }" class="bg-white p-6 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-amber-800 mb-3 border-b pb-2" x-text="lang === 'ar' ? 'لماذا عسل إسراء الملكي؟' : 'Why Esraa Royal Honey?'"></h3>
            <p class="text-gray-600 text-sm leading-relaxed" x-text="lang === 'ar' ? 'لأننا نؤمن أن الجودة الحقيقية تبدأ من خلية النحل، ونحرص على أن تنعكس في كل منتج يصل إلى عملائنا. خبرة تمتد منذ عام 1994...' : 'Because we believe true quality starts from the beehive, and we ensure it is reflected in every product reaching our customers. Experience since 1994...'">
            </p>
            <div x-show="open" x-transition class="mt-3 text-gray-600 text-sm leading-relaxed grid grid-cols-1 md:grid-cols-2 gap-2">
                <div x-text="lang === 'ar' ? '✓ منتجات طبيعية يتم إنتاجها بعناية مع الحفاظ على خصائصها.' : '✓ Carefully produced natural products preserving their properties.'"></div>
                <div x-text="lang === 'ar' ? '✓ مناحل تُنقل إلى مراعي متنوعة لاختيار أفضل مصادر الرحيق.' : '✓ Apiaries moved to diverse pastures to select the best nectar sources.'"></div>
                <div x-text="lang === 'ar' ? '✓ تشكيلة متكاملة من منتجات خلية النحل لتلبية جميع الاحتياجات.' : '✓ Comprehensive assortment of beehive products to meet all needs.'"></div>
                <div x-text="lang === 'ar' ? '✓ رقابة دقيقة على جميع مراحل الإنتاج بدءاً من الرعاية للتعبئة.' : '✓ Strict control over all production stages from care to packaging.'"></div>
            </div>
            <button @click="open = !open" class="mt-4 text-amber-700 font-bold text-sm flex items-center gap-1 hover:text-amber-900 transition">
                <span x-text="lang === 'ar' ? (open ? 'إخفاء التفاصيل' : 'اقرأ المزيد...') : (open ? 'Hide Details' : 'Read More...')"></span>
            </button>
        </div>

        <!-- Banner Footer -->
        <div class="bg-gradient-to-r from-amber-700 to-amber-900 text-white p-8 rounded-2xl shadow-lg text-center space-y-4">
            <h3 class="text-2xl font-bold" x-text="lang === 'ar' ? 'هل تريد استكشاف أنواع العسل وفوائدها؟' : 'Want to explore honey types and benefits?'"></h3>
            <p class="text-amber-100 text-sm max-w-xl mx-auto" x-text="lang === 'ar' ? 'تعرف على تفاصيل وفوائد 16 نوعًا ملكيًا علاجيًا نقدمها خصيصاً لتلبية احتياجاتك الصحية والغذائية.' : 'Discover the details and benefits of 16 royal therapeutic honey types we offer to meet your health needs.'"></p>
            <a href="#" class="inline-block bg-white text-amber-900 font-bold px-8 py-3 rounded-xl shadow hover:bg-amber-50 transition" x-text="lang === 'ar' ? 'انتقل إلى أنواع العسل' : 'Go to Honey Types'">
            </a>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-amber-950 text-amber-200 py-6 text-center text-sm mt-12">
        <p x-text="lang === 'ar' ? 'جميع الحقوق محفوظة © عسل إسراء الملكي 2026' : 'All Rights Reserved © Esraa Royal Honey 2026'"></p>
    </footer>

</body>
</html>