$(document).ready(function() {
    // Language switcher
    $('#language').change(function() {
        var lang = $(this).val();
        window.location.href = '?lang=' + lang; // Change URL to reflect selected language
        updateContent(lang); // Update content dynamically, including the footer
    });

    // AJAX form submission
    $('#submit').click(function() {
        var name = $('#name').val();
        if (name.trim() === '') {
            $('#response').html('<span style="color: red;">Please enter a valid name.</span>'); // Handle empty input
            return;
        }
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: { name: name },
            success: function(response) {
                $('#response').html('<strong>Your input:</strong> ' + response.response); // Display the response dynamically
            },
            error: function() {
                $('#response').html('<span style="color: red;">An error occurred. Please try again.</span>'); // Handle errors
            }
        });
    });

    // Language labels for dynamic updates
    const labels = {
        en: {
            main_header: 'Welcome to the Language Switcher!',
            task_description: 'This tool allows you to switch languages dynamically and see the changes instantly.',
            title: 'Language Switcher',
            input_label: 'Enter your name',
            submit: 'Submit',
            select_language: 'Select Language',
            description: 'Switch languages to see the changes dynamically.',
            footer: 'Thank you for using our language switcher!',
            task_requirement: 'This tool allows you to switch languages dynamically and see the changes instantly.',
            task_done: 'Implemented a dynamic language switcher with real-time updates and AJAX functionality.'
        },
        pl: {
            main_header: 'Witamy w Przełączniku Języków!',
            task_description: 'To narzędzie pozwala na dynamiczną zmianę języków i natychmiastowe zobaczenie zmian.',
            title: 'Przełącznik języków',
            input_label: 'Wpisz swoje imię',
            submit: 'Wyślij',
            select_language: 'Wybierz język',
            description: 'Przełącz języki, aby zobaczyć zmiany dynamicznie.',
            footer: 'Dziękujemy za korzystanie z naszego przełącznika języków!',
            task_requirement: 'To narzędzie pozwala dynamicznie przełączać języki i natychmiast zobaczyć zmiany.',
            task_done: 'Zaimplementowano dynamiczny przełącznik języków z aktualizacjami w czasie rzeczywistym i funkcjonalnością AJAX.'
        },
        // ...other languages...
    };

    // Update content dynamically
    function updateContent(lang) {
        $('[data-key]').each(function() {
            const key = $(this).data('key');
            $(this).text(labels[lang][key]); // Update all elements with data-key attributes
        });
    }

    // Add a toggle button for language switching
    $('#toggle-language').click(function() {
        var currentLang = $('#language').val();
        var nextLang = $('#language option:selected').next().val() || $('#language option:first').val();
        $('#language').val(nextLang).trigger('change'); // Update the dropdown and trigger change
        updateContent(nextLang); // Update content dynamically, including the footer
    });
});