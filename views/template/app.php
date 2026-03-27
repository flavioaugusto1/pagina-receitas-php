<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central receitas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-100">
    <nav class="text-neutral-900">
        <div class="bg-yellow-300 py-2"></div>
        <div class="flex items-center justify-between py-9 px-20">
            <div class="flex items-center gap-2">
                <div>
                    <?php require './assets/logo.svg' ?>
                </div>
                <p class="text-md font-semibold">Central Receitas</p>
            </div>
            <ul class="flex gap-11 text-md font-bold">
                <li class="hover:underline">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="/revenues">
                        Receitas
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="/about">
                        Sobre nós
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="flex flex-col min-h-screen">
        <?php require "./views/{$view}.view.php"; ?>
    </main>

    <footer class="bg-yellow-300 flex items-center justify-evenly py-14">
        <div class="flex items-center gap-4">
            <div>
                <?php require './assets/logo.svg' ?>
            </div>
            <p class="text-3xl font-bold">Central Receitas</p>
        </div>
        <div>
            <p class="text-lg font-semibold">Redes sociais:</p>
            <ul class="flex gap-2">
                <li class="bg-yellow-100 rounded-lg p-1 hover:opacity-50 transition-opacity">
                    <a href="">
                        <?php require './assets/youtube.svg' ?>
                    </a>
                </li>
                
                <li class="bg-yellow-100 rounded-lg p-1 hover:opacity-50 transition-opacity">
                    <a href="">
                        <?php require './assets/twitter.svg' ?>
                    </a>
                </li>

                <li class="bg-yellow-100 rounded-lg p-1 hover:opacity-50 transition-opacity">
                    <a href="">
                        <?php require './assets/web.svg' ?>
                    </a>
                </li>

                <li class="bg-yellow-100 rounded-lg p-1 hover:opacity-50 transition-opacity">
                    <a href="">
                        <?php require './assets/pinterest.svg' ?>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>