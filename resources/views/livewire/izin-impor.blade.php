<div>
    <h1 class="text-2xl font-semibold text-gray-900">Izin Impor</h1></h1>

    <div class="py-4 space-y-4">
        <!-- Top Bar -->
        <div class="flex justify-between">
            <div class="w-2/4 flex space-x-4">
                <x-input.text wire:model="filters.search" placeholder="Cari Nomor Izin Impor..." />

                <x-button.link wire:click="toggleShowFilters">@if ($showFilters) Sembunyikan @endif Pencarian Spesifik...</x-button.link>
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

        <!-- Advanced Search -->
        <div>
            @if ($showFilters)
            <div class="bg-cool-gray-200 p-4 rounded shadow-inner flex relative">
                <div class="w-1/2 pr-2 space-y-4">
                    <x-input.group inline for="filter-status" label="Status">
                        <x-input.select wire:model="filters.status" id="filter-status">
                            <option value="" disabled>Select Status...</option>

                            @foreach (App\Models\IzinImpor::STATUSES as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </x-input.select>
                    </x-input.group>

                    <x-input.group inline for="filter-pemberi-kuasa" label="Pemberi Kuasa">
                        <x-input.text wire:model.lazy="filters.pemberi-kuasa" id="filter-pemberi-kuasa" />
                    </x-input.group>

                    <x-input.group inline for="filter-penerima-kuasa" label="Penerima Kuasa">
                        <x-input.text wire:model.lazy="filters.penerima-kuasa" id="filter-penerima-kuasa" />
                    </x-input.group>
                </div>

                <div class="w-1/2 pl-2 space-y-4">
                    <x-input.group inline for="filter-date-min" label="Minimum Date">
                        <x-input.date wire:model="filters.date-min" id="filter-date-min" placeholder="MM/DD/YYYY" />
                    </x-input.group>

                    <x-input.group inline for="filter-date-max" label="Maximum Date">
                        <x-input.date wire:model="filters.date-max" id="filter-date-max" placeholder="MM/DD/YYYY" />
                    </x-input.group>

                    <x-button.link wire:click="resetFilters" class="absolute right-0 bottom-0 p-4">Reset Filters</x-button.link>
                </div>
            </div>
            @endif
        </div>

        <!-- Transactions Table -->
        <div class="flex-col space-y-4">
            <x-table>
                <x-slot name="head">
                    <x-table.heading class="pr-0 w-8">
                        <x-input.checkbox wire:model="selectPage" />
                    </x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('nomor_kuasa')" :direction="$sorts['nomor_kuasa'] ?? null">NO dan Tanggal Izin Impor</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('pemberi_kuasa')" :direction="$sorts['pemberi_kuasa'] ?? null">Perusahaan</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('awal_berlaku')" :direction="$sorts['awal_berlaku'] ?? null">MASA BERLAKU</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('status')" :direction="$sorts['status'] ?? null">Status</x-table.heading>
                    
                    <x-table.heading />
                </x-slot>

                <x-slot name="body">
                    @if ($selectPage)
                    <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                        <x-table.cell colspan="8">
                            @unless ($selectAll)
                            <div>
                                <span>Anda telah memilih <strong>{{ $izins->count() }}</strong> data surat kuasa, Apakah anda mau pilih semua data <strong>{{ $izins->total() }}</strong>?</span>
                                <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                            </div>
                            @else
                            <span>Anda telah memilih <strong>{{ $izins->total() }}</strong> data.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                    @endif

                    @forelse ($izins as $izin)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $izin->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $izin->id }}" />
                        </x-table.cell>

                        <x-table.cell>
                            <span href="#" class="truncate text-sm leading-5">
                                

                                <p class="inline-flex text-cool-gray-600 truncate">
                                    <x-icon.cash class="text-cool-gray-400"/> {{ $izin->nomor_kuasa }}
                                </p>
                                <p class="text-cool-gray-600 truncate pl-0">
                                    {{ $izin->tanggal_kuasa }}
                                </p>
                            </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $izin->pemberi_kuasa }} </span>
                        </x-table.cell>


                        <x-table.cell>
                            <span href="#" class="truncate text-sm leading-5">
                                <p class="inline-flex text-cool-gray-600 truncate">
                                    <x-icon.cash class="text-cool-gray-400"/>{{ $kuasa->nomor_kuasa }}
                                </p>
                                <p class="text-cool-gray-600 truncate">
                                    {{ $kuasa->tanggal_kuasa }}
                                </p>
                            </span>
                        </x-table.cell>


                        <x-table.cell>
                            <span class="text-cool-gray-900 font-medium">{{ $kuasa->penerima_kuasa }} </span>
                        </x-table.cell>


                        <x-table.cell>
                            <span href="#" class="text-sm leading-5">
                                <p class="text-cool-gray-600 truncate">
                                    {{ $kuasa->awal_berlaku }}
                                </p>
                                <p class="text-cool-gray-600 truncate">Sampai</p>
                                <p class="text-cool-gray-600 truncate">{{ $kuasa->akhir_berlaku }}</p>
                            </span>
                        </x-table.cell>

                        <x-table.cell>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-{{ $kuasa->status_color }}-100 text-{{ $kuasa->status_color }}-800 capitalize">
                                {{ $kuasa->status }}
                            </span>
                        </x-table.cell>

                        <x-table.cell>
                            <x-button.link wire:click="edit({{ $kuasa->id }})">Edit</x-button.link>
                        </x-table.cell>
                    </x-table.row>
                    @empty
                    <x-table.row>
                        <x-table.cell colspan="8">
                            <div class="flex justify-center items-center space-x-2">
                                <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                <span class="font-medium py-8 text-cool-gray-400 text-xl">Tidak ada izin impor yang ditemukan...</span>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                    @endforelse
                </x-slot>
            </x-table>

            <div>
                {{ $izins->links() }}
            </div>
        </div>
    </div>

    <!-- Delete Transactions Modal -->
    <form wire:submit.prevent="deleteSelected">
        <x-modal.confirmation wire:model.defer="showDeleteModal">
            <x-slot name="title">Hapus Surat Kuasa</x-slot>

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
            <x-slot name="title">Izin Impor</x-slot>

            <x-slot name="content">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Data Pemberi Kuasa
                </h3>

                <x-input.group for="npwp_perusahaan" label="NPWP Perusahaan" :error="$errors->first('editing.npwp_perusahaan')">
                    <x-input.text wire:model="editing.npwp_perusahaan" id="npwp_perusahaan" placeholder="NPWP Perusahaan" />
                </x-input.group>

                <x-input.group for="perusahaan" label="Nama Perusahaan" :borderless="true" :error="$errors->first('editing.perusahaan')">
                    <x-input.text wire:model="editing.perusahaan" id="perusahaan" placeholder="Nama Perusahaan" />
                </x-input.group>

                <x-input.group for="alamat_perusahaan" label="Alamat Perusahaan" :borderless="true" :error="$errors->first('editing.alamat_perusahaan')">
                    <x-input.text wire:model="editing.alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan" />
                </x-input.group>

                <x-input.group for="nomor_izin_bpk" label="Nomor Ijin BPK" :borderless="true" :error="$errors->first('editing.nomor_izin_bpk')">
                    <x-input.text wire:model="editing.nomor_izin_bpk" id="nomor_izin_bpk" placeholder="Nomor Ijin BPK" />
                </x-input.group>

                <x-input.group for="tanggal_izin" label="Tanggal Ijin BPK" :borderless="true" :error="$errors->first('editing.tanggal_izin')">
                    <x-input.date wire:model="editing.tanggal_izin" id="tanggal_ijin_bpk" />
                </x-input.group>

                <h3 class="text-xl pt-2 font-medium text-gray-900 dark:text-white">
                    Data Izin Pemasukan Barang BP Kawasan
                </h3>

                <x-input.group for="nomor_surat" label="Nomor Surat" :error="$errors->first('editing.nomor_surat')">
                    <x-input.text wire:model="editing.nomor_surat" id="nomor_surat" placeholder="Nomor Surat" />
                </x-input.group>

                <x-input.group for="tanggal_surat" label="Tanggal Surat" :borderless="true" :error="$errors->first('editing.tanggal_izin')">
                    <x-input.date wire:model="editing.tanggal_surat" id="tanggal_ijin_bpk" />
                </x-input.group>

                <x-input.group for="kantor_bc_ftz" label="Kantor BC FTZ" :error="$errors->first('editing.kantor_bc_ftz')">
                    <x-input.select wire:model="editing.kantor_bc_ftz" id="kantor_bc_ftz">
                            <option value="" disabled selected>Pilih Kantor BC</option>
                            <option value="DIREKTORAT IKC">DIREKTORAT IKC</option>
                            <option value="KPPBC TMP B TANJUNG BALAI KARIMUN">KPPBC TMP B TANJUNG BALAI KARIMUN</option>
                            <option value="KPU BEA DAN CUKAI TIPE B BATAM">KPU BEA DAN CUKAI TIPE B BATAM</option>
                            <option value="KPPBC TMP B TANJUNG PINANG">KPPBC TMP B TANJUNG PINANG</option>
                            <option value="KPPBC TMP C SABANG">KPPBC TMP C SABANG</option>
                    </x-input.select>
                </x-input.group>

                <x-input.group for="upload_dokumen" label="Upload Dokumen" :borderless="true" :error="$errors->first('editing.upload_dokumen')">
                    <x-input.file-upload wire:model="editing.upload_dokumen" id="upload_dokumen">
                    </x-input.file-upload>
                </x-input.group>

                <x-input.group for="awal_berlaku" label="Tanggal Awal" :borderless="true" :error="$errors->first('editing.awal_berlaku')">
                    <x-input.date wire:model="editing.awal_berlaku" id="tanggal_awal" />
                </x-input.group>

                <x-input.group for="akhir_berlaku" label="Tanggal Akhir" :borderless="true" :error="$errors->first('editing.akhir_berlaku')">
                    <x-input.date wire:model="editing.akhir_berlaku" id="akhir_berlaku" />
                </x-input.group>

                

            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>

                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
