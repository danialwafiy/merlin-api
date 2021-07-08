@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <div class="text-3xl font-bold">MERLIN'S API</div>
        <div class="mt-2">This is a simplified documentation for the Merlin's content team to manage API for Merlin Online.</div>
    </div>
    <div class="mb-8">
        <div class="text-3xl font-bold">TOKEN</div>
        <div class="mt-1">A token is an alphanumeric code needed to access an API.</div>
        <div class="mt-1 font-semibold italic">How do I get the token ?</div>
        <div class="mt-1">You can get the token by making a <span class="bg-gray-600 rounded p-1 text-white text-xs">POST</span> request to: <b>http://mmu.ddns.net/api/token</b> with your <span class="font-semibold">email and password </span>credentials as parameters.</div>
        <div class="mt-1">For security reasons, <span class="text-red-500 font-semibold">DO NOT EXPOSE</span> your token to the public. After receiving the token, be sure to include it in your request headers:</div>
       <pre class="mt-1">{'Authorization': 'Bearer token'}</pre>
    </div>
    <div class="mb-8">
        <div class="text-3xl font-bold">API</div>
        <div class="mt-2 mb-4">Below is a list of the APIs available for the content team.</div>
        <div class="mt-4" id="json">
            <div class="italic bg-gray-900 text-white py-1 px-2 rounded"><span class=" font-semibold"'>JSON</span> - Manage JSON data.</div>
            <div class="md:px-10 px-0 mt-4">
                <div class="flex flex-wrap mb-8">
                    <div class="w-1/2 flex flex-col">                
                        <div class=" my-2"><span class=" font-semibold">RECEIVE: <span class="bg-gray-600 rounded p-1 text-white text-xs">GET</span> http://mmu.ddns.net/api/json</div>
                        <div class=" my-2"><span class=" font-semibold">PARAMETERS :</span></div>
                        <table class="border-2 border-gray-400 text-center w-1/2">
                            <thead class="border-2 border-gray-400">
                                <tr>
                                    <th class="px-6 ">#</th>
                                    <th class="px-6 text-sm ">Name</th>
                                    <th class="px-6 text-sm ">Type</th>
                                    <th class="px-6 text-sm">Required</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="border-2 border-gray-400">
                                    <td colspan="4">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex-1 md:mt-0 mt-3">
                        <div class=" my-2"><span class=" font-semibold">SAMPLE RESPONSE :</span></div>
                        <pre>
[
    {
        "id": 1,
        "json": "{"foo":"bar"}",
        "created_at": "2021-07-06 10:21:42",
        "updated_at": "2021-07-06 10:21:42"
    },
]
                        </pre>
                    </div>
                </div>
                <hr>
                <div class="flex flex-wrap my-8">
                    <div class="w-1/2 flex flex-col">                
                        <div class=" my-2"><span class=" font-semibold">CREATE: <span class="bg-gray-600 rounded p-1 text-white text-xs">POST</span> http://mmu.ddns.net/api/json</div>
                        <div class=" my-2"><span class=" font-semibold">PARAMETERS :</span></div>
                        <table class="border-2 border-gray-400 text-center w-1/2">
                            <thead class="border-2 border-gray-400">
                                <tr>
                                    <th class="px-6 ">#</th>
                                    <th class="px-6 text-sm ">Name</th>
                                    <th class="px-6 text-sm ">Type</th>
                                    <th class="px-6 text-sm">Required</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="border-2 border-gray-400">
                                    <td class="px-6 ">1</td>
                                    <td class="px-6 text-sm ">json</td>
                                    <td class="px-6 text-sm ">JSON</td>
                                    <td class="px-6 text-sm"><i class="lni lni-checkmark text-lg"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex-1 md:mt-0 mt-3">
                        <div class=" my-2"><span class=" font-semibold">SAMPLE RESPONSE :</span></div>
                        <pre>
{
    "status": "success",
    "data": {
        "id": 1,
        "json": "{\"foo\":\"bar\"}",
        "updated_at": "2021-07-08 18:49:25",
        "created_at": "2021-07-08 18:49:25",
    }
}
                        </pre>
                    </div>
                </div>
                <hr>
                <div class="flex flex-wrap my-8">
                    <div class="w-1/2 flex flex-col">                
                        <div class=" my-2"><span class=" font-semibold">UPDATE: <span class="bg-gray-600 rounded p-1 text-white text-xs">PUT/PATCH</span> http://mmu.ddns.net/api/json/{json_id}</div>
                        <div class=" my-2"><span class=" font-semibold">PARAMETERS :</span></div>
                        <table class="border-2 border-gray-400 text-center w-1/2">
                            <thead class="border-2 border-gray-400">
                                <tr>
                                    <th class="px-6 ">#</th>
                                    <th class="px-6 text-sm ">Name</th>
                                    <th class="px-6 text-sm ">Type</th>
                                    <th class="px-6 text-sm">Required</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="border-2 border-gray-400">
                                    <td class="px-6 ">1</td>
                                    <td class="px-6 text-sm ">json</td>
                                    <td class="px-6 text-sm ">JSON</td>
                                    <td class="px-6 text-sm"><i class="lni lni-checkmark text-lg"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex-1 md:mt-0 mt-3">
                        <div class=" my-2"><span class=" font-semibold">SAMPLE RESPONSE :</span></div>
                        <pre>
{
    "status": "success",
    "data": {
        "id": 1,
        "json": "{\"foo\":\"bar\"}",
        "updated_at": "2021-07-08 18:49:25",
        "created_at": "2021-07-08 18:49:25",
    }
}
 
                        </pre>
                    </div>
                </div>
                <hr>
                <div class="flex flex-wrap my-8">
                    <div class="w-1/2 flex flex-col">                
                        <div class=" my-2"><span class=" font-semibold">DELETE: <span class="bg-gray-600 rounded p-1 text-white text-xs">DELETE</span> http://mmu.ddns.net/api/json/{json_id}</div>
                        <div class=" my-2"><span class=" font-semibold">PARAMETERS :</span></div>
                        <table class="border-2 border-gray-400 text-center w-1/2">
                            <thead class="border-2 border-gray-400">
                                <tr>
                                    <th class="px-6 ">#</th>
                                    <th class="px-6 text-sm ">Name</th>
                                    <th class="px-6 text-sm ">Type</th>
                                    <th class="px-6 text-sm">Required</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="border-2 border-gray-400">
                                    <td colspan="4">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex-1 md:mt-0 mt-3">
                        <div class=" my-2"><span class=" font-semibold">SAMPLE RESPONSE :</span></div>
                        <pre>
{
    "status": "success"
}
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection