<div>
    <h1 class="text-2xl font-semibold text-gray-900">Daftar Dokumen</h1></h1>
    	
    
    <div class="py-4 space-y-4">
            <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'header')" id="header-tab" data-tabs-target="#header" type="button" role="tab" aria-controls="header" aria-selected="true">Header</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'entitas')" id="entitas-tab" data-tabs-target="#entitas" type="button" role="tab" aria-controls="entitas" aria-selected="false">Entitas</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'dokumen')" id="dokumen-tab" data-tabs-target="#dokumen" type="button" role="tab" aria-controls="dokumen" aria-selected="false">Dokumen</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'pengangkut')" id="pengangkut-tab" data-tabs-target="#pengangkut" type="button" role="tab" aria-controls="pengangkut" aria-selected="false">Pengangkut</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'kemasan')" id="kemasan-tab" data-tabs-target="#kemasan" type="button" role="tab" aria-controls="kemasan" aria-selected="false">Kemasan & Peti Kemas</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'transaksi')" id="transaksi-tab" data-tabs-target="#transaksi" type="button" role="tab" aria-controls="transaksi" aria-selected="false">Transaksi</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'barang')" id="barang-tab" data-tabs-target="#barang" type="button" role="tab" aria-controls="barang" aria-selected="false">Barang</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" wire:click="$set('getCurrentPage', 'pungut')" id="pungut-tab" data-tabs-target="#pungut" type="button" role="tab" aria-controls="pungut" aria-selected="false">Pungut</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'header') hidden @endif" id="header" role="tabpanel" aria-labelledby="header-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengajuan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="nomor_aju_pabean" class="block text-sm font-medium text-gray-700 mb-4">Nomor Pengajuan</label>
                                    <x-input.text wire:model="dokumenpabean.nomor_aju_pabean" readonly id="nomor_aju_pabean" placeholder="Nomor Pengajuan" />
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Kantor Pabean<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="pelabuhan_tujuan" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Tujuan</label>
                                    <x-input.text wire:model="header.pelabuhan_tujuan" id="pelabuhan_tujuan" placeholder="Pelabuhan Tujuan" />

                                    <label for="kantor_pabean" class="block text-sm font-medium text-gray-700 my-4">Kantor Pabean</label>
                                    <x-input.text wire:model="header.kantor_pabean" id="kantor_pabean" placeholder="Kantor Pebean"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Keterangan Lain<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="jenis_pib" class="block text-sm font-medium text-gray-700 mb-4">Jenis PIB</label>
                                    <x-input.text wire:model="header.jenis_pib" id="jenis_pib" placeholder="Jenis PIB" />
                                    <label for="jenis_impor" class="block text-sm font-medium text-gray-700 my-4">Jenis Impor</label>
                                    <x-input.text wire:model="header.jenis_impor" id="jenis_impor" placeholder="Jenis Impor" />
                                    <label for="cara_bayar" class="block text-sm font-medium text-gray-700 my-4">Cara Bayar</label>
                                    <x-input.text wire:model="header.cara_bayar" id="cara_bayar" placeholder="Cara Bayar" />
                                </div>
                            </div>
                            <div class="col-span-3 mt-5 text-right">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Selanjutnya</button>
                            </div>
                        </div>                        
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'entitas') hidden @endif" id="entitas" role="tabpanel" aria-labelledby="entitas-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Importir<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="npwp_importir" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="entitas.npwp_importir" id="npwp_importir" placeholder="Nomor Identitas" />

                                    <label for="nama_importir" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_importir" id="nama_importir" placeholder="Nama"/>


                                    <label for="alamat_importir" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_importir" id="alamat_importir" placeholder="Alamat"/>

                                    <label for="NIB" class="block text-sm font-medium text-gray-700 my-4">API/NIB</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <x-input.select wire:model="entitas.negara_pengirim" id="negara">
                                            <option value="" selected>Belum Memilih</option>
                                            <option value="API P">API P</option>
                                            <option value="API U">API U</option>
                                        </x-input.select>

                                        <x-input.text wire:model="entitas.NIB" id="NIB" placeholder="API/NIB"/>
                                    </div>
                                    

                                    <label for="status" class="block text-sm font-medium text-gray-700 my-4">Status</label>
                                    <x-input.text wire:model="entitas.status" id="status" placeholder="Status"/>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pemilik Barang<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="npwp_pemilik" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="entitas.npwp_pemilik" id="npwp_pemilik" placeholder="Nomor Identitas" />

                                    <label for="nama_pemilik" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_pemilik" id="nama_pemilik" placeholder="Nama Pemilik Barang"/>

                                    <label for="alamat_pemilik" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_pemilik" id="alamat_pemilik" placeholder="Alamat Pemilik Barang"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>NPWP Pemusatan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="npwp_terpusat" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="entitas.npwp_terpusat" id="npwp_terpusat" placeholder="Nomor Identitas" />

                                    <label for="nama_terpusat" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_terpusat" id="nama_terpusat" placeholder="Nama"/>

                                    <label for="alamat_terpusat" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_terpusat" id="alamat_terpusat" placeholder="Alamat"/>
                                </div>
                            </div>


                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengirim<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nama_pengirim" id="nama_penjual" placeholder="Nama Pengirim"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.alamat_pengirim" id="title" placeholder="Alamat Pengirim"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Negara</label>
                                    
                                    <x-input.select wire:model="entitas.negara_pengirim" id="negara">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Penjual<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="entitas.nomor_aju_pabean" id="title" placeholder="Nama Penjual"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="entitas.nomor_aju_pabean" id="title" placeholder="Alamat Penjual"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Negara</label>
                                    <x-input.select wire:model="entitas.negara_penjual" id="negara">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                </div>
                            </div>

                            <div class="col-span-3 mt-5 text-right">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Selanjutnya</button>
                            </div>
                        </div>                        
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'dokumen') hidden @endif" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <h1 class="text-lg font-semibold text-gray-900">Dokumen Lampiran</h1>

                        <div class="py-4 space-y-4">
                            <!-- Top Bar -->
                            <div class="flex justify-between">
                                <div class="w-2/4 flex space-x-4">
                                    <x-input.text wire:model="filters.seri" placeholder="Cari Dokumen Lampiran..." />
                                </div>

                                <div class="space-x-2 flex items-center">
                                    <x-input.group borderless paddingless for="perPage" label="Halaman">
                                        <x-input.select wire:model="perPage" id="perPage">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-dropdown label="Aksi">
                                        <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                            <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                        </x-dropdown.item>

                                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                            <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                        </x-dropdown.item>
                                    </x-dropdown>

                                    <livewire:import-transactions />

                                    <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
                                </div>
                            </div>


                            <!-- Transactions Table -->
                            <div class="flex-col space-y-4">
                                <x-table>
                                    <x-slot name="head">
                                        <x-table.heading class="pr-0 w-8">
                                            <x-input.checkbox wire:model="selectPage" />
                                        </x-table.heading>

                                        <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Seri</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Jenis</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Nomor</x-table.heading>
                                        <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Tanggal</x-table.heading>

                                        <x-table.heading />
                                    </x-slot>

                                    <x-slot name="body">
                                        @if ($selectPage)
                                        <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                            <x-table.cell colspan="8">
                                                @unless ($selectAll)
                                                <div>
                                                    <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                </div>
                                                @else
                                                <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                @endif
                                            </x-table.cell>
                                        </x-table.row>
                                        @endif

                                        @forelse ($dokumens as $dokumen)
                                        <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                            <x-table.cell class="pr-0">
                                                <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                            </x-table.cell>
                                        </x-table.row>
                                        @empty
                                        <x-table.row>
                                            <x-table.cell colspan="8">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Dokumen Lampiran yang ditemukan...</span>
                                                </div>
                                            </x-table.cell>
                                        </x-table.row>
                                        @endforelse
                                    </x-slot>
                                </x-table>

                                <div>
                                    {{ $dokumens->links() }}
                                </div>
                            </div>
                        </div>

                        <!-- Delete Transactions Modal -->
                        <form wire:submit.prevent="deleteSelected">
                            <x-modal.confirmation wire:model.defer="showDeleteModal">
                                <x-slot name="title">Hapus List Dokumen Lampiran</x-slot>

                                <x-slot name="content">
                                    <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                                    <x-button.primary type="submit">Hapus</x-button.primary>
                                </x-slot>
                            </x-modal.confirmation>
                        </form>

                        <!-- Save Transaction Modal -->
                        <form wire:submit.prevent="save">
                            <x-modal.dialog wire:model.defer="showEditModal">
                                <x-slot name="title">Edit List Dokumen Lampiran</x-slot>

                                <x-slot name="content">
                                    <x-input.group for="seri" label="Seri" :error="$errors->first('dokumenlain.seri')">
                                        <x-input.text wire:model="dokumenlain.seri" id="seri" placeholder="Seri" />
                                    </x-input.group>

                                    <x-input.group for="jenis_dokumen" label="Jenis Dokumen" :error="$errors->first('dokumenlain.jenis_dokumen')">

                                        <x-input.select wire:model="dokumenlain.jenis_dokumen" id="jenis_dokumen-status">
                                            <option value="">Pilih Jenis Dokumen...</option>
                                            <option value="03001 - Izin Prinsip Pendirian Kawasan Berikat">03001 - Izin Prinsip Pendirian Kawasan Berikat</option>
                                            <option value="380- INVOICE">380- INVOICE</option>
                                        </x-input.select>
                                    </x-input.group>

                                    <x-input.group for="nomor_dokumen" label="Nomor Dokumen" :error="$errors->first('dokumenlain.nomor_dokumen')">
                                        <x-input.text wire:model="dokumenlain.nomor_dokumen" id="nomor_dokumen" placeholder="Nomor Dokumen" />
                                    </x-input.group>
                                    
                                    <x-input.group for="tanggal_dokumen" label="Tanggal Dokumen" :error="$errors->first('dokumenlain.tanggal_dokumen')">
                                        <x-input.date wire:model="dokumenlain.tanggal_dokumen" id="tanggal_dokumen" placeholder="Tanggal Dokumen" />
                                    </x-input.group>

                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                                    <x-button.primary type="submit">Save</x-button.primary>
                                </x-slot>
                            </x-modal.dialog>
                        </form>
                    </p>
                </div>


                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'pengangkut') hidden @endif" id="pengangkut" role="tabpanel" aria-labelledby="pengangkut-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>BC 1.1<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="kode_tutup_pu" class="block text-sm font-medium text-gray-700 mb-4">Nomor Tutup PU</label>
                                    <div class="grid grid-cols-3 gap-3">
                                        <x-input.text wire:model="pengangkut.kode_tutup_pu" id="kode_tutup_pu" placeholder="Kode Pos"/>
                                        <x-input.text wire:model="pengangkut.nomor_tutup_pu" id="nomor_tutup_pu" placeholder="Nomor"/>
                                        <x-input.date wire:model="pengangkut.tanggal_tutup_pu" id="tanggal_tutup_pu"/>
                                    </div>
                                </div>

                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="nomor_pos_1" class="block text-sm font-medium text-gray-700 mb-4">Nomor Pos</label>
                                    <div class="grid grid-cols-3 gap-3">
                                        <x-input.text wire:model="pengangkut.nomor_pos_1" id="nomor_pos_1" placeholder="Kode Pos"/>
                                        <x-input.text wire:model="pengangkut.nomor_pos_2" id="nomor_pos_2" placeholder="Subpos"/>
                                        <x-input.date wire:model="pengangkut.nomor_pos_3" id="nomor_pos_3" />
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengangkutan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="cara_pengangkutan" class="block text-sm font-medium text-gray-700 mb-4">Cara Pengangkutan</label>

                                    <x-input.select wire:model="pengangkut.cara_pengangkutan" id="cara_pengangkutan">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\CaraPengangkutan::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->cara }}</option>
                                        @endforeach
                                    </x-input.select>


                                    <label for="sarana_angkut" class="block text-sm font-medium text-gray-700 my-4">Nama Sarana Angkut</label>
                                    <x-input.text wire:model="pengangkut.sarana_angkut" id="sarana_angkut" placeholder=""/>

                                    <label for="nomor_voy_flight" class="block text-sm font-medium text-gray-700 my-4">Nomor Voy/Flight</label>
                                    <x-input.text wire:model="pengangkut.nomor_voy_flight" id="nomor_voy_flight" placeholder=""/>

                                    <label for="bendera" class="block text-sm font-medium text-gray-700 my-4">Bendera</label>
                                    <x-input.select wire:model="pengangkut.bendera" id="bendera">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>

                                    <label for="tanggal_perkiraan" class="block text-sm font-medium text-gray-700 my-4">Perkiraan Tanggal Tiba</label>
                                    <x-input.date wire:model="pengangkut.tanggal_perkiraan" id="tanggal_perkiraan"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pelabuhan & Tempat Penimbunan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="pelabuhan_muat" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Muat</label>
                                    <x-input.text wire:model="pengangkut.pelabuhan_muat" id="pelabuhan_muat" placeholder="Pelabuhan Muat"/>
                                    <label for="pelabuhan_transit" class="block text-sm font-medium text-gray-700 my-4">Pelabuhan Transit</label>
                                    <x-input.text wire:model="pengangkut.pelabuhan_transit" id="pelabuhan_transit" placeholder="Pelabuhan Transit"/>
                                    <label for="tempat_penimbunan" class="block text-sm font-medium text-gray-700 my-4">Tempat Penimbunan</label>
                                    <x-input.text wire:model="pengangkut.tempat_penimbunan" id="tempat_penimbunan" placeholder="Tempat Penimbunan"/>
                                </div>
                            </div>

                            <div class="col-span-3 mt-5 text-right">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Selanjutnya</button>
                            </div>
                        </div>                        
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'kemasan') hidden @endif" id="kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="wrap">
                                <h1 class="text-lg font-semibold text-gray-900">Kemasan</h1>

                                <div class="py-4 space-y-4">
                                    <!-- Top Bar -->
                                    <div class="flex justify-between">
                                        <div class="w-2/4 flex space-x-4">
                                            <x-input.text wire:model="filters.seri" placeholder="Cari Kemasan..." />
                                        </div>

                                        <div class="space-x-2 flex items-center">
                                            <x-input.group borderless paddingless for="perPage" label="Halaman">
                                                <x-input.select wire:model="perPage" id="perPage">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                </x-input.select>
                                            </x-input.group>

                                            <x-dropdown label="Aksi">
                                                <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                                    <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                                </x-dropdown.item>

                                                <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                                    <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                                </x-dropdown.item>
                                            </x-dropdown>

                                            <livewire:import-transactions />

                                            <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
                                        </div>
                                    </div>


                                    <!-- Transactions Table -->
                                    <div class="flex-col space-y-4">
                                        <x-table>
                                            <x-slot name="head">
                                                <x-table.heading class="pr-0 w-8">
                                                    <x-input.checkbox wire:model="selectPage" />
                                                </x-table.heading>

                                                <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Seri</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Jenis</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Nomor</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Tanggal</x-table.heading>

                                                <x-table.heading />
                                            </x-slot>

                                            <x-slot name="body">
                                                @if ($selectPage)
                                                <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                                    <x-table.cell colspan="8">
                                                        @unless ($selectAll)
                                                        <div>
                                                            <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                            <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                        </div>
                                                        @else
                                                        <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                        @endif
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endif

                                                @forelse ($dokumens as $dokumen)
                                                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                                    <x-table.cell class="pr-0">
                                                        <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @empty
                                                <x-table.row>
                                                    <x-table.cell colspan="8">
                                                        <div class="flex justify-center items-center space-x-2">
                                                            <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                            <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Kemasan yang ditemukan...</span>
                                                        </div>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endforelse
                                            </x-slot>
                                        </x-table>

                                        <div>
                                            {{ $dokumens->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap">
                                <h1 class="text-lg font-semibold text-gray-900">Peti Kemas</h1>

                                <div class="py-4 space-y-4">
                                    <!-- Top Bar -->
                                    <div class="flex justify-between">
                                        <div class="w-2/4 flex space-x-4">
                                            <x-input.text wire:model="filters.seri" placeholder="Cari Peti Kemas..." />
                                        </div>

                                        <div class="space-x-2 flex items-center">
                                            <x-input.group borderless paddingless for="perPage" label="Halaman">
                                                <x-input.select wire:model="perPage" id="perPage">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                </x-input.select>
                                            </x-input.group>

                                            <x-dropdown label="Aksi">
                                                <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                                                    <x-icon.download class="text-cool-gray-400"/> <span>Ekspor</span>
                                                </x-dropdown.item>

                                                <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                                                    <x-icon.trash class="text-cool-gray-400"/> <span>Hapus</span>
                                                </x-dropdown.item>
                                            </x-dropdown>

                                            <livewire:import-transactions />

                                            <x-button.primary wire:click="create"><x-icon.plus/> Baru</x-button.primary>
                                        </div>
                                    </div>


                                    <!-- Transactions Table -->
                                    <div class="flex-col space-y-4">
                                        <x-table>
                                            <x-slot name="head">
                                                <x-table.heading class="pr-0 w-8">
                                                    <x-input.checkbox wire:model="selectPage" />
                                                </x-table.heading>

                                                <x-table.heading sortable multi-column wire:click="sortBy('seri')" :direction="$sorts['seri'] ?? null">Seri</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('jenis_dokumen')" :direction="$sorts['jenis_dokumen'] ?? null">Jenis</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('nomor_dokumen')" :direction="$sorts['nomor_dokumen'] ?? null">Nomor</x-table.heading>
                                                <x-table.heading sortable multi-column wire:click="sortBy('tanggal_dokumen')" :direction="$sorts['tanggal_dokumen'] ?? null">Tanggal</x-table.heading>

                                                <x-table.heading />
                                            </x-slot>

                                            <x-slot name="body">
                                                @if ($selectPage)
                                                <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                                    <x-table.cell colspan="8">
                                                        @unless ($selectAll)
                                                        <div>
                                                            <span>Anda telah memilih <strong>{{ $dokumens->count() }}</strong> list Dokumen Lampiran, Apakah anda mau pilih semua data <strong>{{ $dokumens->total() }}</strong>?</span>
                                                            <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                        </div>
                                                        @else
                                                        <span>Anda telah memilih <strong>{{ $dokumens->total() }}</strong> data.</span>
                                                        @endif
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endif

                                                @forelse ($dokumens as $dokumen)
                                                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dokumen->id }}">
                                                    <x-table.cell class="pr-0">
                                                        <x-input.checkbox wire:model="selected" value="{{ $dokumen->id }}" />
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->seri }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->jenis_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->nomor_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <span class="text-cool-gray-900 font-medium">{{ $dokumen->tanggal_dokumen }} </span>
                                                    </x-table.cell>

                                                    <x-table.cell>
                                                        <x-button.link wire:click="edit({{ $dokumen->id }})">Edit</x-button.link>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @empty
                                                <x-table.row>
                                                    <x-table.cell colspan="8">
                                                        <div class="flex justify-center items-center space-x-2">
                                                            <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                            <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Peti Kemas yang ditemukan...</span>
                                                        </div>
                                                    </x-table.cell>
                                                </x-table.row>
                                                @endforelse
                                            </x-slot>
                                        </x-table>

                                        <div>
                                            {{ $dokumens->links() }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Transactions Modal -->
                                {{-- <form wire:submit.prevent="deleteSelected">
                                    <x-modal.confirmation wire:model.defer="showDeleteModal">
                                        <x-slot name="title">Hapus List Dokumen Lampiran</x-slot>

                                        <x-slot name="content">
                                            <div class="py-8 text-cool-gray-700">Apakah anda yakin? Data yang telah dihapus tidak dapat dikembalikan.</div>
                                        </x-slot>

                                        <x-slot name="footer">
                                            <x-button.secondary wire:click="$set('showDeleteModal', false)">Batal</x-button.secondary>

                                            <x-button.primary type="submit">Hapus</x-button.primary>
                                        </x-slot>
                                    </x-modal.confirmation>
                                </form> --}}

                                <!-- Save Transaction Modal -->
                                {{-- <form wire:submit.prevent="save">
                                    <x-modal.dialog wire:model.defer="showEditModal">
                                        <x-slot name="title">Edit List Dokumen Lampiran</x-slot>

                                        <x-slot name="content">
                                            <x-input.group for="seri" label="Seri" :error="$errors->first('dokumenlain.seri')">
                                                <x-input.text wire:model="dokumenlain.seri" id="seri" placeholder="Seri" />
                                            </x-input.group>

                                            <x-input.group for="jenis_dokumen" label="Jenis Dokumen" :error="$errors->first('dokumenlain.jenis_dokumen')">

                                                <x-input.select wire:model="dokumenlain.jenis_dokumen" id="jenis_dokumen-status">
                                                    <option value="">Pilih Jenis Dokumen...</option>
                                                    <option value="03001 - Izin Prinsip Pendirian Kawasan Berikat">03001 - Izin Prinsip Pendirian Kawasan Berikat</option>
                                                    <option value="380- INVOICE">380- INVOICE</option>
                                                </x-input.select>
                                            </x-input.group>

                                            <x-input.group for="nomor_dokumen" label="Nomor Dokumen" :error="$errors->first('dokumenlain.nomor_dokumen')">
                                                <x-input.text wire:model="dokumenlain.nomor_dokumen" id="nomor_dokumen" placeholder="Nomor Dokumen" />
                                            </x-input.group>
                                            
                                            <x-input.group for="tanggal_dokumen" label="Tanggal Dokumen" :error="$errors->first('dokumenlain.tanggal_dokumen')">
                                                <x-input.date wire:model="dokumenlain.tanggal_dokumen" id="tanggal_dokumen" placeholder="Tanggal Dokumen" />
                                            </x-input.group>

                                        </x-slot>

                                        <x-slot name="footer">
                                            <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                                            <x-button.primary type="submit">Save</x-button.primary>
                                        </x-slot>
                                    </x-modal.dialog>
                                </form> --}}
                                </div>
                            </div>
                        </div>
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'transaksi') hidden @endif" id="transaksi" role="tabpanel" aria-labelledby="transaksi-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Harga<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="valuta" class="block text-sm font-medium text-gray-700 mb-4">Valuta</label>
                                    <x-input.select wire:model="transaksi.valuta" id="valuta">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\ListValuta::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                    <label for="ndpbm" class="block text-sm font-medium text-gray-700 my-4">NDPBM</label>
                                    <x-input.text wire:model="transaksi.ndpbm" id="ndpbm" placeholder="NDPBM"/>
                                    <label for="jenis_transaksi" class="block text-sm font-medium text-gray-700 my-4">Jenis Transaksi</label>
                                    <x-input.select wire:model="transaksi.jenis_transaksi" id="jenis_transaksi">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\JenisTransaksi::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                    <label for="harga_barang" class="block text-sm font-medium text-gray-700 my-4">Harga Barang</label>

                                    <div class="grid grid-cols-2 gap-2">
                                        <x-input.select wire:model="transaksi.kode_barang" id="kode_barang">
                                            <option value="" selected>Belum Memilih</option>
                                            @foreach (App\Models\ListKodeHarga::get() as $item)
                                                <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                            @endforeach
                                        </x-input.select>
                                        <x-input.text wire:model="transaksi.harga_barang" id="harga_barang" placeholder="Harga"/>
                                    </div>

                                    
                                    <label for="nilai_pabean" class="block text-sm font-medium text-gray-700 my-4">Nilai Pabean</label>
                                    <x-input.text wire:model="transaksi.nilai_pabean" id="nilai_pabean" placeholder="Nilai Pabean"/>
                                    
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Harga Lainnya<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Biaya Penambah</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Biaya Penambah"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Biaya Pengurang</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Biaya Pengurang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Freight</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Asuransi</label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>
                                        <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>
                                    </div>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Voluntary Declaration</label>
                                    <x-input.date wire:model="editing.nomor_aju_pabean" id="date"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pelabuhan & Tempat Penimbunan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Muat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Pelabuhan Muat"/>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Pelabuhan Transit</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Pelabuhan Transit"/>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Pelabuhan Tujuan</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Pelabuhan Tujuan"/>
                                </div>
                            </div>
                        </div> 
                        <div class="col-span-3 mt-5 text-right">
                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Selanjutnya</button>
                            </div>
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'barang') hidden @endif" id="barang" role="tabpanel" aria-labelledby="barang-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Barang</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 @if ($getCurrentPage != 'pungut') hidden @endif" id="pungut" role="tabpanel" aria-labelledby="pungut-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Pungut</p>
                </div>
            </div>
    </div>
</div>

{{-- @push('livewireScripts')
    
@endpush --}}