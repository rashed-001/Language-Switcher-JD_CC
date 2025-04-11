<?php
// Detect 'lang' parameter from the URL and set the initial language
$lang = 'en'; // Default language
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

// Language labels
$labels = [
    'en' => [
        'title' => 'Language Switcher',
        'input_label' => 'Enter your name',
        'submit' => 'Submit',
        'select_language' => 'Select Language',
        'response_message' => 'Your input: ',
        'description' => 'Switch languages to see the changes dynamically.',
        'footer' => 'Thank you for using our language switcher!',
        'main_header' => 'Welcome to the Language Switcher!',
        'task_description' => 'This tool allows you to switch languages dynamically and see the changes instantly.'
    ],
    'pl' => [
        'title' => 'Przełącznik języków',
        'input_label' => 'Wpisz swoje imię',
        'submit' => 'Wyślij',
        'select_language' => 'Wybierz język',
        'response_message' => 'Twoje dane: ',
        'description' => 'Przełącz języki, aby zobaczyć zmiany dynamicznie.',
        'footer' => 'Dziękujemy za korzystanie z naszego przełącznika języków!',
        'main_header' => 'Witamy w Przełączniku Języków!',
        'task_description' => 'To narzędzie pozwala dynamicznie przełączać języki i natychmiast zobaczyć zmiany.'
    ],
    'bn' => [
        'title' => 'ভাষা সুইচার',
        'input_label' => 'আপনার নাম লিখুন',
        'submit' => 'জমা দিন',
        'select_language' => 'ভাষা নির্বাচন করুন',
        'response_message' => 'আপনার ইনপুট: ',
        'description' => 'পরিবর্তনগুলি গতিশীলভাবে দেখতে ভাষা পরিবর্তন করুন।',
        'footer' => 'আমাদের ভাষা সুইচার ব্যবহার করার জন্য আপনাকে ধন্যবাদ!',
        'main_header' => 'ভাষা সুইচারে স্বাগতম!',
        'task_description' => 'এই সরঞ্জামটি আপনাকে ভাষা গতিশীলভাবে পরিবর্তন করতে এবং পরিবর্তনগুলি তাৎক্ষণিকভাবে দেখতে দেয়।'
    ],
    'in' => [
        'title' => 'Pengalih Bahasa',
        'input_label' => 'Masukkan nama Anda',
        'submit' => 'Kirim',
        'select_language' => 'Pilih Bahasa',
        'response_message' => 'Input Anda: ',
        'description' => 'Beralih bahasa untuk melihat perubahan secara dinamis.',
        'footer' => 'Terima kasih telah menggunakan pengalih bahasa kami!',
        'main_header' => 'Selamat Datang di Pengalih Bahasa!',
        'task_description' => 'Alat ini memungkinkan Anda untuk beralih bahasa secara dinamis dan melihat perubahan secara instan.'
    ],
    'es' => [
        'title' => 'Selector de Idioma',
        'input_label' => 'Ingrese su nombre',
        'submit' => 'Enviar',
        'select_language' => 'Seleccionar Idioma',
        'response_message' => 'Su entrada: ',
        'description' => 'Cambie de idioma para ver los cambios dinámicamente.',
        'footer' => '¡Gracias por usar nuestro selector de idiomas!',
        'main_header' => '¡Bienvenido al Selector de Idiomas!',
        'task_description' => 'Esta herramienta le permite cambiar de idioma dinámicamente y ver los cambios al instante.'
    ],
    'fr' => [
        'title' => 'Sélecteur de Langue',
        'input_label' => 'Entrez votre nom',
        'submit' => 'Soumettre',
        'select_language' => 'Sélectionner la Langue',
        'response_message' => 'Votre entrée: ',
        'description' => 'Changez de langue pour voir les changements dynamiquement.',
        'footer' => 'Merci d\'utiliser notre sélecteur de langue!',
        'main_header' => 'Bienvenue dans le Sélecteur de Langue!',
        'task_description' => 'Cet outil vous permet de changer de langue dynamiquement et de voir les changements instantanément.'
    ],
    'de' => [
        'title' => 'Sprachauswahl',
        'input_label' => 'Geben Sie Ihren Namen ein',
        'submit' => 'Einreichen',
        'select_language' => 'Sprache auswählen',
        'response_message' => 'Ihr Eingabe: ',
        'description' => 'Wechseln Sie die Sprache, um die Änderungen dynamisch zu sehen.',
        'footer' => 'Vielen Dank, dass Sie unseren Sprachumschalter verwenden!',
        'main_header' => 'Willkommen bei der Sprachauswahl!',
        'task_description' => 'Dieses Tool ermöglicht es Ihnen, die Sprache dynamisch zu wechseln und die Änderungen sofort zu sehen.'
    ],
    'it' => [
        'title' => 'Selettore di Lingua',
        'input_label' => 'Inserisci il tuo nome',
        'submit' => 'Invia',
        'select_language' => 'Seleziona Lingua',
        'response_message' => 'Il tuo input: ',
        'description' => 'Cambia lingua per vedere le modifiche dinamicamente.',
        'footer' => 'Grazie per aver utilizzato il nostro selettore di lingua!',
        'main_header' => 'Benvenuto nel Selettore di Lingua!',
        'task_description' => 'Questo strumento ti consente di cambiare lingua dinamicamente e vedere le modifiche istantaneamente.'
    ],
    'jp' => [
        'title' => '言語切り替え',
        'input_label' => 'あなたの名前を入力してください',
        'submit' => '送信',
        'select_language' => '言語を選択',
        'response_message' => 'あなたの入力: ',
        'description' => '言語を切り替えて、動的な変更を確認してください。',
        'footer' => '私たちの言語スイッチャーを使用していただきありがとうございます！',
        'main_header' => '言語スイッチャーへようこそ！',
        'task_description' => 'このツールを使用すると、言語を動的に切り替えて、変更を即座に確認できます。'
    ]
];

// Get labels based on selected language
$current_labels = $labels[$lang] ?? $labels['en'];
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $current_labels['title'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/script.js" defer></script>
</head>
<body>
    <header class="text-center mb-4">
        <h1 id="main-header" data-key="main_header" class="display-4"><?= $current_labels['main_header'] ?? 'Welcome to the Language Switcher!' ?></h1>
        <p id="task-description" data-key="task_description" class="lead"><?= $current_labels['task_description'] ?? 'This tool allows you to switch languages dynamically and see the changes instantly.' ?></p>
    </header>
    <div class="container mt-5">
        <img src="assets/image.png" alt="Image" class="img-fluid" style="max-width: 600px;">
        <h2 id="title" class="mt-3" data-key="title"><?= $current_labels['title'] ?></h2>
        
        <div class="form-group">
            <label for="language" data-key="select_language"><?= $current_labels['select_language'] ?></label>
            <select id="language" class="form-control">
                <option value="en" <?= $lang == 'en' ? 'selected' : '' ?>>English</option>
                <option value="pl" <?= $lang == 'pl' ? 'selected' : '' ?>>Polish</option>
                <option value="bn" <?= $lang == 'bn' ? 'selected' : '' ?>>Bengali</option>
                <option value="in" <?= $lang == 'in' ? 'selected' : '' ?>>Indonesian</option>
                <option value="es" <?= $lang == 'es' ? 'selected' : '' ?>>Spanish</option>
                <option value="fr" <?= $lang == 'fr' ? 'selected' : '' ?>>French</option>
                <option value="de" <?= $lang == 'de' ? 'selected' : '' ?>>German</option>
                <option value="it" <?= $lang == 'it' ? 'selected' : '' ?>>Italian</option>
                <option value="jp" <?= $lang == 'jp' ? 'selected' : '' ?>>Japanese</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name" data-key="input_label"><?= $current_labels['input_label'] ?></label>
            <input type="text" id="name" class="form-control">
        </div>
        
        <button id="submit" class="btn btn-primary" data-key="submit"><?= $current_labels['submit'] ?></button>
        
        <div id="response" class="mt-3" style="font-size: 1rem; color: #495057;"></div>
        <!-- Placeholder for displaying the response -->
        
        <button id="toggle-language" class="btn btn-secondary mt-2">Toggle Language</button>
        
        <div id="description-container" class="d-flex justify-content-between mt-4">
            <div id="task-requirement" class="description-box" data-key="task_requirement">
                <?= $current_labels['task_requirement'] ?? 'This tool allows you to switch languages dynamically and see the changes instantly.' ?>
            </div>
            <div id="task-done" class="description-box" data-key="task_done">
                <?= $current_labels['task_done'] ?? 'Implemented a dynamic language switcher with real-time updates and AJAX functionality.' ?>
            </div>
        </div>
        
        <footer id="footer" class="mt-5 text-center" data-key="footer"><?= $current_labels['footer'] ?? 'Thank you for using our language switcher!' ?></footer>
    </div>
</body>
</html>