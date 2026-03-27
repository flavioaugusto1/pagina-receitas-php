<section class="relative text-2xl font-bold text-slate-100 py-36 bg-[url('./assets/hero.png')] bg-cover bg-center
                        before:absolute before:inset-0 before:bg-black/50 before:content-['']">
    <h1 class="relative z-10 text-center">
        Inspire-se, cozinhe com paixão e saboreie momentos inesquecíveis à mesa.
    </h1>
</section>
<section class="flex flex-col items-center justify-center py-20">
    <h2 class="text-2xl text-neutral-900 font-bold mb-14">
        Nossas Receitas
    </h2>
    <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 gap-9 px-5">
        <?php foreach ($revenues as $revenue): ?>
            <?php require './views/components/card.php'; ?>
        <?php endforeach; ?>
    </div>  
</section>