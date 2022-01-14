<div>
    <h1 class="text-2xl font-semibold text-gray-900">Daftar Dokumen</h1></h1>
    	
    
    <div class="py-4 space-y-4">
            <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="header-tab" data-tabs-target="#header" type="button" role="tab" aria-controls="header" aria-selected="true">Header</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="entitas-tab" data-tabs-target="#entitas" type="button" role="tab" aria-controls="entitas" aria-selected="false">Entitas</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="dokumen-tab" data-tabs-target="#dokumen" type="button" role="tab" aria-controls="dokumen" aria-selected="false">Dokumen</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="pengangkut-tab" data-tabs-target="#pengangkut" type="button" role="tab" aria-controls="pengangkut" aria-selected="false">Pengangkut</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="kemasan-tab" data-tabs-target="#kemasan" type="button" role="tab" aria-controls="kemasan" aria-selected="false">Kemasan & Peti Kemas</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="transaksi-tab" data-tabs-target="#transaksi" type="button" role="tab" aria-controls="transaksi" aria-selected="false">Transaksi</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="barang-tab" data-tabs-target="#barang" type="button" role="tab" aria-controls="barang" aria-selected="false">Barang</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="pungut-tab" data-tabs-target="#pungut" type="button" role="tab" aria-controls="pungut" aria-selected="false">Pungut</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="header" role="tabpanel" aria-labelledby="header-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengajuan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Pengajuan</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Kantor Pabean<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Pelabuhan Tujuan</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Kantor Pabean</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Keterangan Lain<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Jenis PIB</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Jenis Impor</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Cara Bayar</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />
                                </div>
                            </div>
                        </div>                        
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="entitas" role="tabpanel" aria-labelledby="entitas-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Importir<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>


                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">API/NIB</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Status</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pemilik Barang<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Identitas" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nama Pemilik Barang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Alamat Pemilik Baran"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>NPWP Pemusatan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Identitas" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nama Pemilik Barang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Alamat Pemilik Barang"/>
                                </div>
                            </div>


                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengirim<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Identitas" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nama Pemilik Barang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Alamat Pemilik Barang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Negara</label>
                                    
                                    <x-input.select wire:model="" id="negara">
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
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Identitas" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nama Pemilik Barang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Alamat Pemilik Barang"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Negara</label>
                                    <x-input.select wire:model="" id="negara">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                </div>
                            </div>
                        </div>                        
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <h1 class="text-2xl font-semibold text-gray-900">Dokumen Lampiran</h1>

                        {{-- <div class="py-4 space-y-4">
                            <!-- Top Bar -->
                            <div class="flex justify-between">
                                <div class="w-2/4 flex space-x-4">
                                    <x-input.text wire:model="filters.cara" placeholder="Cari Cara Pengangkutan..." />
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
                                        <x-table.heading sortable multi-column wire:click="sortBy('cara')" :direction="$sorts['cara'] ?? null">Nama Cara Pengangkutan</x-table.heading>
                                        
                                        
                                        <x-table.heading />
                                    </x-slot>

                                    <x-slot name="body">
                                        @if ($selectPage)
                                        <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                                            <x-table.cell colspan="8">
                                                @unless ($selectAll)
                                                <div>
                                                    <span>Anda telah memilih <strong>{{ $items->count() }}</strong> data list Cara Pengangkutan, Apakah anda mau pilih semua data <strong>{{ $items->total() }}</strong>?</span>
                                                    <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                                </div>
                                                @else
                                                <span>Anda telah memilih <strong>{{ $items->total() }}</strong> data.</span>
                                                @endif
                                            </x-table.cell>
                                        </x-table.row>
                                        @endif

                                        @forelse ($items as $item)
                                        <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $item->id }}">
                                            <x-table.cell class="pr-0">
                                                <x-input.checkbox wire:model="selected" value="{{ $item->id }}" />
                                            </x-table.cell>



                                            <x-table.cell>
                                                <span class="text-cool-gray-900 font-medium">{{ $item->cara }} </span>
                                            </x-table.cell>

                                            <x-table.cell>
                                                <x-button.link wire:click="edit({{ $item->id }})">Edit</x-button.link>
                                            </x-table.cell>
                                        </x-table.row>
                                        @empty
                                        <x-table.row>
                                            <x-table.cell colspan="8">
                                                <div class="flex justify-center items-center space-x-2">
                                                    <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada list Cara Pengangkutan yang ditemukan...</span>
                                                </div>
                                            </x-table.cell>
                                        </x-table.row>
                                        @endforelse
                                    </x-slot>
                                </x-table>

                                <div>
                                    {{ $items->links() }}
                                </div>
                            </div>
                        </div> --}}

                        <!-- Delete Transactions Modal -->
                        {{-- <form wire:submit.prevent="deleteSelected">
                            <x-modal.confirmation wire:model.defer="showDeleteModal">
                                <x-slot name="title">Hapus List Cara Pengangkutan</x-slot>

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
                                <x-slot name="title">Edit List Cara Pengangkutan</x-slot>

                                <x-slot name="content">
                                    <x-input.group for="name" label="Nama Cara Pengangkutan" :error="$errors->first('editing.name')">
                                        <x-input.text wire:model="editing.name" id="title" placeholder="Nama Cara Pengangkutan" />
                                    </x-input.group>

                                </x-slot>

                                <x-slot name="footer">
                                    <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                                    <x-button.primary type="submit">Save</x-button.primary>
                                </x-slot>
                            </x-modal.dialog>
                        </form> --}}
                    </p>
                </div>


                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="pengangkutan" role="tabpanel" aria-labelledby="pengangkut-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>BC 1.1<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Tutup PU</label>
                                    <div class="grid grid-cols-3 gap-3">
                                        <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Kode Pos"/>
                                        <x-input.text wire:model="editing.nomor" id="nomor" placeholder="Nomor"/>
                                        <x-input.date wire:model="editing.nomor_aju_pabean" id="date"/>
                                    </div>
                                </div>

                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Pos</label>
                                    <div class="grid grid-cols-3 gap-3">
                                        <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Kode Pos"/>
                                        <x-input.text wire:model="editing.subpo" id="nomor" placeholder="Subpos"/>
                                        <x-input.date wire:model="editing.nomor_aju_pabean" id="date"/>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Pengangkutan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Cara Pengangkutan</label>

                                    <x-input.select wire:model="" id="negara">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\CaraPengangkutan::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->cara }}</option>
                                        @endforeach
                                    </x-input.select>


                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama Sarana Angkut</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nomor Voy/Flight</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder=""/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Bendera</label>
                                    <x-input.select wire:model="" id="negara">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\Country::get() as $country)
                                            <option value="{{ $country->id }}">{{ $country->code }} - {{ $country->name }}</option>
                                        @endforeach
                                    </x-input.select>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Perkiraan Tanggal Tiba</label>
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
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Kemasan</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="transaksi" role="tabpanel" aria-labelledby="transaksi-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>Harga<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Valuta</label>
                                    <x-input.select wire:model="" id="valuta">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\ListValuta::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">NDPBM</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Kode Pos"/>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Jenis Transaksi</label>
                                    <x-input.select wire:model="" id="jenis_transaksi">
                                        <option value="" selected>Belum Memilih</option>
                                        @foreach (App\Models\JenisTransaksi::get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                        @endforeach
                                    </x-input.select>
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Harga Barang</label>

                                    <div class="grid grid-cols-2 gap-2">
                                        <x-input.select wire:model="" id="valuta">
                                            <option value="" selected>Belum Memilih</option>
                                            @foreach (App\Models\ListKodeHarga::get() as $item)
                                                <option value="{{ $item->id }}">{{ $item->code }} - {{ $item->name }}</option>
                                            @endforeach
                                        </x-input.select>
                                        <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Harga"/>
                                    </div>

                                    
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nilai Pabean</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nilai Pabean"/>
                                    
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

                                    <div class="grid grid-cols-2 gap-2">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Asuransi</label>
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
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="barang" role="tabpanel" aria-labelledby="barang-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Barang</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="pungut" role="tabpanel" aria-labelledby="pungut-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Pungut</p>
                </div>
            </div>
    </div>
</div>

{{-- @push('livewireScripts')
    
@endpush --}}