<div class="w-full">
    <h2 class="px-6 py-4 font-semibold text-center">Suas turmas</h2>
    <table class="rounded m-5 w-5/6 mx-auto bg-gray-200">
        <tr class="text-left border-b-2 border-gray-300">
            <th class="px-4 py-3">Nome</th>
            <th class="px-4 py-3">
                <div class="flex items-end justify-end">
                    <span class="inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </span>
                </div>
            </th>
        </tr>

        @foreach (Auth::user()->grades as $grade)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3">{{ $grade->name }}</td>
                <td class="px-4 py-3">
                    <div class="flex items-end justify-end">
                        <span class="inline-flex">
                            <a href="{{ route('remove_grade', ['id' => $grade->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            </a>
                        </span>
                    </div>
                </td>
                </tr>
        @endforeach

    </table>
</div>