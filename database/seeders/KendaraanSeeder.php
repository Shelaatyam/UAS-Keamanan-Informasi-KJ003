use App\Models\Kendaraan;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        Kendaraan::create([
            'jenis_kendaraan' => 'Mobil',
            'status_perbaikan' => 'perbaikan',
            'created_at' => now(),
        ]);

        Kendaraan::create([
            'jenis_kendaraan' => 'Motor',
            'status_perbaikan' => 'selesai',
            'created_at' => now(),
        ]);

        Kendaraan::create([
            'jenis_kendaraan' => 'Mobil',
            'status_perbaikan' => 'perbaikan',
            'created_at' => now(),
        ]);
    }
}
