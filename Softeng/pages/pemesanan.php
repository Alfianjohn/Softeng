<div class="d-flex justify-content-center align-items-start pt-4">

    <div class="container bg-white rounded-top shadow p-4 mt-4" style="max-width: 400px; min-height: 100vh;">
        <h1 class="text-center text-primary mb-4">Pemesanan Ruang</h1>

        <form>
            <div class="mb-3">
                <label for="kode-ruang" class="form-label fw-bold">Kode Ruang Saat Ini</label>
                <input type="text" class="form-control" id="kode-ruang" placeholder="Masukkan kode ruang">
            </div>

            <div class="mb-3">
                <label for="kendala" class="form-label fw-bold">Kendala</label>
                <textarea class="form-control" id="kendala" rows="3" placeholder="Masukkan kendala"></textarea>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="2" placeholder="Berikan deskripsi tambahan"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Tanggal dan Jam</label>
                <div class="d-flex gap-2">
                    <input type="date" class="form-control">
                    <input type="time" class="form-control">
                    <input type="time" class="form-control">
                </div>
            </div>

            <a href="/softeng/ruang-ganti" class="btn btn-primary w-100 py-2 mt-3">Cari ruangan yang tersedia</a>
        </form>
    </div>
</div>