<x-app-layout>
    <div class="flex justify-between flex-wrap items-center mb-4 xl:mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            <span class="icon w-16 h-16 bg-[#D1D8F4] rounded-full inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.29764 24.5987C8.80291 23.0441 10.9389 22.0835 13.2759 22.0835H26.7241C29.0611 22.0835 31.1971 23.0441 32.7024 24.5987C34.2006 26.146 35 28.1915 35 30.2779V33.7502C35 34.4405 34.3053 35.0002 33.4483 35.0002H6.55172C5.69473 35.0002 5 34.4405 5 33.7502V30.2779C5 28.1915 5.79945 26.146 7.29764 24.5987Z" fill="#8283DA"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.916 12.0833C12.916 8.17132 16.0873 5 19.9993 5C23.9114 5 27.0827 8.17132 27.0827 12.0833C27.0827 15.9953 23.9114 19.1667 19.9993 19.1667C16.0873 19.1667 12.916 15.9953 12.916 12.0833Z" fill="#8283DA"/>
                </svg>
            </span>
            {{ __('Employee') }}
        </h4>
        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            <a href="{{ route('admin.console.user.employee.create') }}" class="text-themered hover:bg-themered hover:text-white transition-all bg-[#FFF0F1] text-sm px-5 py-3 rounded-md font-semibold flex-1 inline-flex items-center justify-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:plus"></iconify-icon>
                New Employee
            </a>
        </div>
    </div>


    <div class="user_wrapper grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 xl:gap-6 items-start">
        @foreach($items as $item)
        <div class="item p-4 xl:p-6 rounded-2xl border border-slate-100 bg-white">
            <div class="thumbnail mb-6">
                <a href="{{ route('admin.console.user.employee.show', $item->id ?? '') }}">
                    @if (!empty($item->picture) && isset($item->picture[0]) )
                        <img src="{{ authAvatar($item->profile) }}"
                            class="rounded-full mx-auto w-full max-w-[400px]"
                            alt="{{ $item?->profile?->full_name ?? $item->username }}">
                    @else
                        <img src="{{ asset('images/avatar/av-1.svg') }}"
                            class="rounded-full mx-auto w-full max-w-[400px]"
                            alt="{{ $item?->profile?->full_name ?? $item->username }}">
                    @endif
                </a>

            </div>
            <h5 class="text-center font-semibold text-gunmetal text-2xl">
                {{ $item?->profile?->full_name ?? $item->username }}
            </h5>
            <p class="text-center my-2">
                <span class="inline-block px-4 py-2 rounded-2xl bg-slate-100 text-black-600 text-sm">
                    {{ __("Employee") }}
                </span>
            </p>

            <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle">
                <tbody>
                    <tr class="*:text-sm">
                        <td class="text-ash whitespace-nowrap">
                            {{ __("Employee ID :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->email ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr class="*:text-sm">
                        <td class="text-ash whitespace-nowrap">
                            {{ __("Email :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->email ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr class="*:text-sm">
                        <td class="text-ash whitespace-nowrap">
                            {{ __("Phone :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->phone ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr class="*:text-sm">
                        <td class="text-ash whitespace-nowrap">
                            {{ __("Address :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->addresses->first()->full_address ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr class="*:text-sm">
                        <td class="text-ash whitespace-nowrap">
                            {{ __("NID Number :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->profile?->nid ?? 'N/A' }}
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex gap-3 *:text-sm *:py-2.5 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                <a href="{{ route('admin.console.user.employee.show', $item->id ?? '') }}" class="border border-themered text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                    User Details
                </a>
                <a href="{{ route('admin.console.user.employee.edit', $item->id ?? '') }}" class="border border-gunmetal themered text-gunmetal bg-white hover:bg-gunmetal hover:text-white">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons:pencil-square"></iconify-icon>
                    Edit Employee
                </a>
            </div>
        </div>
        @endforeach
    </div>


    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    @endpush

</x-app-layout>
