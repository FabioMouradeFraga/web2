<style>
    .required_field:after{
        content: '*';
        color: red;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seja bem-vindo!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="w-full">
                    <h2 class="px-6 pt-4 font-semibold text-center">Criar turma</h2>
                    <form class="bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4" method="POST" action="{{ route('create_grade') }}">
                        @csrf
                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="username">
                            Nome:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="username" type="text" name="name" placeholder="Exemplo: Web"/>
                        </div>
                        <div class="flex items-center justify-between">
                        <x-button>
                            Salvar
                        </x-button>
                        </div>
                    </form>
                </div>

                <div class="w-full">
                    <h2 class="px-6 pt-4 font-semibold text-center">Registrar aluno</h2>
                    <form class="bg-white shadow-md rounded px-6 pt-6 pb-8 mb-4" method="POST" action="{{ route('register_student') }}">
                        @csrf
                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="username">
                            Nome:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="username" type="text" name="name" placeholder="Exemplo: Fábio Moura de Fraga"/>
                        </div>
                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="username">
                            Data de nascimento:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="username" type="date" name="birth"/>
                        </div>
                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="username">
                            E-mail:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="username" type="email" name="email" placeholder="Exemplo: fabio@email.com"/>
                        </div>
                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="username">
                            Endereço:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="username" type="text" name="address" placeholder="Exemplo: Runa Lino nº 50"/>
                        </div>
                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" for="username">
                            CPF:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="username" type="text" name="cpf" placeholder="Exemplo: 999.999.999-99" minlength="11" maxlength="14"/>
                        </div>
                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="username">
                            Turma:
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" name="grade" id="grade">
                        @foreach (Auth::user()->grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                        </select>
                        </dir>
                        <div class="flex items-center justify-between mt-5">
                        <x-button>
                            Salvar
                        </x-button>
                        </div>
                    </form>
                </div>

                <div class="w-full">
                    <h2 class="px-6 py-4 font-semibold text-center">Seus alunos</h2>
                    <table class="rounded m-5 w-5/6 mx-auto bg-gray-200">
                        <tr class="text-left border-b-2 border-gray-300">
                            <th class="px-4 py-3">Nome</th>
                            <th class="px-4 py-3">E-mail</th>
                            <th class="px-4 py-3">Turma</th>
                        </tr>
                        @foreach (Auth::user()->students as $student)
                            @foreach (Auth::user()->grades as $grade)
                                @if ($student->grade_id == $grade->id)
                                    <tr class="bg-gray-100 border-b border-gray-200">
                                        <td class="px-4 py-3">{{ $student->name }}</td>
                                        <td class="px-4 py-3">{{ $student->email }}</td>
                                        <td class="px-4 py-3">{{ $student->grades->name }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
