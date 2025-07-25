@props(['breadcrumbItems' => [], 'pageTitle'=>'Default Title', 'buttonUrl' => '#', 'buttonTitle' => 'New', 'buttonIcon' => 'ic:round-plus'])
<div class="flex items-center justify-between">
    {{--Breadcrumb title start--}}
    <h5 class="text-textColor font-Inter font-medium md:text-2xl mr-4 dark:text-white mb-1 sm:mb-0">
        {{ __($pageTitle) }}

        {{-- Create Button start--}}
        @if($buttonUrl != '#')
            <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" href="{{ url($buttonUrl) }}">
                <iconify-icon icon="{{ $buttonIcon }}" class="text-lg mr-1"></iconify-icon>
                {{ __($buttonTitle) }}
            </a>
        @endif
    </h5>

    {{--Breadcrumb list start--}}
    <ul class="m-0 p-0 list-none">
        {{--Home--}}
        @empty(!$breadcrumbItems)
        <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter">
            <a href="{{ route('admin.dashboard') }}" class="breadcrumbList">
                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
            </a>
        </li>
        @endempty

        @foreach($breadcrumbItems as $breadcrumbItem)
        @if($breadcrumbItem['active'])
        {{--Active--}}
        <li class="inline-block">
            <a href="{{ $breadcrumbItem['url'] }}" class="breadcrumbList breadcrumbActive dark:text-slate-300">
                {{ __($breadcrumbItem['name']) }}
            </a>
        </li>
        @else
        {{--Not active--}}
        <li class="inline-block relative text-sm text-primary-500 font-Inter">
            <a href="{{ $breadcrumbItem['url'] }}" class="breadcrumbList">
                {{ __($breadcrumbItem['name']) }}
                <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
            </a>
        </li>
        @endif
        @endforeach
    </ul>
</div>
