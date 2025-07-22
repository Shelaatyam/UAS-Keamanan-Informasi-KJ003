use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run()
    {
        Layanan::create([
            'jenis_layanan' => 'Servis Mesin',
            'deskripsi' => 'Layanan perbaikan mesin kendaraan.',
            'created_at' => now(),
        ]);

        Layanan::create([
            'jenis_layanan' => 'Pengecekan Rutin',
            'deskripsi' => 'Layanan pengecekan kondisi kendaraan secara berkala.',
            'created_at' => now(),
        ]);

        Layanan::create([
            'jenis_layanan' => 'Pembersihan',
            'deskripsi' => 'Layanan pembersihan kendaraan bagian luar dan dalam.',
            'created_at' => now(),
        ]);
    }
}
