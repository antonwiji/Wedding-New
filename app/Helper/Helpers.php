<?php

namespace App\Helper;

use Carbon\Carbon;

class Helpers
{
    /**
     * Ubah string tanggal database "YYYY-MM-DD HH:MM:SS.uuu"
     * menjadi "DD NamaBulan YYYY" (contoh: 30 September 2025).
     *
     * @param  string|null  $dbString
     * @return string|null
     */
    public static function getDate(?string $dbString): ?string
    {
        if (empty($dbString)) {
            return null;
        }

        // Coba parse beberapa format umum (dengan/ tanpa microseconds)
        $dt = null;
        try {
            $dt = Carbon::parse($dbString);
        } catch (\Throwable $e) {
            try {
                $dt = Carbon::createFromFormat('Y-m-d H:i:s.u', $dbString);
            } catch (\Throwable $e2) {
                try {
                    $dt = Carbon::createFromFormat('Y-m-d H:i:s', $dbString);
                } catch (\Throwable $e3) {
                    try {
                        $dt = Carbon::createFromFormat('Y-m-d', $dbString);
                    } catch (\Throwable $e4) {
                        return $dbString; // fallback: kembalikan apa adanya
                    }
                }
            }
        }

        // Mapping bulan Indonesia agar stabil tanpa bergantung locale
        $bulanId = [
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        $hari = $dt->format('d');
        $bulan = $bulanId[(int)$dt->format('n')];
        $tahun = $dt->format('Y');

        return "{$hari} {$bulan} {$tahun}";
    }

    public static function gateDateWithDays(?string $dbString): ?string
    {
        if (empty($dbString)) return null;

        // Parse fleksibel
        $dt = null;
        try { $dt = Carbon::parse($dbString); }
        catch (\Throwable $e) {
            try { $dt = Carbon::createFromFormat('Y-m-d H:i:s.u', $dbString); }
            catch (\Throwable $e2) {
                try { $dt = Carbon::createFromFormat('Y-m-d H:i:s', $dbString); }
                catch (\Throwable $e3) {
                    try { $dt = Carbon::createFromFormat('Y-m-d', $dbString); }
                    catch (\Throwable $e4) { return $dbString; }
                }
            }
        }

        // Mapping hari & bulan Indonesia (tanpa bergantung locale)
        $hariId  = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']; // 0=Sunday
        $bulanId = [
            1=>'Januari','Februari','Maret','April','Mei','Juni',
            'Juli','Agustus','September','Oktober','November','Desember'
        ];

        $hari   = $hariId[(int)$dt->format('w')];
        $tgl    = $dt->format('d');
        $bulan  = $bulanId[(int)$dt->format('n')];
        $tahun  = $dt->format('Y');

        return "{$hari}, {$tgl} {$bulan} {$tahun}";
    }
}
