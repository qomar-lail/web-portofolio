<section class="py-20 px-6" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-center mb-12">My Projects</h2>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

        <?php foreach ($projects as $p): ?>
            <div class="group relative rounded-xl overflow-hidden shadow-lg">

                <!-- IMAGE -->
                <img src="<?= $p['image']; ?>"
                     class="w-full h-52 object-cover transform group-hover:scale-110 transition duration-500">

                <!-- OVERLAY -->
                <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-center items-center text-center p-4">

                    <h3 class="text-lg font-semibold mb-2">
                        <?= $p['name']; ?>
                    </h3>

                    <p class="text-gray-300 text-sm mb-3">
                        <?= $p['desc']; ?>
                    </p>

                    <p class="text-cyan-400 text-xs mb-4">
                        <?= $p['tech']; ?>
                    </p>

                    <a href="<?= $p['link']; ?>" target="_blank"
                       class="bg-cyan-400 text-black px-4 py-2 rounded-lg text-sm hover:scale-105 transition">
                       View Project
                    </a>

                </div>

            </div>
        <?php endforeach; ?>

    </div>
</section>