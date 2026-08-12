<?php

namespace App\Filament\Exports;

use App\Models\RegistrationStudent;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class RegistrationStudentExporter extends Exporter
{
    protected static ?string $model = RegistrationStudent::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('registration_number')->label('Nomor Registrasi'),
            ExportColumn::make('users.name')->label('Nama Pengguna'),
            ExportColumn::make('enrollments.period_name')->label('Gelombang Pendaftaran'),
            ExportColumn::make('full_name')->label('Nama Lengkap'),
            ExportColumn::make('nisn')->label('NISN'),
            ExportColumn::make('nik')->label('NIK'),
            ExportColumn::make('birthplace')->label('Tempat Lahir'),
            ExportColumn::make('birthdate')->label('Tanggal Lahir'),
            ExportColumn::make('gender')->label('Jenis Kelamin'),
            ExportColumn::make('religion')->label('Agama'),
            ExportColumn::make('phone_number')->label('Nomor Telepon'),
            ExportColumn::make('email')->label('Email'),
            ExportColumn::make('previous_school')->label('Asal Sekolah'),
            ExportColumn::make('previous_school_name')->label('Nama Sekolah Asal'),
            ExportColumn::make('registration_date')->label('Tanggal Pendaftaran'),
            ExportColumn::make('province.name')->label('Provinsi'),
            ExportColumn::make('city.name')->label('Kota/Kabupaten'),
            ExportColumn::make('district.name')->label('Kecamatan'),
            ExportColumn::make('village.name')->label('Desa'),
            ExportColumn::make('address')->label('Alamat'),
            ExportColumn::make('registration_status')->label('Status Pendaftaran'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
            ExportColumn::make('updated_at')->label('Diperbarui Pada'),

            // Data Orang Tua
            ExportColumn::make('parents.0.father_name')->label('Nama Ayah'),
            ExportColumn::make('parents.0.father_religion')->label('Agama Ayah'),
            ExportColumn::make('parents.0.father_occupation')->label('Pekerjaan Ayah'),
            ExportColumn::make('parents.0.mother_name')->label('Nama Ibu'),
            ExportColumn::make('parents.0.mother_religion')->label('Agama Ibu'),
            ExportColumn::make('parents.0.mother_occupation')->label('Pekerjaan Ibu'),
            ExportColumn::make('parents.0.guardian_name')->label('Nama Wali'),
            ExportColumn::make('parents.0.guardian_occupation')->label('Pekerjaan Wali'),
            ExportColumn::make('parents.0.guardian_relationship')->label('Hubungan dengan Wali'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your registration student export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
