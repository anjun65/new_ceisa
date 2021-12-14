<?php

namespace App\Http\Livewire;

use App\Csv;
use Validator;
use Livewire\Component;
use App\Models\Kuasa;
use Auth;
use Livewire\WithFileUploads;

class ImportTransactions extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $upload;
    public $columns;
    public $fieldColumnMap = [
        'nomor_kuasa' => '',
        'tanggal_kuasa' => '',
        'pemberi_kuasa' => '',
        'nomor_ijin_bpk' => '',
        'tanggal_ijin_bpk' => '',
        'penerima_kuasa' => '',
        'awal_berlaku' => '',
        'akhir_berlaku' => '',
        'user_id' => '',
        'status' => '',
    ];

    protected $rules = [
        'fieldColumnMap.nomor_kuasa' => 'required',
        'fieldColumnMap.tanggal_kuasa' => 'required',
        'fieldColumnMap.pemberi_kuasa' => 'required',
        'fieldColumnMap.nomor_ijin_bpk' => 'required',
        'fieldColumnMap.tanggal_ijin_bpk' => 'required',
        'fieldColumnMap.penerima_kuasa' => 'required',
        'fieldColumnMap.awal_berlaku' => 'required',
        'fieldColumnMap.akhir_berlaku' => 'required',
        'fieldColumnMap.user_id' => 'required',
        'fieldColumnMap.status' => 'required',
    ];

    protected $customAttributes = [
        'fieldColumnMap.nomor_kuasa' => 'nomor_kuasa',
        'fieldColumnMap.tanggal_kuasa' => 'tanggal_kuasa',
        'fieldColumnMap.pemberi_kuasa' => 'pemberi_kuasa',
        'fieldColumnMap.nomor_ijin_bpk' => 'nomor_ijin_bpk',
        'fieldColumnMap.tanggal_ijin_bpk' => 'tanggal_ijin_bpk',
        'fieldColumnMap.penerima_kuasa' => 'penerima_kuasa',
        'fieldColumnMap.awal_berlaku' => 'awal_berlaku',
        'fieldColumnMap.akhir_berlaku' => 'akhir_berlaku',
        // 'fieldColumnMap.user_id' => Auth::id(),
        // 'fieldColumnMap.status' => 'Diajukan',
    ];

    public function updatingUpload($value)
    {
        Validator::make(
            ['upload' => $value],
            ['upload' => 'required|mimes:txt,csv'],
        )->validate();
    }

    public function updatedUpload()
    {
        $this->columns = Csv::from($this->upload)->columns();

        $this->guessWhichColumnsMapToWhichFields();
    }

    public function import()
    {
        $this->validate();

        $importCount = 0;

        Csv::from($this->upload)
            ->eachRow(function ($row) use (&$importCount) {
                Kuasa::create(
                    $this->extractFieldsFromRow($row)
                );

                $importCount++;
            });

        $this->reset();

        $this->emit('refreshTransactions');

        $this->notify('Imported '.$importCount.' transactions!');
    }

    public function extractFieldsFromRow($row)
    {
        $attributes = collect($this->fieldColumnMap)
            ->filter()
            ->mapWithKeys(function($heading, $field) use ($row) {
                return [$field => $row[$heading]];
            })
            ->toArray();

        return $attributes + ['status' => 'success', 'date_for_editing' => now()];
    }

    public function guessWhichColumnsMapToWhichFields()
    {
        $guesses = [
            'nomor_kuasa' => ['nomor_kuasa'],
            'tanggal_kuasa' => ['tanggal_kuasa'],
            'pemberi_kuasa' => ['pemberi_kuasa'],
            'nomor_ijin_bpk' => ['nomor_ijin_bpk'],
            'tanggal_ijin_bpk' => ['tanggal_ijin_bpk'],
            'penerima_kuasa' => ['penerima_kuasa'],
            'awal_berlaku' => ['awal_berlaku'],
            'akhir_berlaku' => ['akhir_berlaku'],
        ];

        foreach ($this->columns as $column) {
            $match = collect($guesses)->search(fn($options) => in_array(strtolower($column), $options));

            if ($match) $this->fieldColumnMap[$match] = $column;
        }
    }
}
