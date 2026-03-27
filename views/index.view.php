<section class="relative text-2xl font-bold text-slate-100 py-36 bg-[url('./assets/hero.png')] bg-cover bg-center
                        before:absolute before:inset-0 before:bg-black/50 before:content-['']">
    <h1 class="relative z-10 text-center">
        Inspire-se, cozinhe com paixão e saboreie momentos inesquecíveis à mesa.
    </h1>
</section>
<section class="flex flex-col items-center justify-center py-20">
    <h2 class="text-2xl text-neutral-900 font-bold mb-14">
        Receitas mais recentes
    </h2>
    <div class="flex justify-center items-center gap-9">
        <?php foreach ($data as $revenue): ?>
            <div class="max-w-sm">
                <img class=" rounded-t-xl h-52 w-full" src="./assets/<?= $revenue['imagem'] ?>" alt=<?= $revenue['alt'] ?>>
                <div class="rounded-b-xl bg-slate-200 px-10 py-7">
                    <h2 class="font-bold text-xl mb-1"><?= $revenue['nome'] ?></h2>
                    <p class="text-neutral-600 text-md mb-6"><?= $revenue['descricao'] ?></p>
                    <a href="" class="bg-yellow-300 font-bold py-2 px-8 rounded-lg hover:opacity-50 transition-opacity">Ver receita</a>
                </div>
            </div>
         <? endforeach; ?>
    </div>
</section>