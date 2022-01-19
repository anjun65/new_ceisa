<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\DokumenPabean as Pabean;
use Illuminate\Support\Carbon;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use Illuminate\Support\Facades\Auth;

class DokumenPabean extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;
    public $filters = [
        'kode-dokumen-pabean' => '',
        'status' => '',
        'nomor-aju-pabean' => '',
    ];
    public Pabean $editing;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'editing.entitas' => 'required',
        'editing.jenis_pemberitahuan' => 'required',
        'editing.asal_barang' => 'required',
        'editing.tujuan_barang' => 'required',
        'editing.kode_dokumen_pabean' => 'required',
    ]; }

    public function mount() { $this->editing = $this->makeBlankTransaction(); }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'DokumenPabean.csv');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('You\'ve deleted '.$deleteCount.' Document');
    }

    public function makeBlankTransaction()
    {
        return Pabean::make();
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = ! $this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) $this->editing = $this->makeBlankTransaction();

        $this->showEditModal = true;
    }

    public function edit(Pabean $pabean)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($pabean)) $this->editing = $pabean;

        $this->showEditModal = true;
    }

    public function save()
    {
        $this->validate();

        $no_aju = random_int(100000, 999999);

        $this->editing->fill([
            'user_id' => Auth::id(),
            'nomor_aju_pabean' => $no_aju,
            'status' => 'Draft',
        ]);

        $this->editing->save();

        return redirect()->route('edit-dokumen-pabean', $no_aju);
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = Pabean::query()
            ->when($this->filters['status'], fn($query, $status) => $query->where('status', $status))
            ->when($this->filters['kode-dokumen-pabean'], fn($query, $kode_dokumen_pabean) => $query->where('kode_dokumen_pabean', 'like', '%'.$kode_dokumen_pabean.'%'))
            ->when($this->filters['nomor-aju-pabean'], fn($query, $nomor_aju_pabean) => $query->where('nomor_aju_pabean', 'like', '%'.$nomor_aju_pabean.'%'));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        return view('livewire.dokumen-pabean', [
            'items' => $this->rows,
        ]);
    }
}
