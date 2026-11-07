<!DOCTYPE html>
<html lang="ar" dir="rtl"
      x-data="{ lang: localStorage.getItem('esraa_site_lang') || 'ar', toggleLang(){ this.lang = this.lang === 'ar' ? 'en' : 'ar'; localStorage.setItem('esraa_site_lang', this.lang); document.documentElement.lang = this.lang; document.documentElement.dir = this.lang === 'ar' ? 'rtl' : 'ltr'; document.body.dir = this.lang === 'ar' ? 'rtl' : 'ltr'; } }"
      :dir="lang === 'ar' ? 'rtl' : 'ltr'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title x-text="lang === 'ar' ? 'منتجات خلية النحل | عسل إسراء الملكي' : 'Beehive Products | Esraa Royal Honey'"></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
document.addEventListener('alpine:init', () => {
    const storageKey = 'esraa_royal_honey_cart_v1';
    let savedItems = [];
    try { savedItems = JSON.parse(localStorage.getItem(storageKey) || '[]'); } catch (error) { savedItems = []; }

    Alpine.store('cart', {
        items: Array.isArray(savedItems) ? savedItems : [],
        isOpen: false,
        checkout: false,
        customer: { name: '', phone: '', address: '', payment: 'cod' },

        get count() { return this.items.reduce((sum, item) => sum + Number(item.qty || 0), 0); },
        get total() { return this.items.reduce((sum, item) => sum + (Number(item.price || 0) * Number(item.qty || 0)), 0); },

        save() { localStorage.setItem(storageKey, JSON.stringify(this.items)); },

        add(item, quantity = 1) {
            const amount = Number(quantity || 1);
            const existing = this.items.find(row => row.id === item.id);
            if (existing) existing.qty = Number(existing.qty || 0) + amount;
            else this.items.push({ ...item, qty: amount });
            this.save();
        },

        increase(id) {
            const item = this.items.find(row => row.id === id);
            if (item) { item.qty = Number(item.qty || 0) + 1; this.save(); }
        },

        decrease(id) {
            const index = this.items.findIndex(row => row.id === id);
            if (index === -1) return;
            this.items[index].qty = Number(this.items[index].qty || 0) - 1;
            if (this.items[index].qty <= 0) this.items.splice(index, 1);
            this.save();
        },

        remove(id) {
            this.items = this.items.filter(row => row.id !== id);
            this.save();
        },

        clear() {
            this.items = [];
            this.save();
        },

        sendToWhatsApp() {
            if (!this.items.length) {
                alert('السلة فارغة. أضف منتجات أولاً.');
                return;
            }

            if (!this.customer.name.trim() || !this.customer.phone.trim() || !this.customer.address.trim()) {
                alert('يرجى تعبئة الاسم ورقم الهاتف وعنوان التوصيل.');
                return;
            }

            const paymentText = this.customer.payment === 'shamcash' ? 'شام كاش' : 'الدفع عند الاستلام';

            const message = [
                'طلب جديد من عسل إسراء الملكي',
                'الاسم: ' + this.customer.name,
                'رقم الهاتف: ' + this.customer.phone,
                'عنوان التوصيل: ' + this.customer.address,
                'طريقة الدفع: ' + paymentText,
                '--------------------',
                'تفاصيل الطلب:'
            ];

            this.items.forEach(item => {
                message.push(
                    '- ' + (item.nameAr || item.nameEn || 'منتج') +
                    ' / ' + (item.variantAr || item.variantEn || '') +
                    ' × ' + item.qty +
                    ' = ' + (Number(item.price) * Number(item.qty)) +
                    ' ليرة جديدة'
                );
            });

            message.push('--------------------');
            message.push('عدد القطع: ' + this.count);
            message.push('المجموع الكلي: ' + this.total + ' ليرة جديدة');

            const url = 'https://wa.me/963947751463?text=' + encodeURIComponent(message.join('\n'));
            window.open(url, '_blank');
        }
    });
});
</script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        .honey-banner {
            background-color: #542006;
            background-image:
                radial-gradient(circle at 12% 50%, rgba(255, 196, 55, .18) 0 2px, transparent 3px),
                radial-gradient(circle at 88% 50%, rgba(255, 196, 55, .18) 0 2px, transparent 3px),
                linear-gradient(110deg, #8c3908, #4b1d06);
            background-size: 22px 22px, 22px 22px, auto;
        }

        .product-card {
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .product-card:hover {
            transform: translateY(-3px);
        }
    </style>

    <script>
        function beeProductsPage() {
            return {
                products: [
                    {
                        id: 'bee-royal-jelly',
                        nameAr: 'غذاء ملكي صيني',
                        nameEn: 'Chinese Royal Jelly',
                        image: "{{ asset('images/bee_products_01_royal_jelly_chinese.jpg') }}",
                        options: [
                            { size: '10 غ', sizeEn: '10 g', price: 200, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-palm-pollen',
                        nameAr: 'طلع النخيل',
                        nameEn: 'Date Palm Pollen',
                        image: "{{ asset('images/bee_products_02_palm_pollen.jpg') }}",
                        options: [
                            { size: '10 غ', sizeEn: '10 g', price: 200, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-propolis',
                        nameAr: 'عكبر عدسي',
                        nameEn: 'Lenticular Propolis',
                        image: "{{ asset('images/bee_products_03_lenticular_propolis.jpg') }}",
                        options: [
                            { size: '20 غ', sizeEn: '20 g', price: 400, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-propolis-oil-honey',
                        nameAr: 'زيت العكبر مع العسل',
                        nameEn: 'Propolis Oil with Honey',
                        image: "{{ asset('images/bee_products_04_propolis_oil_honey.jpg') }}",
                        options: [
                            { size: '80 غ', sizeEn: '80 g', price: 350, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-honey-vinegar',
                        nameAr: 'خل العسل',
                        nameEn: 'Honey Vinegar',
                        image: "{{ asset('images/bee_products_05_honey_vinegar.jpg') }}",
                        options: [
                            { size: '500 غ', sizeEn: '500 g', price: 350, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-bread',
                        nameAr: 'خبز النحل',
                        nameEn: 'Bee Bread',
                        image: "{{ asset('images/bee_products_06_bee_bread.jpg') }}",
                        options: [
                            { size: '250 غ', sizeEn: '250 g', price: 980, qty: 0 },
                            { size: '500 غ', sizeEn: '500 g', price: 1900, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-strengthening-mix',
                        nameAr: 'خلطة مقوية',
                        nameEn: 'Strengthening Mix',
                        image: "{{ asset('images/bee_products_07_strengthening_mix.jpg') }}",
                        options: [
                            { size: '185 غ', sizeEn: '185 g', price: 750, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-respiratory-mix',
                        nameAr: 'خلطة تنفسية',
                        nameEn: 'Respiratory Mix',
                        image: "{{ asset('images/bee_products_08_respiratory_mix.jpg') }}",
                        options: [
                            { size: '250 غ', sizeEn: '250 g', price: 600, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-honey-nuts',
                        nameAr: 'عسل بالمكسرات',
                        nameEn: 'Honey with Nuts',
                        image: "{{ asset('images/bee_products_13_honey_with_nuts.jpg') }}",
                        options: [
                            { size: '250 غ', sizeEn: '250 g', price: 650, qty: 0 },
                            { size: '500 غ', sizeEn: '500 g', price: 1300, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-joint-cream',
                        nameAr: 'كريم للمفاصل بسم النحل',
                        nameEn: 'Bee Venom Joint Cream',
                        image: "{{ asset('images/bee_products_09_bee_venom_joint_cream.jpg') }}",
                        options: [
                            { size: '', sizeEn: '', price: 650, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-beauty-cream',
                        nameAr: 'كريم نضارة وجمال',
                        nameEn: 'Beauty and Glow Cream',
                        image: "{{ asset('images/bee_products_10_beauty_glow_cream.jpg') }}",
                        options: [
                            { size: '', sizeEn: '', price: 500, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-skin-cream',
                        nameAr: 'كريم رعاية البشرة بسم النحل',
                        nameEn: 'Bee Venom Skin Care Cream',
                        image: "{{ asset('images/bee_products_11_bee_venom_skin_care_cream.jpg') }}",
                        options: [
                            { size: '', sizeEn: '', price: 500, qty: 0 }
                        ]
                    },
                    {
                        id: 'bee-honeycomb',
                        nameAr: 'شهد العسل',
                        nameEn: 'Honeycomb',
                        image: "{{ asset('images/bee_products_12_honeycomb.jpg') }}",
                        options: [
                            { size: '200 غ', sizeEn: '200 g', price: 500, qty: 0 },
                            { size: '400 غ', sizeEn: '400 g', price: 1000, qty: 0 },
                            { size: '450 غ', sizeEn: '450 g', price: 1100, qty: 0 }
                        ]
                    }
                ],

                get selectedCount() {
                    return this.products.reduce((sum, product) => {
                        return sum + product.options.reduce((count, option) => count + option.qty, 0);
                    }, 0);
                },

                get selectedTotal() {
                    return this.products.reduce((sum, product) => {
                        return sum + product.options.reduce((total, option) => {
                            return total + (option.qty * option.price);
                        }, 0);
                    }, 0);
                },

                addSelectedToCart() {
                    if (!this.selectedCount) {
                        alert(this.lang === 'ar'
                            ? 'اختر كمية منتج واحدة على الأقل أولاً.'
                            : 'Please select at least one item first.');
                        return;
                    }

                    this.products.forEach(product => {
                        product.options.forEach(option => {
                            if (option.qty > 0) {
                                Alpine.store('cart').add({
                                    id: product.id + '-' + (option.sizeEn || 'single'),
                                    nameAr: product.nameAr,
                                    nameEn: product.nameEn,
                                    variantAr: option.size || 'عبوة واحدة',
                                    variantEn: option.sizeEn || 'Single item',
                                    price: option.price
                                }, option.qty);

                                option.qty = 0;
                            }
                        });
                    });

                    Alpine.store('cart').isOpen = true;
                    Alpine.store('cart').checkout = false;
                }
            };
        }
    </script>
</head>

<body class="bg-amber-50/40 text-gray-800 min-h-screen">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center gap-3">

            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.jpg') }}"
                     alt="شعار عسل إسراء الملكي"
                     class="w-12 h-12 sm:w-14 sm:h-14 object-cover rounded-full border-2 border-amber-500 shadow-md">

                <div>
                    <h1 class="text-base sm:text-xl font-extrabold text-amber-900"
                        x-text="lang === 'ar' ? 'عسل إسراء الملكي' : 'Esraa Royal Honey'">
                    </h1>

                    <p class="text-[10px] sm:text-xs text-amber-700 font-semibold"
                       x-text="lang === 'ar' ? 'منتجات خلية النحل الطبيعية' : 'Natural Beehive Products'">
                    </p>
                </div>
            </div>

            <button type="button"
                    @click="toggleLang()"
                    class="bg-amber-100 hover:bg-amber-200 text-amber-900 px-3 sm:px-4 py-2 rounded-lg text-xs sm:text-sm font-bold transition border border-amber-300 shadow-sm">

                <span x-text="lang === 'ar' ? 'English' : 'عربي'"></span>

            </button>
        </div>
    </header>

    <main x-data="beeProductsPage()" class="max-w-7xl mx-auto px-4 py-7 sm:py-10 space-y-7 sm:space-y-9">

        <section class="honey-banner rounded-3xl border-2 border-amber-500/40 shadow-xl px-5 py-7 sm:py-9 text-center">

            <h2 class="text-2xl sm:text-3xl font-extrabold text-amber-200"
                x-text="lang === 'ar' ? 'منتجات خلية النحل' : 'Beehive Products'">
            </h2>

            <p class="text-amber-100 text-sm mt-2"
               x-text="lang === 'ar' ? 'تعرّف على منتجاتنا واختر الكمية المناسبة لك.' : 'Explore our products and choose the quantities you need.'">
            </p>

        </section>

        <section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">

            <template x-for="product in products" :key="product.id">

                <article class="product-card bg-white rounded-2xl sm:rounded-3xl border-2 border-amber-200 p-2.5 sm:p-3 shadow-md flex flex-col">

                    <h3 class="text-center text-sm sm:text-base font-extrabold text-amber-900 px-1 pb-2 min-h-[48px] flex items-center justify-center"
                        x-text="lang === 'ar' ? product.nameAr : product.nameEn">
                    </h3>

                    <img :src="product.image"
                         :alt="lang === 'ar' ? product.nameAr : product.nameEn"
                         loading="lazy"
                         class="w-full aspect-[4/3] object-cover rounded-xl sm:rounded-2xl bg-amber-50">

                    <div class="mt-3 space-y-2 flex-1">

                        <template x-for="(option,index) in product.options" :key="product.id + '-' + index">

                            <div class="rounded-xl bg-amber-50 border border-amber-200 p-2 flex flex-col gap-2">

                                <div class="flex items-center justify-between gap-1">

                                    <span class="text-xs sm:text-sm font-bold text-amber-900"
                                          x-text="(lang === 'ar' ? option.size : option.sizeEn) || (lang === 'ar' ? 'عبوة واحدة' : 'Single item')">
                                    </span>

                                    <span class="text-[11px] sm:text-xs font-extrabold text-amber-800"
                                          x-text="option.price + (lang === 'ar' ? ' ليرة جديدة' : ' new SYP')">
                                    </span>

                                </div>

                                <div class="flex items-center justify-center gap-3">

                                    <button type="button"
                                            @click="if(option.qty > 0) option.qty--"
                                            class="w-8 h-8 rounded-lg bg-white text-amber-900 border border-amber-200 font-extrabold">
                                        −
                                    </button>

                                    <span class="w-7 text-center text-sm font-extrabold"
                                          x-text="option.qty">
                                    </span>

                                    <button type="button"
                                            @click="option.qty++"
                                            class="w-8 h-8 rounded-lg bg-amber-800 text-white font-extrabold">
                                        +
                                    </button>

                                </div>
                            </div>

                        </template>

                    </div>
                </article>

            </template>

        </section>

        <!-- شريط ملخص المنتجات المختارة -->
        <section class="fixed bottom-[70px] left-0 right-0 z-40 px-3"
                 x-show="selectedCount > 0">

            <div class="max-w-3xl mx-auto rounded-2xl bg-white/95 backdrop-blur border border-amber-300 shadow-xl px-4 py-3 flex items-center justify-between gap-3">

                <div>
                    <p class="text-xs text-gray-500"
                       x-text="lang === 'ar' ? 'القطع المختارة والمجموع' : 'Selected items and total'">
                    </p>

                    <p class="font-extrabold text-amber-900 text-sm sm:text-base">
                        <span x-text="selectedCount"></span>
                        —
                        <span x-text="selectedTotal + (lang === 'ar' ? ' ليرة جديدة' : ' new SYP')"></span>
                    </p>
                </div>

                <button type="button"
                        @click="addSelectedToCart()"
                        class="bg-amber-800 hover:bg-amber-900 text-white font-extrabold rounded-xl px-4 py-3 text-xs sm:text-sm"
                        x-text="lang === 'ar' ? 'إضافة إلى السلة' : 'Add to Cart'">
                </button>

            </div>
        </section>

    </main>

    <footer class="bg-amber-950 text-amber-200 py-5 text-center text-xs sm:text-sm mt-10 mb-20">

        <p x-text="lang === 'ar' ? 'جميع الحقوق محفوظة © عسل إسراء الملكي 2026' : 'All Rights Reserved © Esraa Royal Honey 2026'"></p>

    </footer>

    <!-- شريط التنقل السفلي الثابت -->
    <nav class="fixed bottom-0 left-0 right-0 z-[70] bg-white/95 backdrop-blur border-t border-amber-300 shadow-[0_-4px_16px_rgba(120,53,15,.12)]">

        <div class="max-w-4xl mx-auto grid grid-cols-4 gap-1 px-2 py-2 text-center">

            <a href="{{ url('/') }}" class="rounded-xl px-1 py-2 text-amber-900 hover:bg-amber-50 text-xs sm:text-sm font-bold">
                <span class="block text-lg">⌂</span>
                <span x-text="lang === 'ar' ? 'الرئيسية' : 'Home'"></span>
            </a>

            <a href="{{ url('/honey-types') }}" class="rounded-xl px-1 py-2 text-amber-900 hover:bg-amber-50 text-xs sm:text-sm font-bold">
                <span class="block text-lg">🍯</span>
                <span x-text="lang === 'ar' ? 'أنواع العسل' : 'Honey Types'"></span>
            </a>

            <a href="{{ url('/bee-products') }}" class="rounded-xl px-1 py-2 text-amber-900 hover:bg-amber-50 text-xs sm:text-sm font-bold">
                <span class="block text-lg">🐝</span>
                <span x-text="lang === 'ar' ? 'منتجات الخلية' : 'Bee Products'"></span>
            </a>

            <button type="button"
                    @click="$store.cart.isOpen = true; $store.cart.checkout = false"
                    class="relative rounded-xl px-1 py-2 text-amber-900 hover:bg-amber-50 text-xs sm:text-sm font-bold">

                <span class="block text-lg">🛒</span>
                <span x-text="lang === 'ar' ? 'السلة' : 'Cart'"></span>

                <span x-show="$store.cart.count > 0"
                      x-text="$store.cart.count"
                      class="absolute top-0 right-1/2 translate-x-7 -translate-y-1 bg-red-600 text-white text-[10px] min-w-5 h-5 px-1 rounded-full flex items-center justify-center">
                </span>

            </button>

        </div>
    </nav>

    <!-- نافذة السلة وإتمام الطلب المشتركة -->
    <div x-show="$store.cart.isOpen"
         x-cloak
         class="fixed inset-0 z-[100] flex items-end sm:items-center justify-center"
         style="display:none">

        <div class="absolute inset-0 bg-black/50"
             @click="$store.cart.isOpen = false">
        </div>

        <section class="relative bg-white w-full sm:max-w-2xl max-h-[92vh] overflow-y-auto rounded-t-3xl sm:rounded-3xl shadow-2xl p-4 sm:p-6"
                 dir="auto">

            <div class="flex items-center justify-between gap-3 border-b border-amber-100 pb-3 mb-4">

                <h2 class="text-xl font-extrabold text-amber-900"
                    x-text="lang === 'ar' ? 'سلة المشتريات' : 'Shopping Cart'">
                </h2>

                <button type="button"
                        @click="$store.cart.isOpen = false"
                        class="w-9 h-9 rounded-full bg-amber-50 text-amber-900 font-bold">
                    ✕
                </button>

            </div>

            <template x-if="$store.cart.items.length === 0">
                <p class="text-center text-gray-500 py-8"
                   x-text="lang === 'ar' ? 'السلة فارغة حالياً.' : 'Your cart is empty.'">
                </p>
            </template>

            <div class="space-y-3"
                 x-show="$store.cart.items.length > 0">

                <template x-for="item in $store.cart.items" :key="item.id">

                    <div class="border border-amber-100 rounded-2xl p-3 flex flex-col sm:flex-row sm:items-center justify-between gap-3">

                        <div class="min-w-0">

                            <p class="font-extrabold text-amber-900"
                               x-text="lang === 'ar' ? (item.nameAr || item.nameEn) : (item.nameEn || item.nameAr)">
                            </p>

                            <p class="text-xs text-gray-500"
                               x-text="lang === 'ar' ? (item.variantAr || '') : (item.variantEn || item.variantAr || '')">
                            </p>

                            <p class="text-sm font-bold text-amber-700"
                               x-text="(item.price * item.qty) + (lang === 'ar' ? ' ليرة جديدة' : ' new Syrian pounds')">
                            </p>

                        </div>

                        <div class="flex items-center gap-2">

                            <button type="button"
                                    @click="$store.cart.decrease(item.id)"
                                    class="w-8 h-8 rounded-lg bg-amber-100 text-amber-900 font-extrabold">
                                −
                            </button>

                            <span class="w-7 text-center font-bold"
                                  x-text="item.qty">
                            </span>

                            <button type="button"
                                    @click="$store.cart.increase(item.id)"
                                    class="w-8 h-8 rounded-lg bg-amber-700 text-white font-extrabold">
                                +
                            </button>

                            <button type="button"
                                    @click="$store.cart.remove(item.id)"
                                    class="text-red-600 text-xs font-bold px-2"
                                    x-text="lang === 'ar' ? 'حذف' : 'Remove'">
                            </button>

                        </div>

                    </div>

                </template>

            </div>

            <div class="mt-4 border-t border-amber-100 pt-4 flex items-center justify-between gap-3">

                <span class="font-bold text-gray-700"
                      x-text="lang === 'ar' ? 'المجموع الكلي' : 'Grand Total'">
                </span>

                <strong class="text-xl text-amber-800"
                        x-text="$store.cart.total + (lang === 'ar' ? ' ليرة جديدة' : ' new Syrian pounds')">
                </strong>

            </div>

            <div class="mt-4"
                 x-show="$store.cart.items.length > 0 && !$store.cart.checkout">

                <button type="button"
                        @click="$store.cart.checkout = true"
                        class="w-full rounded-xl bg-amber-800 hover:bg-amber-900 text-white font-extrabold py-3"
                        x-text="lang === 'ar' ? 'متابعة لإتمام الطلب' : 'Continue to Checkout'">
                </button>

            </div>

            <div x-show="$store.cart.checkout"
                 x-cloak
                 class="mt-5 border-t border-amber-100 pt-4 space-y-3">

                <h3 class="font-extrabold text-amber-900"
                    x-text="lang === 'ar' ? 'بيانات التوصيل والدفع' : 'Delivery & Payment Details'">
                </h3>

                <label class="block text-sm font-bold text-gray-700">
                    <span x-text="lang === 'ar' ? 'الاسم الكامل' : 'Full Name'"></span>
                    <input type="text"
                           x-model="$store.cart.customer.name"
                           required
                           class="mt-1 w-full border border-amber-200 rounded-xl p-3 outline-none focus:border-amber-500">
                </label>

                <label class="block text-sm font-bold text-gray-700">
                    <span x-text="lang === 'ar' ? 'رقم الهاتف' : 'Phone Number'"></span>
                    <input type="tel"
                           x-model="$store.cart.customer.phone"
                           required
                           class="mt-1 w-full border border-amber-200 rounded-xl p-3 outline-none focus:border-amber-500">
                </label>

                <label class="block text-sm font-bold text-gray-700">
                    <span x-text="lang === 'ar' ? 'عنوان التوصيل بالتفصيل' : 'Delivery Address'"></span>
                    <textarea x-model="$store.cart.customer.address"
                              required
                              rows="2"
                              class="mt-1 w-full border border-amber-200 rounded-xl p-3 outline-none focus:border-amber-500"></textarea>
                </label>

                <label class="block text-sm font-bold text-gray-700">
                    <span x-text="lang === 'ar' ? 'طريقة الدفع' : 'Payment Method'"></span>
                    <select x-model="$store.cart.customer.payment"
                            class="mt-1 w-full border border-amber-200 rounded-xl p-3 bg-white outline-none focus:border-amber-500">
                        <option value="shamcash">شام كاش</option>
                        <option value="cod">الدفع عند الاستلام</option>
                    </select>
                </label>

                <button type="button"
                        @click="$store.cart.sendToWhatsApp()"
                        class="w-full rounded-xl bg-green-700 hover:bg-green-800 text-white font-extrabold py-3"
                        x-text="lang === 'ar' ? 'إرسال تفاصيل الطلب عبر واتساب' : 'Send Order Details via WhatsApp'">
                </button>

                <p class="text-[11px] leading-relaxed text-gray-500"
                   x-text="lang === 'ar' ? 'سيُفتح واتساب برسالة جاهزة. راجع الرسالة ثم اضغط إرسال بنفسك لتأكيد الطلب.' : 'WhatsApp will open with a prepared message. Review it and press Send to confirm your order.'">
                </p>

                <button type="button"
                        @click="$store.cart.checkout = false"
                        class="text-amber-800 text-sm font-bold"
                        x-text="lang === 'ar' ? 'العودة إلى السلة' : 'Back to Cart'">
                </button>

            </div>

        </section>
    </div>

</body>
</html>