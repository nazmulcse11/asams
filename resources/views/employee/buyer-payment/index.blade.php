<x-app-layout>
    <div>
        <div class=" mb-6">
            {{--Breadcrumb start--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->index->title"/>

        </div>

        {{--Alert start--}}
        @if (session('message'))
            <x-alert :message="session('message')" :type="'success'" />
        @endif
        {{--Alert end--}}


        <div class="card">
            <header class=" card-header noborder">
                <div class="justify-end flex gap-3 items-center flex-wrap">
                    {{-- Create Button start--}}
                    <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" href="{{ route($pageConfig->routes->create) }}">
                        <iconify-icon icon="{{ $pageConfig->index->create->icon }}" class="text-lg mr-1">
                        </iconify-icon>
                        {{ __($pageConfig->index->create->text) }}
                    </a>
                    {{--Refresh Button start--}}
                    <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2.5" href="{{ route($pageConfig->routes->index) }}">
                        <iconify-icon icon="mdi:refresh" class="text-xl "></iconify-icon>
                    </a>
                </div>
            </header>

            {{-- filter section--}}
            <div class="justify-end flex gap-3 items-center flex-wrap mb-4 mx-4">
                <div class="form-group">
                    <select name="buyer_fltr" id="buyer_fltr" class="form-control"></select>
                </div>
                <div class="form-group">
                    <select name="agent_unit_fltr" id="agent_unit_fltr" class="form-control"></select>
                </div>
                <x-date-range-picker id="fltr" />

                <div class="form-group">
                    <button type="submit" class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" id="filter_btn">
                        {{ __($pageConfig->index->filter->text) }}</button>
                </div>
            </div>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden px-4">
                            <table id="tbl_item" class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include( $pageConfig->view_root . ".scripts")
</x-app-layout>
