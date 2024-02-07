<div class="fixed inset-0 z-50 flex items-center justify-center">
    <div class="fixed inset-0 bg-black opacity-10"></div>
    <div style="width: 320px;" class="z-50 flex items-center justify-center min-h-screen">
        @if ($isArray == true)
            <div class="flex flex-col items-center justify-center w-full p-8 bg-white rounded-lg">
                <img src="{{ asset('img/failed.svg') }}" class="justify-center mb-2" />
                <h2 class="mb-6 text-lg font-medium text-black">{{ isset($sessionError['title']) ? $sessionError['title'] : 'Something went wrong!' }}</h2>
                <div class="justify-center w-full pb-6 text-center border-b border-gray-200">
                    <p style="font-size: 16px;" class="font-normal">{{ isset($sessionError['body']) ? $sessionError['body'] : 'An error occurred' }}</p>
                </div>
                <div class="grid items-center justify-between gap-3 mt-6 sm:flex m:hidden grid-col-2">
                    @if (isset($sessionError['lang']))
                        @if ($sessionError['lang'] == 'javascript')
                            <span class="w-full px-4 py-3 text-white bg-red-600 rounded-lg cursor-pointer" onclick="{{ isset($sessionError['action']) ? $sessionError['action'] : 'errorClose()' }}">Try again.</span>
                        @elseif($sessionError['lang'] == 'php')
                            <span class="w-full px-4 py-3 text-white bg-red-600 rounded-lg cursor-pointer" onclick="errorClose()">Try again.</span>
                        @endif
                    @else
                        <span class="w-full px-4 py-3 text-white bg-red-600 rounded-lg cursor-pointer" onclick="errorClose()">Try again.</span>
                    @endif
                </div>
            </div>
        @elseif ($isArray == false)
            <div class="flex flex-col items-center justify-center w-full p-8 bg-white rounded-lg">
                <img src="{{ asset('img/failed.svg') }}" class="justify-center mb-2" />
                <h2 class="mb-6 text-lg font-medium text-black">Something went wrong!</h2>
                <div class="justify-center w-full pb-6 text-center border-b border-gray-200">
                    <p style="font-size: 16px;" class="font-normal">{{ session('error') }}</p>
                </div>
                <div class="grid items-center justify-between gap-3 mt-6 sm:flex m:hidden grid-col-2">
                    <span class="w-full px-4 py-3 text-white bg-red-600 rounded-lg cursor-pointer" onclick="errorClose()">Try again.</span>
                </div>
            </div>
        @endif
    </div>
</div>
<script>
    function errorClose() {
        document.getElementById('error').style.display = 'none';
    }
</script>
