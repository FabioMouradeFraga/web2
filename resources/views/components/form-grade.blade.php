<div class="w-full">
    <h2 class="px-6 pt-4 font-semibold text-center">Criar turma</h2>
        <form class="bg-white rounded px-6 pt-6 pb-8 mb-4" method="POST" action="{{ route('create_grade') }}">
        @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="name">
                    Nome:
                </label>
                <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Exemplo: Web"/>
            </div>
            <div class="flex items-center justify-between">
                <x-button>
                    Salvar
                </x-button>
            </div>
        </form>
</div>