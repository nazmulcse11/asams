<x-app-layout>
    <div class="buyer-grid-wrapper">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-5 xl:gap-6">

            @foreach($items as $item)
            <div class="buyer sm:flex gap-4 rounded-xl overflow-hidden border border-slate-100 bg-white p-4 lg:p-6">
                <div class="thumb flex-[0_0_250px] min-h-[250px] bg-cover bg-center rounded-xl" style="background-image: url({{ $item->profile?->picture ?? avatar($item->username) }});"></div>
                <div class="info sm:flex-1 p-4">
                    <h2 class="text-2xl lg:text-3xl font-bold text-black-500">
                        <a href="{{ route('employee.buyer.request.show', $item->id) }}">
                            {{ $item?->profile?->full_name ?? $item->username }}
                        </a>
                    </h2>

                    <div class="bg-green-100 flex items-center justify-center gap-1 py-2 px-4 rounded-3xl text-green-600 my-5 font-medium text-sm">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 8.33325C0.5 3.93211 4.09886 0.333252 8.5 0.333252C9.73726 0.333252 10.912 0.618017 11.9609 1.12521C12.2095 1.24542 12.3136 1.54441 12.1934 1.79301C12.0732 2.04161 11.7742 2.14569 11.5256 2.02548C10.6087 1.58212 9.58239 1.33325 8.5 1.33325C4.65114 1.33325 1.5 4.48439 1.5 8.33325C1.5 12.1821 4.65114 15.3333 8.5 15.3333C12.3489 15.3333 15.5 12.1821 15.5 8.33325C15.5 7.81381 15.4427 7.30755 15.3342 6.82028C15.2742 6.55073 15.4441 6.28358 15.7136 6.22358C15.9832 6.16357 16.2503 6.33344 16.3103 6.60298C16.4345 7.16092 16.5 7.74004 16.5 8.33325C16.5 12.7344 12.9011 16.3333 8.5 16.3333C4.09886 16.3333 0.5 12.7344 0.5 8.33325Z" fill="#16A34A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3538 1.2922C16.549 1.48746 16.549 1.80404 16.3538 1.99931L7.43485 10.9182C7.23958 11.1135 6.923 11.1135 6.72774 10.9182L4.49801 8.68849C4.30275 8.49323 4.30275 8.17665 4.49801 7.98139C4.69327 7.78613 5.00985 7.78613 5.20512 7.98139L7.08129 9.85756L15.6467 1.2922C15.8419 1.09694 16.1585 1.09694 16.3538 1.2922Z" fill="#16A34A"/>
                        </svg>
                        Enrolled By : {{ getUserName($item) }}
                    </div>

                    <ul class="mt-4 space-y-2">
                        <li class="text-sm">
                            <label class="text-gray-500">Email :</label>
                            <span class="value inline-block font-bold text-black-500">
                                {{ $item->email ?? 'N/A' }}
                            </span>
                        </li>
                        <li class="text-sm">
                            <label class="text-gray-500">Phone :</label>
                            <span class="value inline-block font-bold text-black-500">
                                {{ $item->phone ?? 'N/A' }}
                            </span>
                        </li>
                        <li class="text-sm">
                            <label class="text-gray-500">Address :</label>
                            <span class="value inline-block font-bold text-black-500">
                                {{ $item->addresses?->first()->full_address ?? 'N/A' }}
                            </span>
                        </li>
                    </ul>

                    <div class="mt-5 flex justify-between gap-3 *:flex *:items-center *:justify-center *:gap-2 *:flex-1 *:rounded-lg *:px-6 *:py-3 *:transition-all">
                        <form action="{{ route('employee.buyer.request.reject', $item->id) }}" method="post">
                            @csrf
                            <button type="submit" class="bg-[#FFF0F1] text-themered hover:bg-themered hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.25C17.0875 21.25 21.25 17.0875 21.25 12C21.25 6.9125 17.0875 2.75 12 2.75C6.9125 2.75 2.75 6.9125 2.75 12C2.75 17.0875 6.9125 21.25 12 21.25Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 15L15 9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 15L9 9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Reject') }}
                            </button>
                        </form>
                        <form action="{{ route('employee.buyer.request.approve', $item->id) }}" method="post">
                            @csrf
                            <button type="submit" class="bg-themered text-white hover:bg-gunmetal">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3.66525C14.7878 3.07907 13.4304 2.75 12 2.75C6.9125 2.75 2.75 6.9125 2.75 12C2.75 17.0875 6.9125 21.25 12 21.25C17.0875 21.25 21.25 17.0875 21.25 12C21.25 11.3139 21.1743 10.6445 21.0308 10" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.5 11.998L10.25 14.748L21.25 3.74805" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Approve This Buyer') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
