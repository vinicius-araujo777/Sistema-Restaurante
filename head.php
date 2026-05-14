<?php
// head.php — inclua no <head> de todas as páginas
// Defina $pageTitle antes de incluir
$pageTitle = $pageTitle ?? 'Hambre';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $pageTitle ?> — Hambre</title>
<script src="https://unpkg.com/@heroicons/v2/24/outline/index.js" type="module"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['"Outfit"', 'sans-serif'],
                    serif: ['"Cormorant Garamond"', 'serif'],
                },
                colors: {
                    orange: {
                        50: '#FEF0E7',
                        100: '#FDD9C0',
                        200: '#FAB990',
                        400: '#F5845A',
                        500: '#E8621A',
                        600: '#C04E10',
                        700: '#7C3200',
                    }
                }
            }
        }
    }
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Outfit', sans-serif;
    }

    .font-serif {
        font-family: 'Cormorant Garamond', serif;
    }
</style>