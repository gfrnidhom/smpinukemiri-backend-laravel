<?php

namespace App\Filament\Resources\EnrollmentPeriodResource\Widgets;

use App\Models\EnrollmentPeriod;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EnrollmentStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPeriods = EnrollmentPeriod::count();
        $totalApplicants = EnrollmentPeriod::sum('applicants_count');
        $totalQuota = EnrollmentPeriod::sum('quota');
        $remainingQuota = $totalQuota - $totalApplicants;

        return [
            Stat::make('Total Gelombang', $totalPeriods)
                ->description('Jumlah gelombang pendaftaran')
                ->icon('heroicon-o-clipboard-document-list'),

            Stat::make('Total Pendaftar', $totalApplicants)
                ->description('Jumlah semua pendaftar')
                ->color('success')
                ->icon('heroicon-o-user-group'),

            Stat::make('Kuota Tersisa', max($remainingQuota, 0))
                ->description('Kuota yang masih tersedia')
                ->color($remainingQuota > 0 ? 'primary' : 'danger')
                ->icon('heroicon-o-chart-bar'),
        ];
    }
}
