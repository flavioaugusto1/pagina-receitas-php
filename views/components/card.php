<div class="max-w-sm">
    <img class=" rounded-t-xl h-52 w-full" src="./assets/<?= $revenue['imagem'] ?>" alt=<?= $revenue['alt'] ?>>
    <div class="rounded-b-xl bg-slate-200 px-10 py-7">
        <h2 class="font-bold text-xl mb-1"><?= $revenue['nome'] ?></h2>
        <p class="text-neutral-600 text-md mb-6"><?= $revenue['descricao'] ?></p>
        <a href="/revenue?id=<?= $revenue['id'] ?>" class="bg-yellow-300 font-bold py-2 px-8 rounded-lg hover:opacity-50 transition-opacity">Ver receita</a>
    </div>
</div>