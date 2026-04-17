<section class="py-20 px-6 text-center" data-aos="fade-up">

    <h2 class="text-3xl font-bold mb-4">Contact Me</h2>
    <p class="text-gray-400 mb-10">
        Silakan hubungi saya untuk kerja sama atau sekadar berdiskusi
    </p>

    <div class="max-w-xl mx-auto bg-slate-800 p-8 rounded-2xl shadow-lg">

        <form id="contact-form" action="https://formspree.io/f/xbdqoyyr" method="POST" class="space-y-5">

            <!-- Anti bot -->
            <input type="text" name="_gotcha" style="display:none">

            <!-- Nama -->
            <input type="text" name="name" placeholder="Nama"
                required minlength="3"
                class="w-full p-3 rounded-lg bg-slate-900 border border-gray-700 focus:border-cyan-400 focus:outline-none transition">

            <!-- Email -->
            <input type="email" name="email" placeholder="Email"
                required
                class="w-full p-3 rounded-lg bg-slate-900 border border-gray-700 focus:border-cyan-400 focus:outline-none transition">

            <!-- Pesan -->
            <textarea name="message" rows="4" placeholder="Pesan"
                required minlength="10"
                class="w-full p-3 rounded-lg bg-slate-900 border border-gray-700 focus:border-cyan-400 focus:outline-none transition"></textarea>

            <!-- Subject -->
            <input type="hidden" name="_subject" value="Pesan dari Portfolio Qomaruddin">

            <!-- Button -->
            <button type="submit"
                class="w-full bg-cyan-400 text-black py-3 rounded-lg font-semibold hover:scale-105 hover:bg-cyan-300 transition duration-300">
                Kirim Pesan
            </button>

        </form>

    </div>

</section>
<div id="toast"
     class="fixed top-5 right-5 px-6 py-3 rounded-xl shadow-lg text-white z-50 transition-all duration-300 opacity-0 translate-x-10">
</div>

<!-- SCRIPT AJAX -->
<script>
const form = document.getElementById("contact-form");
const toast = document.getElementById("toast");

function showToast(message, type = "success") {

    let duration = 6000;

    // reset total
    toast.className = "fixed top-5 right-5 px-6 py-3 rounded-xl shadow-lg text-white bg-slate-800/80 backdrop-blur z-50 transition-all duration-300 opacity-0 translate-x-10";

    // isi + progress bar
    toast.innerHTML = `
        <div class="flex flex-col">
            <span>${message}</span>
            <div class="mt-2 w-full h-1 bg-slate-700 rounded overflow-hidden">
                <div id="toast-progress" class="h-full bg-cyan-400"></div>
            </div>
        </div>
    `;

    // warna tetap konsisten (cyan theme)
    toast.classList.add("ring-1", "ring-cyan-400");

    // tampilkan animasi
    setTimeout(() => {
        toast.classList.remove("opacity-0", "translate-x-10");
        toast.classList.add("opacity-100", "translate-x-0");
    }, 100);

    // progress bar jalan
    const progress = document.getElementById("toast-progress");

    progress.style.width = "100%";
    progress.style.transition = `width ${duration}ms linear`;

    setTimeout(() => {
        progress.style.width = "0%";
    }, 50);

    // animasi keluar
    setTimeout(() => {
        toast.classList.remove("opacity-100", "translate-x-0");
        toast.classList.add("opacity-0", "translate-x-10");
    }, duration);
}

form.addEventListener("submit", async function(e) {
    e.preventDefault();

    showToast("⏳ Mengirim pesan...", "loading");

    const data = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {
            showToast("✅ Pesan berhasil dikirim!", "success");
            form.reset();
        } else {
            showToast("❌ Gagal mengirim pesan!", "error");
        }

    } catch (error) {
        showToast("❌ Terjadi error!", "error");
    }
});
</script>