<!DOCTYPE html>
<html>
<head>
<title>Timeline</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<?php
$timeline = [
    ["tahun"=>"2022","kegiatan"=>"Masuk sekolah MA jurusan IPA"],
    ["tahun"=>"2025","kegiatan"=>"lulus MA"],
    ["tahun"=>"2025","kegiatan"=>"Belajar Python"],
    ["tahun"=>"2025","kegiatan"=>"Projek Pertama"],
    ["tahun"=>"2026","kegiatan"=>"Belajar HTML,CSS,JavaScrpit,PHP"]
];

function riwayat($tahun, $kegiatan){
    if ($tahun == "2026") {
        return "<span class='text-blue-600 font-bold'>$tahun - $kegiatan</span>";
    }
    return "$tahun - $kegiatan";
}
?>

<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">
        Timeline Belajar Coding
    </h2>

    <div>
    <?php foreach($timeline as $t): ?>
        <div class="mb-6 p-4 bg-gray-50 rounded-lg w-full shadow-sm">
            <p class="text-lg">
                <?= riwayat($t['tahun'], $t['kegiatan']); ?>
            </p>
        </div>
    <?php endforeach; ?>
    </div>

    <div class="mt-6">
        <a href="profil.php" class="text-blue-600 font-semibold hover:underline">Ke Profil</a> |
        <a href="blog.php" class="text-blue-600 font-semibold hover:underline">Ke Blog</a>
    </div>

</div>
</body>
</html>