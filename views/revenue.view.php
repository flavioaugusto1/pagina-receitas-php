<?php foreach ($revenues as $revenue): ?>
    <section class="relative text-2xl font-bold text-slate-100 py-36 bg-[url('./assets/<?= $revenue['imagem'] ?>')] 
                    bg-cover bg-no-repeat bg-center before:absolute before:inset-0 before:bg-black/50 before:content-['']">
        <h1 class="relative z-10 text-center">
            <?= $revenue['nome'] ?>
        </h1>
    </section>
    <section class="pl-24 mt-12 space-y-10">
        <div>
            <h3 class="text-lg text-neutral-900 font-bold">Ingredientes</h3>
            <ul class="list-disc list-outside pl-6 space-y-2 marker:text-neutral-900">
                <?php foreach ($revenue['ingredientes'] as $ingrediente): ?>
                    <li class="list-item"><?= $ingrediente ?></li>
                <? endforeach; ?>
            </ul>
        </div>

        <div>
            <h3 class="text-lg text-neutral-900 font-bold">Modo de preparo</h3>
            <ol class="list-decimal list-outside pl-6 space-y-2 marker:text-neutral-900">
                <?php foreach ($revenue['modoPreparo'] as $ingrediente): ?>
                    <li class="list-item"><?= $ingrediente ?></li>
                <? endforeach; ?>
                </ol>
        </div>

        <div>
            <h3 class="text-lg text-neutral-900 font-bold">Informações adicioanais</h3>
            <p><?= $revenue['informacoesAdicionais'] ?></p>
        </div>
    </section>
<?php endforeach; ?>