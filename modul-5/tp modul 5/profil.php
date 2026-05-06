<?php
function tampilkanData($framework, $tools, $minat, $skill) {
    echo "<table class='w-full border mt-4'>";
    echo "<tr class='bg-gray-200'>
            <th class='border px-4 py-2'>Data</th>
            <th class='border px-4 py-2'>Hasil</th>
          </tr>";

    echo "<tr>
            <td class='border px-4 py-2'>Framework</td>
            <td class='border px-4 py-2'>" . implode(", ", $framework) . "</td>
          </tr>";

    echo "<tr>
            <td class='border px-4 py-2'>Tools</td>
            <td class='border px-4 py-2'>" . implode(", ", $tools) . "</td>
          </tr>";

    echo "<tr>
            <td class='border px-4 py-2'>Minat</td>
            <td class='border px-4 py-2'>$minat</td>
          </tr>";

    echo "<tr>
            <td class='border px-4 py-2'>Skill</td>
            <td class='border px-4 py-2'>$skill</td>
          </tr>";

    echo "</table>";
}

$error = "";
$framework = [];
$cerita = "";
$tools = [];
$minat = "";
$skill = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $frameworkInput = $_POST['framework'] ?? "";
    $cerita = $_POST['cerita'] ?? "";
    $tools = $_POST['tools'] ?? [];
    $minat = $_POST['minat'] ?? "";
    $skill = $_POST['skill'] ?? "";

    if (empty($frameworkInput) || empty($cerita) || empty($tools) || empty($minat) || empty($skill)) {
        $error = "Semua field wajib diisi!";
    } else {
        $framework = array_map('trim', explode(",", $frameworkInput));
    }
}?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-3xl mx-auto bg-white p-6 rounded-2xl shadow">

    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">
        Profil Interaktif Developer Pemula
    </h1>

    <table class="w-full border mb-6">
        <tr>
            <td class="border px-4 py-2 font-semibold">Nama</td>
            <td class="border px-4 py-2">Miftahul Ulum Allmal Maftuh</td></tr>
        <tr>
            <td class="border px-4 py-2 font-semibold">ID Developer</td>
            <td class="border px-4 py-2">250441100064</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-semibold">Kota/Tgl Lahir</td>
            <td class="border px-4 py-2">Surabaya, 12 juli 2006</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-semibold">Email</td>
            <td class="border px-4 py-2">ulumkmpx@email.com</td>
        </tr>
        <tr>
            <td class="border px-4 py-2 font-semibold">WhatsApp</td>
            <td class="border px-4 py-2">0817030271991</td>
        </tr>
    </table>

    <form method="POST" class="space-y-4">

        <input type="text" name="framework" placeholder="Framework/Tools yang dikuasai"
            class="w-full border p-2 rounded">

        <textarea name="cerita" placeholder="Pengalaman..."
            class="w-full border p-2 rounded"></textarea>

        <div>
            <h1 class="font-semibold mb-2">Tools Penunjang</h1>
            <label>
                <input type="checkbox" name="tools[]" value="VS Code"> VS Code
            </label>
            <label>
                <input type="checkbox" name="tools[]" value="GitHub"> GitHub
            </label>
            <label>
                <input type="checkbox" name="tools[]" value="Figma"> Figma
            </label>
            <label>
                <input type="checkbox" name="tools[]" value="Postman"> Postman
            </label>
        </div>

        <div>
            <h1 class="font-semibold mb-2">Minat Bidang</h1>
            <label>
                <input type="radio" name="minat" value="Frontend"> Frontend</label>
            <label>
                <input type="radio" name="minat" value="Backend"> Backend</label>
            <label>
                <input type="radio" name="minat" value="Fullstack"> Fullstack</label>
        </div>

        <select name="skill" class="w-full border p-2 rounded">
            <option value="">-- Pilih Skill --</option>
            <option value="Dasar">Dasar</option>
            <option value="Cukup">Cukup</option>
            <option value="Profesional">Profesional</option>
        </select>

        <?php if ($error): ?>
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
            <?= $error ?>
            </div>
        <?php endif; ?>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Submit
        </button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$error): ?>

        <?php tampilkanData($framework, $tools, $minat, $skill); ?>

        <div class="mt-4">
            <h3 class="font-semibold">Pengalaman:</h3>
            <p><?= htmlspecialchars($cerita) ?></p>
        </div>
    <?php endif; ?>

    <?php if (count($framework) > 2): ?>
        <div class="bg-green-100 text-green-700 p-3 mt-4 rounded">
        Skill Anda cukup luas di bidang development!
        </div>
    <?php endif; ?>
    
    <div class="mt-6">
        <a href="timeline.php" class="text-blue-600 font-semibold hover:underline">ke Timeline</a> |
        <a href="blog.php" class="text-blue-600 font-semibold hover:underline">ke Blog</a>
    </div>
</div>
</body>
</html>
