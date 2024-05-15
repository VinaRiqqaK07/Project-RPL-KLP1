<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ID Categories
        $categoryIDMakanan  = DB::table('categories')->where('name', 'Makanan')->value('id');
        $categoriesIDSnack = DB::table('categories')->where('name', 'Snack')->value('id');
        $categoriesIDMinuman = DB::table('categories')->where('name', 'Minuman')->value('id');

        //ID Discount
        $discIdFitri = DB::table('discounts')->where('name', 'Diskon Idul Fitri')->value('id');
        $discPelajar = DB::table('discounts')->where('name', 'Diskon Pelajar')->value('id');

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMakanan,
            'name' => 'Bakso FM Komplit',
            'price' => 22000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Sajian bakso lengkap dengan kombinasi bakso campur, bakso halus, dan bakso kasar, disajikan dalam kuah kaldu yang kaya rasa.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMakanan,
            'name' => 'Bakso FM Biasa',
            'price' => 19000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Pilihan untuk pecinta bakso yang lebih sederhana dengan pilihan bakso campur, bakso halus, atau bakso kasar, disajikan dalam kuah yang gurih.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMakanan,
            'name' => 'Bakmi Ayam Bakso FM',
            'price' => 25000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kombinasi lezat dari mie ayam dengan tambahan bakso FM dalam kuah yang hangat dan mengenyangkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMakanan,
            'name' => 'Bakmi Ayam',
            'price' => 19000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Mie ayam klasik yang disajikan dengan kuah hangat dan topping ayam suwir yang gurih.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMakanan,
            'name' => 'Nasi Ayam Goreng',
            'price' => 25000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Nasi hangat disajikan bersama ayam goreng krispi, dilengkapi dengan sambal yang pedas dan sup ayam yang lezat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
            DB::table('menus')->insert([
            'categories_id' => $categoryIDMakanan,
            'name' => 'Buras',
            'price' => 3000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Makanan tradisional Sulawesi Selatan yang terbuat dari beras yang dikukus dalam daun pisang, memberikan cita rasa unik dan khas.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Bakso Crispy',
            'price' => 22000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Bakso dengan balutan tepung yang digoreng hingga krispi, snack gurih yang cocok dijadikan pendamping makan Anda.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Tahu Gembul',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Tahu yang digoreng hingga luar krispi dengan isian yang lezat, disajikan panas.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Ubi Goreng',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Ubi manis yang dipotong dan digoreng hingga keemasan, menyajikan rasa manis alami dan tekstur yang renyah.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Kentang Goreng',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kentang yang dipotong dan digoreng sempurna, disajikan dengan berbagai saus.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Potato Wedges',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kentang potong besar yang dibumbui dan digoreng hingga keemasan, snack lezat yang pas disandingkan dengan saus.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Bakwan',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Campuran sayuran dan tepung yang digoreng, memberikan rasa yang gurih dan tekstur yang renyah.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Pangsit FM',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Pangsit goreng dengan isian daging giling khas Faaz Matraz, gurih dan renyah.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDSnack,
            'name' => 'Kerupuk Pangsit',
            'price' => 5000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kerupuk yang renyah dengan rasa gurih, cocok sebagai pelengkap atau camilan ringan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Air Botol Kecil',
            'price' => 4000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Pilihan air minum dalam botol yang praktis dan menyegarkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Air Botol Sedang',
            'price' => 5000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Pilihan air minum dalam botol yang praktis dan menyegarkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Es Cincau',
            'price' => 10000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman segar cincau hitam dengan sirup gula yang manis, sempurna untuk diminum di hari yang panas.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Teh Panas',
            'price' => 6000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh yang diseduh sempurna dengan rasa dan aroma yang kaya.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Milo Panas',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman coklat panas dengan rasa Milo khas yang nikmat, memberikan energi di saat dibutuhkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Teh Tarik Panas',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh susu yang kental dan manis, disajikan panas dengan busa yang lembut.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Hot Chocolate',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Coklat panas yang kaya akan rasa coklat, sempurna untuk penghangat badan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Hot Lemon Tea',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh panas dengan perasan lemon segar, menawarkan rasa yang menyegarkan dengan sentuhan citrus.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Hot Thai Tea',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh Thai yang khas dengan rasa manis dan creamy, disajikan panas untuk kehangatan yang nyata.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Hot Greentea',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh hijau yang diseduh dengan sempurna, memberikan rasa yang halus dan manfaat kesehatan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Kopi Gula Aren Panas',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kopi hitam dengan tambahan gula aren yang memberikan rasa manis alami dan aroma yang menggoda.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Hot Mochacino',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Campuran kopi dan cokelat yang lezat dengan sentuhan susu, memberikan kesegaran dan kehangatan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Hot Cappucino',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Cappuccino klasik dengan susu dan aroma kopi yang kuat, sempurna untuk penggemar kopi.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);



        /**
        * MENU POTERS */

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Lotus',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman ini menampilkan keharuman dan rasa bunga lotus yang menenangkan, disajikan dingin untuk kesegaran maksimal.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Nutella',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Nikmati rasa hazelnut cokelat yang kaya dari Nutella yang diaduk sempurna menjadi minuman manis dan creamy.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Vanilla Oreo',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kombinasi vanila yang lembut dan biskuit Oreo yang renyah menjadikan minuman ini pilihan yang sempurna untuk penggemar vanila dan cokelat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Cokelat Oreo',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman ini menggabungkan biskuit Oreo yang renyah dengan cokelat pekat, memberikan sensasi rasa yang manis dan memikat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Regal Brown Sugar',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kesejukan brown sugar dan biskuit Regal yang ikonik menciptakan minuman manis dengan sentuhan karamel yang nikmat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Taro Oreo',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Paduan unik dari rasa taro yang khas dengan potongan biskuit Oreo, memberikan tekstur dan rasa yang menarik.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Red Velvet Oreo',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Rasa kue red velvet yang lembut dan biskuit Oreo membuat kombinasi yang mewah dan penuh cita rasa.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Chocolate',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Nikmati kekayaan rasa cokelat murni yang diolah dengan sempurna untuk menyajikan minuman cokelat klasik yang menggugah selera.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Milo Dino',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Sebuah sajian yang menggiurkan dari Milo dengan tambahan topping Milo serbuk yang melimpah, cocok untuk penggemar cokelat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Hazelnut',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman ini menawarkan rasa kacang hazelnut yang gurih dan manis, diaduk menjadi sajian yang halus dan menyenangkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Red Velvet',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Sajian ini membawa kelezatan kue red velvet dalam bentuk minuman, dengan rasa krim keju yang lembut dan cokelat yang halus.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Taro',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman beraroma taro ini menawarkan rasa yang manis, dihidangkan dingin untuk kesegaran yang maksimal.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Orange Frizzy',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman berkarbonasi dengan rasa jeruk yang segar dan menyegarkan, sempurna untuk dinikmati di hari yang panas.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Lime Frizzy',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Nikmati kesegaran lime dalam minuman berkarbonasi yang memberikan sensasi menyegarkan dan menstimulasi.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Markisa Frizzy',
            'price' => 12000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Sajian eksotis dengan rasa markisa yang tajam dan menyegarkan, ditambah sensasi berkarbonasi yang membuat minuman ini semakin spesial.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Es Teh',
            'price' => 6000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh yang diseduh sempurna kemudian didinginkan, memberikan kesegaran alami pada setiap tegukan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Teh Tarik',
            'price' => 15000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh dengan susu yang disajikan dengan cara ditarik, menciptakan buih yang lembut dan rasa yang kaya.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Lemon Tea',
            'price' => 15000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Perpaduan teh dan lemon yang menyegarkan, menyajikan rasa asam manis yang khas dan menyegarkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Thai Tea',
            'price' => 15000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh asal Thailand yang kaya dengan rempah, memberikan rasa manis dan creamy yang khas dan memikat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Green Tea',
            'price' => 15000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Teh hijau yang kaya antioksidan, disajikan hangat atau dingin, menyajikan kesegaran dan kesehatan dalam setiap tegukan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Coffee Caramel',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kopi yang kaya akan aroma, disempurnakan dengan sirup karamel untuk kesan manis dan lembut yang menggoda.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Coffee Hazelnut',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kopi dengan tambahan rasa hazelnut yang nikmat, menciptakan perpaduan kopi yang gurih dan aroma yang memikat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Mochaccino',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Minuman kopi yang kaya cokelat, memberikan kombinasi rasa moka yang lembut dan krim yang kaya.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Kopi Gula Aren',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kopi dengan tambahan gula aren yang memberikan rasa manis alami dan aroma khas yang menenangkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Cappuccino',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Kopi dengan susu, dihidangkan dengan taburan cokelat atau kayu manis untuk tambahan rasa yang kaya.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Avocado',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Smoothie alpukat yang kaya dan creamy, disajikan dingin, sempurna sebagai penyegar atau pendamping makan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Mango',
            'price' => 17000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Jus mangga segar yang kaya rasa dan manis, diproses dari buah mangga pilihan yang matang sempurna.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('menus')->insert([
            'categories_id' => $categoryIDMinuman,
            'name' => 'Jus Jeruk',
            'price' => 10000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Nikmati kesegaran alami dari jus jeruk yang diperas langsung, penuh dengan vitamin C dan rasa yang menyegarkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
