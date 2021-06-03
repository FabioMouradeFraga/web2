<div class="w-full">
    <h2 class="px-6 pt-4 font-semibold text-center">Registrar aluno</h2>
    <form class="bg-white rounded px-6 pt-6 pb-8 mb-4" method="POST" action="{{ route('register_student') }}">
    @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2 required-field" for="name">
                Nome:
            </label>
            <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Exemplo: Fábio Moura de Fraga"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="birth">
                Data de nascimento:
            </label>
            <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="birth" type="date" name="birth"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">
                E-mail:
            </label>
            <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Exemplo: fabio@email.com"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="address">
                Endereço:
            </label>
            <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="address" type="text" name="address" placeholder="Exemplo: Rua Lino nº 50"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="cpf">
                CPF:
            </label>
            <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="cpf" type="text" name="cpf" placeholder="Exemplo: 999.999.999-99" minlength="11" maxlength="14"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2 required-field" for="grade">
                Turma:
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" name="grade" id="grade">
            @foreach (Auth::user()->grades as $grade)
                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="flex items-center justify-between mt-5">
            <x-button>
                Salvar
            </x-button>
        </div>
    </form>
</div>