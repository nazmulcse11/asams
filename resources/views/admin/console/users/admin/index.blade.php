<x-app-layout>

    
    <div>
        <div class="card">
            <header class=" card-header noborder">
                <div class="justify-end flex gap-3 items-center flex-wrap">
                    <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" href="{{ route('admin.console.user.admin.create') }}">
                        <iconify-icon icon="ic:round-plus" class="text-lg mr-1">
                        </iconify-icon>
                        {{ __('Add New Admin') }}
                    </a>
                    <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2.5" href="">
                        <iconify-icon icon="mdi:refresh" class="text-xl "></iconify-icon>
                    </a>
                </div>
                <div class="justify-center flex flex-wrap sm:flex items-center lg:justify-end gap-3">
                    <div class="relative w-full sm:w-auto flex items-center">
                        <form id="searchForm" method="get" action="http://dashcode.local/users">
                            <input name="q" type="text" class="inputField pl-8 p-2 border border-slate-200 dark:border-slate-700 rounded-md dark:bg-slate-900" placeholder="Search" value="">
                        </form>
                        <iconify-icon class="absolute text-textColor left-2 dark:text-white" icon="quill:search-alt"></iconify-icon>
                    </div>
                </div>
            </header>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                <thead class="bg-slate-200 dark:bg-slate-700">
                                    <tr>
                                        <th scope="col" class="table-th ">Sl No</th>
                                        <th scope="col" class="table-th ">Name</th>
                                        <th scope="col" class="table-th ">Email</th>
                                        <th scope="col" class="table-th ">Phone</th>
                                        <th scope="col" class="table-th ">Member Since</th>
                                        <th scope="col" class="table-th w-20">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                @forelse($items as $item)
                                <tr>
                                    <td class="table-td">
                                        # {{ $loop->iteration }}
                                    </td>
                                    <td class="table-td">
                                        <div class="flex items-center">
                                            <div class="flex-none">
                                                <div class="w-8 h-8 rounded-[100%] ltr:mr-3 rtl:ml-3">
                                                    <img class="w-full h-full rounded-[100%] object-cover" src="{{ authAvatar($item->profile ?? $item->username) }}" alt="image">
                                                </div>
                                            </div>
                                            <div class="flex-1 text-start">
                                                <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                    {{ $item?->profile?->full_name ?? $item->username }}
                                                </h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table-td lowercase">
                                        {{ $item->email }}
                                    </td>
                                    <td class="table-td">
                                        {{ $item->phone ?? "N/A" }}
                                    </td>
                                    <td class="table-td lowercase">
                                        {{ str($item->created_at->diffForHumans())->lower()->toString() }}
                                    </td>
                                    <td class="table-td">
                                        <div class="flex space-x-3 rtl:space-x-reverse">

                                            <a class="action-btn" href="{{ route("admin.console.user.admin.show", $item->id ?? "") }}">
                                                <iconify-icon icon="heroicons:eye"></iconify-icon>
                                            </a>

                                            <a class="action-btn" href="{{ route("admin.console.user.admin.edit", $item->id ?? "") }}">
                                                <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                            </a>

                                            <form id="deleteForm2" method="POST" action="{{ route("admin.console.user.admin.destroy", $item->id ?? "") }}">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a class="action-btn cursor-pointer" onclick="sweetAlertDelete(event, 'deleteForm2')" type="submit">
                                                    <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <tr class="border border-slate-100 dark:border-slate-900 relative">
                                        <td class="table-cell text-center" colspan="5">
                                            <img src="{{ asset("images/result-not-found.svg") }}" alt="page not found" class="w-64 m-auto" />
                                            <h2 class="text-xl text-slate-700 mb-8 -mt-4">{{ __('No results found.') }}</h2>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
        <script>

        </script>
    @endpush

</x-app-layout>
