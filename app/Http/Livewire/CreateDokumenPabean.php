<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\HeaderDokumenPabean;
use App\Models\EntitasDokumenPabean;
use App\Models\DokumenPabean;
use App\Models\DokumenLain;
use App\Models\PengangkutDokumenPabean;
use App\Models\KemasanDokumenPabean;
use App\Models\PetiKemasDokumenPabean;
use App\Models\TransaksiDokumenPabean;
use App\Models\BarangDokumenPabean;
use App\Models\PungutanDokumenPabean;
use Illuminate\Http\Request;

use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;


class CreateDokumenPabean extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $showDeleteModal = false;
    public $showEditModal = false;
    public $showFilters = false;

    public $nomor_aju_pabean = '';

    public $getCurrentPage = 'header';
    
    public $filters = [
        'cara' => '',
    ];

    public HeaderDokumenPabean $header;
    public EntitasDokumenPabean $entitas;
    public DokumenPabean $dokumenpabean;
    public DokumenLain $dokumenlain;
    public PengangkutDokumenPabean $pengangkut;
    public KemasanDokumenPabean $kemasan;
    public PetiKemasDokumenPabean $petikemas;
    public TransaksiDokumenPabean $transaksi;
    public BarangDokumenPabean $barangdokumen;
    public PungutanDokumenPabean $pungutandokumen;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules() { return [
        'header.nomor_pengajuan_dokumen' => 'required',
        
        'header.pelabuhan_tujuan' => 'required',
        'header.kantor_pabean' => 'required',
        'header.asal_barang' => 'required',
        'header.jenis_pib' => 'required',
        'header.jenis_impor' => 'required',
        'header.cara_bayar' => 'required',
        
        'entitas.nomor_pengajuan_dokumen' => 'required',
        'entitas.npwp_importir' => 'required',
        'entitas.nama_importir' => 'required',
        'entitas.alamat_importir' => 'required',
        'entitas.API' => 'required',
        'entitas.NIB' => 'required',
        'entitas.status' => 'required',
        'entitas.npwp_pemilik' => 'required',
        'entitas.nama_pemilik' => 'required',
        'entitas.alamat_pemilik' => 'required',
        'entitas.npwp_terpusat' => 'required',
        'entitas.nama_terpusat' => 'required',
        'entitas.alamat_terpusat' => 'required',
        'entitas.nama_pengirim' => 'required',
        'entitas.alamat_pengirim' => 'required',
        'entitas.negara_pengirim' => 'required',
        'entitas.nama_penjual' => 'required',
        'entitas.alamat_penjual' => 'required',
        'entitas.negara_penjual' => 'required',


        'dokumenpabean.user_id' => 'required',
        'dokumenpabean.entitas' => 'required',
        'dokumenpabean.jenis_pemberitahun' => 'required',
        'dokumenpabean.asal_barang' => 'required',
        'dokumenpabean.tujuan_barang' => 'required',
        'dokumenpabean.nomor_dokumen_pabean' => 'required',
        'dokumenpabean.kode_dokumen_pabean' => 'required',
        'dokumenpabean.nomor_aju_pabean' => 'required',
        'dokumenpabean.nomor_pendaftaran' => 'required',
        'dokumenpabean.tanggal_pendaftaran' => 'required',
        'dokumenpabean.jalur' => 'required',
        'dokumenpabean.nama_perusahaan' => 'required',
        'dokumenpabean.kantor_pabean' => 'required',
        'dokumenpabean.status' => 'required',
        
        'dokumenlain.nomor_pengajuan_dokumen' => 'required',
        'dokumenlain.seri' => 'required',
        'dokumenlain.jenis_dokumen' => 'required',
        'dokumenlain.nomor_dokumen' => 'required',
        'dokumenlain.tanggal_dokumen' => 'required',

        
        'pengangkut.nomor_pengajuan_dokumen' => 'required',
        'pengangkut.kode_tutup_pu' => 'required',
        'pengangkut.nomor_tutup_pu' => 'required',
        'pengangkut.tanggal_tutup_pu' => 'required',
        'pengangkut.nomor_pos_1' => 'required',
        'pengangkut.nomor_pos_2' => 'required',
        'pengangkut.nomor_pos_3' => 'required',
        'pengangkut.cara_pengangkutan' => 'required',
        'pengangkut.sarana_angkut' => 'required',
        'pengangkut.nomor_voy_flight' => 'required',
        'pengangkut.bendera' => 'required',
        'pengangkut.tanggal_perkiraan' => 'required',
        'pengangkut.pelabuhan_muat' => 'required',
        'pengangkut.pelabuhan_transit' => 'required',
        'pengangkut.tempat_penimbunan' => 'required',

        'transaksi.valuta' => 'required',
        'transaksi.ndpbm' => 'required',

        'transaksi.jenis_transaksi' => 'required',
        'transaksi.kode_barang' => 'required',
        'transaksi.harga_barang' => 'required',
        'transaksi.nilai_pabean' => 'required',

            
        'transaksi.biaya_penambah' => 'required',
        'transaksi.biaya_pengurang' => 'required',
        'transaksi.voluntary_declaration' => 'required',

            
        'transaksi.berat_kotor' => 'required',
        'transaksi.berat_bersih' => 'required',


    ]; }

    public function mount($nomor_aju_pabean) {

        $item = DokumenPabean::where('nomor_aju_pabean', $nomor_aju_pabean)->first();
        
        $this->nomor_aju_pabean = $nomor_aju_pabean;


        $this->dokumenpabean = $item; 
        $this->header = HeaderDokumenPabean::make();
        $this->entitas = EntitasDokumenPabean::make();
        // $this->dokumenpabean = DokumenPabean::make();
        $this->dokumenlain = DokumenLain::make();
        $this->pengangkut = PengangkutDokumenPabean::make();
        // $this->kemasan = KemasanDokumenPabean::make();
        // $this->petikemas = PetiKemasDokumenPabean::make();
        // $this->transaksi = TransaksiDokumenPabean::make();
        // $this->barangdokumen = BarangDokumenPabean::make();
        // $this->pungutandokumen = PungutanDokumenPabean::make();
    
    }
    public function updatedFilters() { $this->resetPage(); }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'cara_pengangkutan.csv');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('Anda telah menghapus '.$deleteCount.' data.');
    }

    // public function makeBlankTransaction()
    // {
        
    //     return DokumenPabean::make();
    // }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = ! $this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->dokumenlain->getKey()) $this->dokumenlain = DokumenLain::make();

        $this->showEditModal = true;
    }

    public function edit(DokumenLain $dokumen)
    {
        $this->useCachedRows();

        if ($this->dokumenlain->isNot($dokumen)) $this->dokumenlain = $dokumen;

        $this->showEditModal = true;
    }

    public function save()
    {
        // dd($this->validate());
        // $this->validate();

        
        $this->dokumenlain->fill([
            'nomor_pengajuan_dokumen' => '822638',
        ]);
        
        

        $this->dokumenlain->save();
        
        

        $this->showEditModal = false;
    }

    public function resetFilters() { $this->reset('filters'); }

    public function getRowsQueryProperty()
    {
        $query = DokumenLain::query()
            ->when($this->filters['cara'], fn($query, $cara) => $query->where('cara', 'like', '%'.$cara.'%'));

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
        return view('livewire.create-dokumen-pabean', [
            'dokumens' => $this->rows,
        ]);
    }
}
