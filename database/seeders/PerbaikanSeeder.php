use App\Models\Perbaikan;

class PerbaikanSeeder extends Seeder
{
    public function run()
    {
        Perbaikan::create([
            'jenis_perbaikan' => 'Ganti Oli',
            'biaya' => 150000,
            'status' => 'proses',
            'kendaraan_id' => 1, // ID kendaraan yang sesuai
            'pekerja_id' => 1, // ID pekerja yang sesuai
            'created_at' => now(),
        ]);

        Perbaikan::create([
            'jenis_perbaikan' => 'Pengecekan Rem',
            'biaya' => 100000,
            'status' => 'selesai',
            'kendaraan_id' => 2, // ID kendaraan yang sesuai
            'pekerja_id' => 2, // ID pekerja yang sesuai
            'created_at' => now(),
        ]);

        Perbaikan::create([
            'jenis_perbaikan' => 'Service Mesin',
            'biaya' => 300000,
            'status' => 'proses',
            'kendaraan_id' => 3, // ID kendaraan yang sesuai
            'pekerja_id' => 3, // ID pekerja yang sesuai
            'created_at' => now(),
        ]);
    }
}
