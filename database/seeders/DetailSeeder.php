<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            'book_id' => '1',
            'author' => 'Budi Raharjo',
            'publisher' => 'Informatika',
            'year' => 2022,
            'description' => 'Database (basis data) merupakan media untuk menyimpan data yang diperlukan oleh aplikasi, baik yang berjenis web, desktop, maupun aplikasi mobile. Meskipun database dapat dibuat menggunakan beberapa model, namun pada kenyataannya database dengan model relasional sampai saat ini masih menjadi yang terpopuler dan paling banyak digunakan. Dalam model relasional, data akan disimpan dalam bentuk tabel-tabel terpisah yang saling berelasi. Pengelolaan data di dalam database relasional dilakukan menggunakan perintah-perintah standar yang ditulis menggunakan bahasa SOL, singkatan dari Structured Cluery Language.
            MySOL adalah salah satu software yang berfungsi untuk membuat dan mengelola database dengan model relasional. Software seperti ini dikenal dengan Relational Database Management System (RDBMS). Dengan MySOL, kita dapat membuat dan merancang sendiri database secara mudah, sesuai kebutuhan aplikasi yang sedang dikembangkan.
            Buku ini akan memandu Anda dalam mempelajari SOL dan komponen-komponen penting di dalam MySOL untuk membuat database dan mengelola data yang terdapat di dalamnya. Selain buku ini juga menjelaskan tentang cara mengintegrasikan database yang sudah dibuat di dalam MySOL dengan aplikasi yang ditulis menggunakan bahasa pemrograman tertentu (Python, PHP. C# dan VB.NET).',
            'photo' => 'https://cdn.gramedia.com/uploads/items/Belajar_Otodidak_Mysql_Edisi_Kedua.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '2',
            'author' => 'Irwansyah Saputra, Dinar Ajeng Kristiyanti',
            'publisher' => 'Informatika',
            'year' => 2022,
            'description' => 'Mas irwansyah dan mbak Dinar, berhasil menjelaskan secara seimbang konsep dan praktik machine learning, dengan bahasa yang mudah dipahami bahkan oleh orang awam. Buku wajib bagi yang ingin belajar machine learning dari dasar.
            Romi Satria Wahono, M. Eng, Ph.D (Pakar IT dan CEO PT. Brainmatics Cipta Informatika)
            
            Sebuah buku yang sangat lengkap untuk belajar tentang Machine Learning dari konsep dasar, preprocessing, berbagai ragam algoritme pada Machine Learning, dan berbagai alat ukur untuk memvalidasi serta mengevaluasi algoritme pada Machine Learning yang diimplementasikan pada berbagai bidang. Bu Dinar dan Pak Irwansyah menuliskan dengan sangat runtun serta menggunakan Bahasa yang mudah dipahami bagi pembaca yang baru mengenal tentang Machine Learning. Buku ini juga menjadi istimewa karena cocok bagi para pembaca yang sedang belajar pemrograman Phyton untuk menyelesaikan permasalahan di lingkungan sekitar kita menggunakan Machine Learning. Setiap coding dilengkapi dengan penjelasan yang lengkap tentang fungsionalitasnya, sehingga bagi pembaca yang belum mengenal Bahasa pemrograman Phyton dapat akan lebih cepat memahami Bahasa pemrograman ini. Buku ini sangat luar biasa, sehingga saya sangat merekomendasikan kepada khalayak yang baru belajar tentang Machine Learning untuk membaca buku ini.
            Dr. Emy Setyaningsih, M. Kom (Institut Sains dan Teknologi, AKPRIND Yogyakarta)',
            'photo' => 'https://cdn.gramedia.com/uploads/items/Machine_Learning_Untuk_Pemula.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '3',
            'author' => 'Jubilee Enterprise',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2022,
            'description' => 'PHP merupakan pemrograman wajib bagi para web developer. Buku ini menjelaskan PHP dari dasar hingga pemrograman web berbasis database. Bahasan di dalam buku ini meliputi: Persiapan pemrograman PHP, Pengenalan terhadap variabel dan tipe data, Memanfaatkan array dalam pemrograman, Kondisional dan perulangan, Pengenalan function dan memanfaatkan built-in function pada PHP, Form dan pemrograman PHP, Pentingnya session dan cookies dalam pemrograman web, Pemrograman database, Mengenal berbagai macam query untuk database, Pengenalan user privilege dalam pemrograman database, Manajemen database, Pemrograman PHP berbasis object, Access Modifier, Method, dan Properties Buku ini menyediakan hampir sebagian besar teori yang Anda butuhkan untuk mengenal PHP dan segala kemampuannya. Dengan demikian, Anda bisa mengenali PHP secara cepat dan langsung mempraktikkannya untuk membuat aplikasi website.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/9786230030406_Cover_PHP_Edisi_Lengkap.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '4',
            'author' => 'Kisah Tanah Jawa',
            'publisher' => 'Gagas Media',
            'year' => 2022,
            'description' => 'Awalnya kami diminta untuk memperlebar jalan, tapi kemudian terjadi keanehan. Banyak dari para pekerja yang tiba-tiba seperti kerasukan; mereka menggaruk-garuk tanah sampai jari mereka terkelupas dan hancur. Mereka tidak berhenti sampai matahari terbenam atau mati.

            Kesaksian pribumi yang metarikan diri dari proyek pembangunan Jatan Raya Pos itu didengar oteh salah seorang eks prajurit VOC. Konon, prajurit itu tahu, bahwa kejadian mengerikan itu akibat ulah seorang tentara Betanda dengan sepengetahuan Daendels yang membawa kitab sihir dari Mesir ke Pulau Jawa.
            
            Setetah Pertempuran Sungai Nil 1798. Prancis terus berusaha mempertuas wilayahnya. termasuk Betanda. Louis Napoteon pun menunjuk Herman Willem Daendets untuk menjadi Gubernur Jenderat Hindia. Daendels tiba di Jawa pada 1.8o8 dan melakukan banyak perubahan radikaL Banyak raja daerah yang menolak kebijakannya. Akibatnya, bagi mereka yang menentang. malapetaka hadir. Salah satunya. Keraton Surosowan di Banten pun turut dihancurkan oleh Daendets. Apakah kekuatan besar Daendets itu terkait dengan hadirnya metafisika di seketilingnya?
            
            Sihir Mesir di Tanah Jawa menyajikan cerita fiksi itmiah, dengan berbagai fakta maba tatilMesir: Eropa, dan Jawa pada awal Daendels hadir di tanah Jawa. Kitab Black Pullet. Freemason. Kanuragan, Macan Putih, TumbaL dan cerita-cerita dari masa talu lainnya tetah membentuk peradaban. Sebuah upaya untuk mengenal tebih dekat tagi masa talu untuk cerita masa depan yang lebih baik.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/img20220520_15292681.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '5',
            'author' => 'Antje Babendererde',
            'publisher' => 'Bhuana Ilmu Populer',
            'year' => 2022,
            'description' => 'Selama empat belas tahun, Jacob yang amat merindukan sosok ayah di sisinya menelan mentah-mentah kebohongan sang ibu. Lalu kebenaran pun terungkap, ayahnya masih hidup dan berada di ujung dunia, di utara Kanada, di hutan belantara penuh salju dan es tak berujung. Dengan penuh amarah dan kekecewaan, Jacob mencari seorang diri. Namun, ia justru masuk ke dalam petualangan yang membawanya hingga ke titik antara hidup dan mati. Sebuah ujian untuk bertahan hidup di tengah ganasnya alam liar: suhu dingin yang esktrem, kelaparan yang amat sangat, hingga bertarung dengan hewan pemangsa. Perjalanan ini bukan sekadar mencari sang ayah. Ini lebih dari itu. Perjalanan ini akan menguak masa lalunya, akar kehidupannya, asal-usulnya. Bahkan, mampu membuatnya menemukan makna cinta yang selama ini ia cari.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/COVER_DEPAN_Snow_Dancer.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '6',
            'author' => 'Sheila Salsabiila',
            'publisher' => 'Andi Publisher',
            'year' => 2022,
            'description' => 'Raynard Pratama, remaja 17 tahun yang sering dianggap sempurna oleh teman-teman di sekolahnya. Namun siapa sangka, kalau sebenarnya Ia adalah seorang tunarungu. Memiliki kekurangan membuat Ray berbeda dengan remaja lainnya, bahkan ia sempat menyerah dengan mimpinya.

            "Gue bukannya nggak bisa denger. Gue cuma denger apa yang gue mau denger, dan gue denger itu semua lewat mata dan hati." - Raynard.
            
            Namun, Kiera Shafia, gadis pecinta astronomi yang membuat Ray jatuh cinta, mampu membangkitkan semangat cowok itu. Kata-kata yang keluar dari bibir mungil Kiera selalu mampu membuat Ray terkesan. Mereka pun harus berjuang di penghujung masa SMA, membuat prestasi, kenangan, serta perpisahan.
            
            "Bintangnya juga nggak terlalu suka tempat ramai. Kalau di tempat ramai, bintangnya jadi nggak menonjol. Kalau di tempat sepi, bintang jadi satu-satunya objek yang paling indah. Jadi, bintang sama kayak lo, sama-sama nggak suka tempat ramai." - Kiera
            
            Ini adalah kehidupan romansa seorang remaja tunarungu, mengenai bintang-bintang, dan kenangan saat masa putih abu-abu',
            'photo' => 'https://cdn.gramedia.com/uploads/items/Summer_Triangle.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '7',
            'author' => 'Ruta Sepetys',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2018,
            'description' => 'Takdir mempertemukan keempatnya di Wihelm Gustoff, kapal megah yang menjadi tempat mereka menggantungkan harapan bersama lebih dari sepuluh ribu penumpang lainnya.
            Tapi sebelum kebebasan sempat diraih, tragedy besar pun terjadi. Tak peduli dari Negara mana mereka berasal dan status apa yang mereka sandang, ribuan penumpang kapal harus berjuang keras melakukan satu hal: bertahan hidup.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/9786020454153_Salt-To-The-Sea.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '8',
            'author' => 'Leroy Thompson',
            'publisher' => 'Frontline Books',
            'year' => 2019,
            'description' => '\'Offers key insights into the commando\'s mind.\' Warfare magazine It is easy to visualise special-operations troops as men in camouflage with painted faces, lurking in the shadows of modern warfare. But the truth is far more complex - and enthralling. This book shows the remarkable array of skills required to be one of the world\'s fighting elite, detailing the equipment he uses to carry out his missions and the techniques he employs. Learn how to select a drop zone for parachute insertions. Find out how combat swimmers launch from submarines to carry out beach reconnaissance prior to an invasion. Understand the knowledge required to fight and, more importantly, survive in such hostile environments as jungle, desert or mountain. Discover how today\'s special operative must master skills as diverse as horsemanship and computing, or how to kill silently with a knife or laser designator. Written by a leading authority in the field, this well-organised illustrated guide shows exactly what makes the specialist soldier so very \'special\'. This is a must-have for anyone interested in the covert world of elite forces.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/9781848328242-edit.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '9',
            'author' => 'Anthony Doerr',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2019,
            'description' => 'Marie-Laure tinggal di Paris di dekat Museum Sejarah Nasional, tempat ayahnya bekerja. Ketika Marie-Laure berusia dua belas tahun, tentara Nazi mengambil alih Paris, memaksa ayah dan anak itu melarikan diri ke Saint-Malo, ke rumah adik-kakek Marie-Laure, Etienne. Bersama dengan kaburnya ke Saint-Malo, mereka membawa satu benda yang amat berharga, yang harus dijaga dari para Nazi. Di sebuah kota tambang di Jerman, Werner Pfenning, seorang yatim piatu, yang tumbuh besar bersama adik perempuannya. Mereka senang mendengarkan radio, yang membawakan berita dan cerita dari tempat-tempat yang belum pernah mereka dengar. Werner akhirnya menjadi ahli dalam bidang bangunan dan perbaikan instrumen lalu didaftarkan untuk melacak pemberontakan. Dengan menghubungkan kehidupan Marie-Laure dan Werner, Doerr menjelaskan bahwa bagaimanapun, manusia akan berusaha untuk bersikap baik kepada sesama.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/9786230008146_All_The_Light_We_Cannot_See.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '10',
            'author' => 'Sophie Kinsella',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2022,
            'description' => 'Menurut Ava, cinta harus ditemukan di dunia nyata, bukannya pada filter aplikasi kencan yang mengatur tinggi cowok, pekerjaan, hobi, dan sebagainya. Ava memutuskan undur diri sejenak dari ingar bingar hidup serta cinta, lalu mengikuti retret menulis di tempat terpencil yang indah di Italia. Semua peserta memakai nama samaran dan tidak saling mengungkap kehidupan pribadi. Di sana, Ava yang memakai nama Aria bertemu cowok yang nyaris sempurna, Dutch, salah satu peserta retret bela diri yang dibatalkan dan masuk ke retret menulis. Mereka menjalin hubungan tanpa bawa-bawa masa lalu. Segalanya terasa tepat. Namun, Ava dan Matt harus kembali ke kehidupan nyata. Selagi fantasi memudar, mereka menyadari bahwa hidup mereka sangat bertolak belakang. Mulai dari perbedaan makanan kesukaan, kebiasaan yang menyebalkan, dan banyak hal lain yang nyatanya sulit ditoleransi. Belum lagi mantan pacar Matt yang masih “berkeliaran”. Ava sadar kehidupan memunculkan filternya sendiri. Walau mereka saling mencintai, tampaknya mereka tidak bisa saling mencintai kehidupan yang lain. Bisakah mereka bertahan? Ataukah lebih baik menyerah?',
            'photo' => 'https://cdn.gramedia.com/uploads/items/Love_Your_Life_cov.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '11',
            'author' => 'Min Jin Lee',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2022,
            'description' => 'Saat itu kolonisasi Jepang atas Korea. Kim Sunja hamil di luar nikah. Ia putri pemilik pemondokan di desa nelayan kecil dekat Busan. Gadis itu diselamatkan takdir ketika rohaniwan muda, Baek Isak, bersedia menikahi dan memboyongnya ke Jepang. Di negeri asing tempat para imigran Korea menggantungkan harapan inilah Sunja memulai kehidupan baru. Tanpa teman, kerabat, dan bahasa yang dimengertinya, ditambah lagi masalah diskriminasi, Sunja harus menghadapi kehidupan keras.
            Jepang ternyata bukanlah surga. Jepang bukan juga tempat yang damai dan penuh kesempatan seperti yang digembor-gemborkan. Dituturkan dalam rentang waktu delapan puluh tahun dan empat generasi, Pachinko merupakan kisah yang luar biasa mengenai cinta, pencarian identitas sebagai manusia, kematian, dan cara bertahan hidup.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/Pachinko_cov_1.jpg'
        ]);

        DB::table('details')->insert([
            'book_id' => '12',
            'author' => 'Deti Azmi',
            'publisher' => 'Gramedia Widiasarana Indonesia',
            'year' => 2022,
            'description' => 'Novel ini bukanlah kisah Cinderella yang kehilangan sepatu kaca, ketika sang pangeran menjemput sang putri dan memberikan sebelah sepatu yang tertinggal di peasta dansa. Namun, ini kisah Amora yang kehilangan sebelah sepatu Converses barunya karena tertukar dengan milik orang lain. Namanya Amora Olivia, cewek biasa yang tengah bahagia karena baru saja membeli sepatu baru dengan uang yang susah payah ia tabung sebulan ini. Dan kini sebelah sepatu kebanggaannya itu harus tertukar dengan sebelah sepatu butu yang ukurannya lebih besar dari sepatu miliknya. Sumpah serapah Amora keluarkan saat mencari sebelah sepatunya, bahkan Amora nekat berteriak di koridor sekolah hanya untuk sebelah sepatu. Namun, bukannya mendapatkan kembali sebelah sepatunya, Amora justru harus mendekam di ruang BK karena sudah berurusan dengan sosok Adam Wijaya, sang ketua OSIS yang dikenal angkuh. Dan, drama oun dimulai sesudahnya. Hingga menyeret Amora dan teman-teman sekelasnya masuk ke permasalahan melawan Adam Wijaya beserta antek-anteknya. Bukan Cinderella memang tidak mirip dongen klasik yang terkenal ,cuma berkisah seorang gadis bernama Amora yang kehilangan sepatu barunya dan ternyata sepatunya itu dipakai oleh ketua OSIS, Adam Wijaya. Dengan alur cerita maju, novel ini memiliki isi buku yang jelas alurnya dan sangat rinci dari mulai kisah di SMA sampai kisah setelah lulus SMA dan mudah dimengerti.',
            'photo' => 'https://cdn.gramedia.com/uploads/items/cover_bukan_cinderella_Best_Seller_Alternatif-1.jpg'
        ]);
    }
}
