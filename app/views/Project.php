<section class="py-20 px-6">
    <h2 class="text-3xl font-bold text-center mb-10">My Projects</h2>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

        <?php foreach ($projects as $p): ?>
            <div class="bg-slate-800 rounded-xl overflow-hidden shadow-lg hover:scale-105 transition">

                <!-- IMAGE -->
                <img src="<?= $p['image']; ?>" class="w-full h-40 object-cover">

                <!-- CONTENT -->
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-2"><?= $p['name']; ?></h3>
                    
                    <p class="text-gray-400 text-sm mb-3">
                        <?= $p['desc']; ?>
                    </p>

                    <p class="text-cyan-400 text-sm mb-4">
                        <?= $p['tech']; ?>
                    </p>

                    <a href="<?= $p['link']; ?>" target="_blank"
                       class="inline-block bg-cyan-400 text-black px-4 py-2 rounded-lg hover:bg-cyan-300">
                       Lihat Project
                    </a>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
</section>