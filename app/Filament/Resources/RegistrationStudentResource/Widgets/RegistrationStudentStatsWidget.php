<?php

namespace App\Filament\Resources\RegistrationStudentResource\Widgets;

use App\Models\RegistrationStudent;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RegistrationStudentStatsWidget extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            Stat::make('Total Pendaftar', RegistrationStudent::count())
                ->description('Jumlah keseluruhan siswa yang mendaftar')
                ->color('primary'),

            Stat::make('Menunggu Verifikasi', RegistrationStudent::where('registration_status', 'Pending')->count())
                ->description('Siswa yang masih dalam proses verifikasi')
                ->color('warning'),

            Stat::make('Diterima', RegistrationStudent::where('registration_status', 'Accepted')->count())
                ->description('Siswa yang telah diterima')
                ->color('success'),

            Stat::make('Ditolak', RegistrationStudent::where('registration_status', 'Rejected')->count())
                ->description('Siswa yang ditolak')
                ->color('danger'),
        ];
    }
}
