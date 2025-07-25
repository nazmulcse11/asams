@php
    $prefix = currentGuardPrefix();
@endphp
{{--@dd(session("guard"))--}}
{{--@dd($prefix);--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="light nav-floating">

<head>
    <meta charset="utf-8">
    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <x-favicon />
    <title>{{ config('app.name', 'dashcode') }}</title>

    {{-- Scripts --}}
    @vite(['resources/css/app.scss', 'resources/js/custom/store.js'])

</head>


<body class="font-inter dashcode-app" id="body_class">
    <div class="app-wrapper">

        <!-- BEGIN: Sidebar Navigation -->
        <x-sidebar-menu :prefix="$prefix" />
        <!-- End: Sidebar -->

        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <!-- BEGIN: header -->
                <x-dashboard-header :prefix="$prefix" />
                <!-- BEGIN: header -->

                <div class="content-wrapper transition-all duration-150 ltr:ml-0 xl:ltr:ml-[320px] rtl:mr-0 xl:rtl:mr-[320px]" id="content_wrapper">
                    <div class="page-content">
                        <div class="transition-all duration-150 container-fluid" id="page_layout">
                            <main id="content_layout">
                                <!-- Page Content -->
                                {{ $slot }}
                            </main>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN: footer -->
            <x-dashboard-footer :prefix="$prefix" />
            <!-- BEGIN: footer -->

        </div>
    </div>

    @vite(['resources/js/app.js', 'resources/js/main.js'])

    <x-sweet-alert />

    @stack('modal')

    @if(in_array(getCurrentGuard(), ['admin', 'employee']))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById('property_selected').addEventListener('change', function(e){
                    const user_id = "{{ auth($prefix)->user()->id }}";
                    const property_id = e.target.value;
                    console.log("ids: ", user_id, property_id);
                    axios.post('{{ route("user-property-link") }}', {user_id, property_id})
                        .then(function (response) {
                            console.log("data", response.data);
                            if(response.data.success) {
                                window.location.reload();
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                });
            });
        </script>
    @endif

    @stack('scripts')
</body>

</html>
