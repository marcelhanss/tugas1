<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('catalogs')->insert([
            [
                'title' => 'Atomic Habits',
                'description' => 'People think that when you want to change your life, you need to think big. But world-renowned habits expert James Clear has discovered another way. He knows that real change comes from the compound effect of hundreds of small decisions: doing two push-ups a day, waking up five minutes early, or holding a single short phone call.
                He calls them atomic habits.
                In this ground-breaking book, Clears reveals exactly how these minuscule changes can grow into such life-altering outcomes. He uncovers a handful of simple life hacks (the forgotten art of Habit Stacking, the unexpected power of the Two Minute Rule, or the trick to entering the Goldilocks Zone), and delves into cutting-edge psychology and neuroscience to explain why they matter. Along the way, he tells inspiring stories of Olympic gold medalists, leading CEOs, and distinguished scientists who have used the science of tiny habits to stay productive, motivated, and happy.
                These small changes will have a revolutionary effect on your career, your relationships, and your life.',
                'image' => 'catalog/atomic.avif', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ],
            [
                'title' => 'The Power of Habit',
                'description' => 'Kebiasaan atau sikap yang rutin dilakukan oleh manusia dapat mengantarkan mereka kepada “siapa diri mereka” di masa depan. Segala sesuatu yang kita pikirkan, katakan, dan lakukan adalah hasil dari kebiasaan mendalam yang tertanam dalam benak kita selama bertahun-tahun.
                Membentuk kebiasaan baik bukan hal yang sulit dilakukan. Ketepatan waktu, wawasan luas terhadap bidang yang dikerjakan, hingga tak pernah mengeluh saat diberi tugas adalah contoh kebiasaan baik yang bisa dengan mudah dilakukan. Meski demikian, untuk memulainya, butuh usaha yang tak sedikit.
                Memiliki kebiasaan baik adalah salah satu cara untuk menaikkan karier. Dengan membentuk kebiasaan baik, atasan secara tidak langsung akan melihat bagaimana pekerjaan Anda. Pengamatan tersebut bisa saja bermanfaat untuk karier Anda.
                Namun, seperti yang sudah diterangkan di atas. Membentuk kebiasaan baik bukan hal yang mudah. Anda tak hanya harus bekerja keras untuk memulainya, tapi juga mengorbankan banyak hal. Mulai dari komunikasi dengan sesama rekan kerja yang bisa saja berkurang hingga kemungkinan waktu bermain yang semakin sedikit.',
                'image' => 'catalog/timun.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Deep Work',
                'description' => 'Deep Work—Kesungguhan Kerja—adalah aktivitas profesional yang dilakukan pada keadaan konsentrasi bebas-gangguan, yang mendorong kemampuan kognitif Anda hingga batasnya. Upaya ini menciptakan nilai baru, meningkatkan kemahiran Anda, dan sulit ditiru. Kesungguhan kerja dibutuhkan untuk memeras setiap tetes nilai terakhir dari kapasitas intelektual Anda saat ini. Berdasarkan riset dalam bidang psikologi dan neurosains selama puluhan tahun, kita sekarang paham bahwa tekanan mental yang hadir saat bekerja secara sungguh-sungguh juga diperlukan untuk meningkatkan kemampuan Anda. Tumbuhnya kebutuhan deep work atau kesungguhan kerja adalah hal baru. Dalam ekonomi industri, hanya sebagian kecil dari pekerjaan terampil dan profesional yang sangat membutuhkan kesungguhan kerja, sedangkan sebagian besar pekerjaan dapat dilakukan dengan baik tanpa perlu membangun kemampuan berkonsentrasi tanpa gangguan. Mereka dibayar untuk memutar perkakas—dan tidak banyak yang berubah dari pekerjaan tersebut dalam beberapa dekade. Namun, seiring peralihan ke arah ekonomi informasi, semakin banyak yang menjadi pekerja intelektual, dan kesungguhan kerja menjadi kunci utama—walaupun sebagian besar orang belum menyadari kenyataan ini. Dengan kata lain, kesungguhan kerja bukanlah keterampilan kuno yang tidak relevan. Ini adalah kemampuan penting bagi siapa pun yang ingin maju dalam kompetisi global dunia ekonomi informasi yang cenderung menyesap sari pati dan memuntahkan sepahnya, yaitu kalangan yang tak mampu memperbarui kemampuan mereka.',
                'image' => 'catalog/Cover_Deep_Work.avif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Belajar Marketing Belajar Hidup',
                'description' => '"ILMU MARKETING BISA MENJADI ILMU KEHIDUPAN? Sangat bisa, menurut Henry Manampiring, Penulis Mega Bestseller Filosofi Teras dan The Alpha Girl’s Guide. Sesudah berkarier seperempat abad dalam dunia Marketing, Advertising, dan Komunikasi Merek, penulis menemukan banyak prinsip Marketing yang bisa membantu kita lebih efektif di dalam meraih cita, cinta, dan memenangkan persaingan hidup. Belajar Marketing, Belajar Hidup (mungkin) adalah yang pertama menggabungkan topik Marketing dan pengembangan diri dalam satu buku yang mudah dibaca oleh semua orang. Konsep-konsep fundamental seperti Positioning, Reach, 4P, konsep mutakhir seperti mental availability dan distinction, sampai mitos-mitos Kesetiaan Pelanggan dan Brand Purpose, semua dibahas dalam bahasa sederhana dan humoris, dengan contoh-contoh penerapan yang mudah dimengerti, tidak hanya oleh brand, tetapi juga dalam kehidupan kita sehari-hari. Buku ini cocok untuk pelajar, mahasiswa/i, profesional muda yang tertarik pada dunia Marketing, praktisi Marketing yang sudah berpengalaman tapi dan ingin me-refresh pengetahuannya, dan siapa pun yang ingin hidup lebih mengembangkan diri menjadi pribadi yang efektif." Selling Point: - "Menggabungkan 2 genre, marketing dan self improvement. Bukan buku bisnis secara spesifik, tapi kombinasi. Melihat hidup dari sisi Pemasaran. Pemasaran (branding) tidak hanya untuk produk, bisa juga untuk memasarkan diri sendiri" - "(Beginner) Tanpa memiliki background/ilmu ekonomi & pemasaran, pembaca masih dapat mengerti isi buku ini karena dikupas menggunakan bahasa sehari-hari disertai contoh dari pribadi penulis (Intermediate) Buku ini bisa digunakan sebagai pengingat/refresh memori pembaca yang sudah berpengalaman di marketing tentang penerapan ilmu ini ke diri sendiri" - Berisi ilmu, berisi cerita, berisi curhatan, berisi ocehan/omelan, dapat relate dengan kehidupan sehari-hari. - Pendekatan ilmiah dan praktis; sumber referensi buku ini dalam pemberian contoh dan penjelasan berdasar pada pengalaman penulis maupun orang lain, juga berdasar pada teori Pemasaran dari hasil riset buku, artikel dan jurnal internasional.',
                'image' => 'catalog/marketingg.avif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Filosofi Teras',
                'description' => 'Buku yang pertama kali diterbitkan pada 2019 ini mengajarkan kita tentang pengendalian emosi negatif yang ada dalam diri kita. Buku Filosofi Teras menjadi buku mega best seller, dan memenangkan Book of the Year di Indonesia International Book Fair pada 2019. Filosofi Teras memiliki tebal sebanyak 344 halaman.
                Buku ini mudah dipahami dengan ilustrasi tokoh filsafat, serta kata-kata bijak yang menambah daya tarik dalam membaca. Buku karangan Henry Manampiring ini sangat cocok dibaca untuk para generasi milenial, dan Gen Z dalam menghadapi ketakutan, kekhawatiran, kecemasan, serta hal negatif lainnya.
                Awal mula kehadiran buku ini tidak lain dari latar belakang kondisi sang penulis yang didiagnosis major depressive disorder. Hingga akhirnya ia menemukan buku tentang penerapan filsafat stoa dalam hidup.
                Stoa sendiri identik dengan kesederhanaan, dan menerima keadaan yang tidak bisa dikendalikan. Namun, stoicism bukan berarti pasrah dan tidak peduli sama sekali. Filsafat ini mengajarkan kita untuk memiliki prinsip indifferent.',
                'image' => 'catalog/filter.avif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
