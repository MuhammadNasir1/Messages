@include('layouts.header')
@include('layouts.nav')

<div class="mx-4 mt-12">
    <div>
        <h1 class=" font-semibold   text-2xl ">@lang('lang.Dashboard')</h1>
    </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6  mt-4">
        <div class="card-1 ">
            <div class="bg-white  border border-secondary rounded-[10px] py-8 px-8">
                <div class="flex gap-1 justify-between items-center">
                    <div>
                        <p class="text-sm text-[#808191]">Total Messages</p>
                        <h2 class="text-2xl font-semibold mt-1">
                            {{ $messagesData['totalMessages'] < 10 ? 0 . $messagesData['totalMessages'] : $messagesData['totalMessages'] }}
                        </h2>
                    </div>
                    <div>
                        <div
                            class="icon-bg h-[60px] w-[60px] bg-[#26056D] rounded-full  flex justify-center items-center">
                            <img src="{{ asset('./images/icons/sale.svg') }}" width="28" height="28"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-1 ">
            <div class="bg-white  border border-secondary rounded-[10px] py-8 px-8">
                <div class="flex gap-1 justify-between items-center">
                    <div>
                        <p class="text-sm text-[#808191]">Pending Messages</p>
                        <h2 class="text-2xl font-semibold mt-1">
                            {{ $messagesData['pendingMessages'] < 10 ? 0 . $messagesData['pendingMessages'] : $messagesData['pendingMessages'] }}
                        </h2>
                    </div>
                    <div>
                        <div
                            class="icon-bg h-[60px] w-[60px] bg-red-600 rounded-full  flex justify-center items-center">
                            <img src="{{ asset('./images/icons/sale.svg') }}" width="28" height="28"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-1 ">
            <div class="bg-white  border border-secondary rounded-[10px] py-8 px-8">
                <div class="flex gap-1 justify-between items-center">
                    <div>
                        <p class="text-sm text-[#808191]">Send Messages</p>
                        <h2 class="text-2xl font-semibold mt-1">
                            {{ $messagesData['sendMessages'] < 10 ? 0 . $messagesData['sendMessages'] : $messagesData['sendMessages'] }}
                        </h2>
                    </div>
                    <div>
                        <div
                            class="icon-bg h-[60px] w-[60px] bg-green-600 rounded-full  flex justify-center items-center">
                            <img src="{{ asset('./images/icons/sale.svg') }}" width="28" height="28"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

</div>



@include('layouts.footer')
