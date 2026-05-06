<?php
$artikel = [
"html and css"=>[
    "judul"=>"Belajar HTML dan CSS Pertama Kali",
    "tanggal"=>"1 Maret 2026",
    "isi"=>"Awal perjalanan saya dalam belajar dunia web development dimulai dari HTML. Saat pertama kali mengenal HTML, saya merasa cukup bingung karena harus memahami berbagai tag dan struktur dasar seperti <html>, <head>, dan <body>. Saya sering melakukan kesalahan kecil seperti lupa menutup tag atau salah menempatkan elemen. Namun, dari kesalahan tersebut saya mulai belajar dan perlahan memahami bahwa HTML adalah fondasi utama dalam membuat sebuah halaman website.
    Setelah mulai memahami HTML, saya melanjutkan belajar CSS untuk mempercantik tampilan website. Di sini saya mulai mengenal bagaimana cara mengatur warna, ukuran teks, jarak, dan layout. Awalnya saya merasa CSS lebih sulit karena banyak properti yang harus diingat. Terkadang tampilan yang saya buat tidak sesuai dengan yang diharapkan, tetapi dengan mencoba berulang kali dan melihat contoh, saya mulai memahami cara kerja styling pada website.
    Selanjutnya, saya mulai mengenal framework seperti Tailwind CSS. Framework ini sangat membantu karena saya tidak perlu menulis CSS dari awal. Saya bisa langsung menggunakan class yang sudah tersedia untuk membuat tampilan yang rapi dan modern. Dengan menggunakan framework, proses pembuatan website menjadi lebih cepat dan efisien dibandingkan sebelumnya.
    Dari pengalaman belajar HTML, CSS, dan framework, saya menyadari bahwa setiap tahap memiliki tantangan masing-masing. HTML mengajarkan saya tentang struktur, CSS mengajarkan saya tentang tampilan, dan framework membantu mempercepat proses pengembangan. Walaupun awalnya terasa sulit, tetapi dengan latihan dan konsistensi, saya mulai melihat perkembangan dalam kemampuan saya.
    Pengalaman ini membuat saya semakin tertarik untuk mendalami dunia web development. Saya menyadari bahwa untuk menjadi seorang developer, dibutuhkan kesabaran, kemauan belajar, dan tidak mudah menyerah saat menghadapi error. Perjalanan ini mungkin masih panjang, tetapi saya yakin setiap langkah kecil yang saya pelajari akan membawa saya lebih dekat menuju tujuan saya.",
    "gambar"=>"Screenshot 2026-04-11 110941.png",
    "link"=>"https://www.w3schools.com"
],
"javascript and php"=>[
    "judul"=>"Belajar JS dan PHP Pertama Kali",
    "tanggal"=>"1 April 2026",
    "isi"=>"Di awal belajar, saya benar-benar merasa kebingungan dan tidak paham dengan apa yang saya pelajari. Banyak istilah baru yang belum pernah saya dengar sebelumnya, seperti variabel, fungsi, dan struktur kode. Saat melihat kode yang panjang, saya sering merasa ragu dan bertanya-tanya apakah saya bisa memahaminya atau tidak. Bahkan terkadang saya hanya mengikuti contoh tanpa benar-benar mengerti maksudnya.
    Rasa bingung itu sering membuat saya berhenti sejenak, bahkan hampir menyerah karena merasa coding itu sulit. Namun, saya mencoba untuk tidak langsung menyerah. Saya mulai belajar secara perlahan, membaca ulang materi, dan mencoba mengetik ulang kode sambil memahami fungsinya. Sedikit demi sedikit, saya mulai mengerti walaupun belum sepenuhnya.
    Saya juga menyadari bahwa kebingungan adalah bagian dari proses belajar. Justru dari tidak paham itu, saya terdorong untuk mencari tahu dan belajar lebih dalam. Setiap kali berhasil memahami satu hal kecil, saya merasa lebih percaya diri untuk melanjutkan ke tahap berikutnya.",
    "gambar"=>"Screenshot 2026-05-03 111719.png",
    "link"=>"https://www.w3schools.com"
]
];

$quotes = [
"Jangan menyerah!",
"Error adalah guru terbaik",
"Terus latihan coding!",
"Bug hari ini adalah skill besok",
"Logic lebih penting daripada hafalan",
"Jangan takut nggak ngerti, takutlah kalau berhenti",
"Jika orang lain bisa, kamu juga bisa—asal mau berusaha",
"Tidak ada hasil tanpa usaha"
];

$randomQuote = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html>
<head>
<title>Blog</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow">
    <h2 class="text-xl font-bold mb-4 text-center">Blog Developer</h2>

    <ul class="mb-4">
        <?php foreach($artikel as $key=>$a): ?>
        <li>
            <a href="?artikel=<?= $key ?>" class="text-blue-600 hover:underline">
            <?= $a['judul'] ?> </a>
        </li>
        <?php endforeach; ?>
    </ul>
    
    <hr class="my-4">
    
    <?php
    if(isset($_GET['artikel'])){
        $data = $artikel[$_GET['artikel']];
        echo "<h3 class='text-lg font-bold'>".$data['judul']."</h3>";
        echo "<p class='text-sm text-gray-500'>".$data['tanggal']."</p>";
        echo "<p class='mt-2 text-justify'>".$data['isi']."</p>";
        echo "<img src='".$data['gambar']."' class='mt-2 w-48'>";
        echo "<br><a class='text-blue-600' href='".$data['link']."'>Referensi</a>";
        }?>
        
        <hr class="my-4">
        <div class="bg-green-50 p-4 rounded-lg">
            <h2 class="font-bold italic">Quote motivasi</h2>
            <p class="italic text-gray-600">"<?php echo $randomQuote; ?>"</p>
        </div>
        
        <div class="mt-6">
            <a href="profil.php" class="text-blue-600 font-semibold hover:underline">ke Profil</a> |
            <a href="timeline.php" class="text-blue-600 font-semibold hover:underline">ke Timeline</a>
        </div>
</div>
</body>
</html>