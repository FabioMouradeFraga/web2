<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Seja bem-vindo! Aqui estão os seus alunos:
                </div>
                    <table class="table-auto">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Turma</th>
                        </tr>
                      </thead>
                    @foreach (Auth::user()->students as $students)
                      <tbody>
                        <tr>
                          <td class="px-2">{{ $students->name }}</td>
                          <td class="px-2">{{ $students->email }}</td>
                          <td class="px-2">{{ $students->grades->name }}</td>
                        </tr>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
