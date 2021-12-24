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
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="pengangkut-tab" data-tabs-target="#pengangkut" type="button" role="tab" aria-controls="pengangkut" aria-selected="false">Pengangkut</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="kemasan-tab" data-tabs-target="#kemasan" type="button" role="tab" aria-controls="kemasan" aria-selected="false">Kemasan & Peti Kemas</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="transaksi-tab" data-tabs-target="#transaksi" type="button" role="tab" aria-controls="transaksi" aria-selected="false">Transaksi</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="barang-tab" data-tabs-target="#barang" type="button" role="tab" aria-controls="barang" aria-selected="false">Barang</button>
                    </li>
                    <li role="presentation">
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
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow hover:shadow-md duration-4">
                                <div class="flex flex-row justify-between uppercase font-bold text-blue-dark border-b p-6">
                                    <p>NPWP Pemusatan<p>
                                    <div class="cursor-pointer text-grey-dark hover:text-blue duration-4"><i class="fas fa-ellipsis-v"></i></div>
                                </div>
                                <div class="p-6 text-grey-darker text-justify flex flex-col">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">Nomor Identitas</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan" />

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Nama</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>

                                    <label for="first-name" class="block text-sm font-medium text-gray-700 my-4">Alamat</label>
                                    <x-input.text wire:model="editing.nomor_aju_pabean" id="title" placeholder="Nomor Pengajuan"/>
                                </div>
                            </div>
                        </div>                        
                    </p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Dokumen</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="pengangkut" role="tabpanel" aria-labelledby="pengangkut-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Pengangkut</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="kemasan" role="tabpanel" aria-labelledby="kemasan-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Kemasan</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="transaksi" role="tabpanel" aria-labelledby="transaksi-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Transaksi</p>
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