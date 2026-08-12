<?php

namespace App\Filament\Widgets;

use App\Models\Classes;
use App\Models\EnrollmentPeriod;
use App\Models\Event;
use App\Models\Post;
use App\Models\Program;
use App\Models\RegistrationStudent;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStatsWidget extends BaseWidget
{

    protected function getColumns(): int
    {
        return 3; // Maksimal 3 kolom per baris
    }

    protected function getStats(): array
    {

        $totalPeriods = EnrollmentPeriod::count();
        $totalApplicants = EnrollmentPeriod::sum('applicants_count');
        $totalQuota = EnrollmentPeriod::sum('quota');
        $remainingQuota = $totalQuota - $totalApplicants;

        return [

            Stat::make('Periode Pendaftaran Aktif', EnrollmentPeriod::where('status', 'Open')->count())
                ->description('Jumlah periode pendaftaran yang masih dibuka')
                ->icon('heroicon-o-calendar'),

            Stat::make('Total Pendaftar', RegistrationStudent::count())
                ->description('Total siswa yang telah mendaftar')
                ->icon('heroicon-o-document-text'),

            Stat::make('Kuota Tersisa', max($remainingQuota, 0))
                ->description('Kuota yang masih tersedia')
                ->color($remainingQuota > 0 ? 'primary' : 'danger')
                ->icon('heroicon-o-chart-bar'),

            Stat::make('Menunggu Verifikasi', RegistrationStudent::where('registration_status', 'Pending')->count())
                ->description('Siswa yang masih dalam proses verifikasi')
                ->color('warning')
                ->icon('heroicon-o-clock'),

            Stat::make('Diterima', RegistrationStudent::where('registration_status', 'Accepted')->count())
                ->description('Siswa yang telah diterima')
                ->color('success')
                ->icon('heroicon-o-check-circle'),

            Stat::make('Ditolak', RegistrationStudent::where('registration_status', 'Rejected')->count())
                ->description('Siswa yang ditolak')
                ->color('danger')
                ->icon('heroicon-o-x-circle'),

            Stat::make('Total Pengguna', User::where('role', 'users')->count())
                ->description('Total pengguna terdaftar di sistem')
                ->icon('heroicon-o-users'),

            Stat::make('Total Siswa', Student::count())
                ->description('Jumlah siswa yang terdaftar')
                ->icon('heroicon-o-academic-cap'),

            Stat::make('Total Guru', Teacher::count())
                ->description('Jumlah guru yang aktif')
                ->icon('heroicon-o-user-group'),

            Stat::make('Total Postingan', Post::count())
                ->description('Total artikel atau berita yang telah diposting')
                ->icon('heroicon-o-newspaper'),

            Stat::make('Total Ekstrakurikuler', Program::count())
                ->description('Jumlah ekstrakurikuler yang tersedia')
                ->icon('heroicon-o-academic-cap'),

            Stat::make('Total Kelas', Classes::count())
                ->description('Jumlah kelas yang tersedia')
                ->icon('heroicon-o-x-circle'),

            Stat::make('Total Event', Event::count())
                ->description('Jumlah event yang telah dibuat')
                ->icon('heroicon-o-calendar-days'),


        ];
    }
}
