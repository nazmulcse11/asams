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
                    {{--Refresh Button start--}}
                    <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2.5" href="{{ route($pageConfig->routes->unverified) }}">
                        <iconify-icon icon="mdi:refresh" class="text-xl "></iconify-icon>
                    </a>
                </div>
            </header>

            {{-- filter section--}}
            <div class="justify-end flex gap-3 items-center flex-wrap mb-4 mx-4">
                <div class="input-area">
                    <select name="agent_unit" id="agent_unit_fltr" class="form-control"></select>
                </div>
                <div class="input-area">
                    <select name="status" id="status_fltr" class="form-control"></select>
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


    <!-- Modal Area Start -->
    <div id="verify_modal" tabindex="-1" aria-labelledby="verify_modal" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
        <div class="modal-dialog modal-md relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="relative w-full h-full max-w-xl md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                            <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                                {{ __($pageConfig->verify->modal->title) }}
                            </h3>
                            <button type="button" class="text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex
                                    items-center dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                <svg class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                            11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div id="modal-body">
                            <table id="modal-tbl" class="table w-full mx-4 my-4">
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <form id="verify_form">
                                @csrf
                                <div class="p-6 space-y-6">
                                    <div class="input-group">
                                        <label for="security_money" class="text-sm font-Inter font-normal text-slate-900 block">Security Money(in TK):</label>
                                        <input type="number" id="security_money" name="security_money" value="0" class="text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 focus:!outline-none focus:!ring-0 border
                                                !border-slate-400 rounded-md mt-2" placeholder="Type agent security money">
                                    </div>
                                    <div class="input-group">
                                        <label for="commission" class="text-sm font-Inter font-normal text-slate-900 block">Commission(in TK):</label>
                                        <input type="number" id="commission" name="commission" value="0" class="text-sm font-Inter font-normal text-slate-600 block w-full py-3 px-4 focus:!outline-none focus:!ring-0 border
                                                !border-slate-400 rounded-md mt-2" placeholder="Type agent commission">
                                    </div>

                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                    <button data-bs-dismiss="modal" type="button" class="btn inline-flex justify-center btn-outline-dark">Close</button>
                                    <button data-bs-dismiss="modal" type="submit" class="btn inline-flex justify-center text-white bg-black-500">
                                        {{ __($pageConfig->verify->modal->button) }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Area End -->

    @include( $pageConfig->view_root . ".unverified-scripts")
</x-app-layout>
