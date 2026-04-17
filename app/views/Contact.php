<section class="py-20 px-6 text-center">
    <h2 class="text-3xl font-bold mb-6">Contact Me</h2>

    <form method="POST" class="max-w-xl mx-auto space-y-4">

        <input type="text" name="name" placeholder="Nama"
            class="w-full p-3 rounded bg-slate-800 border border-gray-600">

        <input type="email" name="email" placeholder="Email"
            class="w-full p-3 rounded bg-slate-800 border border-gray-600">

        <textarea name="message" placeholder="Pesan"
            class="w-full p-3 rounded bg-slate-800 border border-gray-600"></textarea>

        <button type="submit"
            class="bg-cyan-400 text-black px-6 py-2 rounded-lg hover:bg-cyan-300">
            Kirim
        </button>

    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p class="mt-4 text-green-400">Pesan berhasil dikirim (simulasi)</p>
    <?php endif; ?>
</section>