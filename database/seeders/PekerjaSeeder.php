use App\Models\Pekerja;

class PekerjaSeeder extends Seeder
{
    public function run()
    {
        Pekerja::create([
            'nama' => 'Budi Santoso',
            'jabatan' => 'Teknisi',
            'created_at' => now(),
        ]);

        Pekerja::create([
            'nama' => 'Rina Sari',
            'jabatan' => 'Administrasi',
            'created_at' => now(),
        ]);

        Pekerja::create([
            'nama' => 'Dedi Prasetyo',
            'jabatan' => 'Marketing',
            'created_at' => now(),
        ]);
    }
}
