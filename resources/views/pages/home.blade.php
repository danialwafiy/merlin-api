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
        <div class="mt-1">You can get the token by making a <span class="bg-gray-600 rounded p-1 text-white text-xs">POST</span> request to: http://mmu.ddns.net/api/token with your <span class="font-semibold">email and password </span>credentials as parameters.</div>
        <div class="mt-1">For security reasons, <span class="text-red-500 font-semibold">DO NOT EXPOSE</span> your token to the public. After receiving the token, be sure to include it in your request headers:</div>
       <pre class="mt-1">{'Authorization': 'token'}</pre>
    </div>
    <div class="mb-8">
        <div class="text-3xl font-bold">API</div>
        <div class="mt-2 mb-4">Below is a list of the APIs available for the content team.</div>
        <div class="mt-4" id="playtime">
            <div class="italic bg-gray-900 text-white py-1 px-2 rounded"><span class=" font-semibold"'>PLAYTIME</span> - The total duration the user has been playing for a session.</div>
            <div class="md:px-10 px-0 mt-4">
                <div class="flex flex-wrap mb-8">
                    <div class="w-1/2 flex flex-col">                
                        <div class=" my-2"><span class=" font-semibold">CREATE : <span class="bg-gray-600 rounded p-1 text-white text-xs">POST</span> http://mmu.ddns.net/playtime</div>
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
                                    <td class="px-6 text-sm ">user_id</td>
                                    <td class="px-6 text-sm ">Integer</td>
                                    <td class="px-6 text-sm"><i class="lni lni-checkmark text-lg"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex-1 md:mt-0 mt-3">
                        <div class=" my-2"><span class=" font-semibold">SAMPLE RESPONSE :</span></div>
                        <pre>
{
    status: 'Successfull'
}
                        </pre>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    
@endsection