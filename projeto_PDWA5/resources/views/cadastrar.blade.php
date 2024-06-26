<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Cadastre novo instrumento") }}
                    <br><br>
    <form method="post" action="/cadastrar">
        @csrf
        <!-- Instrumento -->
        <div>
            <x-input-label for="Nome" :value="__('Instrumento')" />
            <x-text-input id="Nome" class="block mt-1 w-full" type="text" name="Nome" :value="old('Nome')" required autofocus autocomplete="Nome" />
            <x-input-error :messages="$errors->get('Nome')" class="mt-2" />
        </div>

        <!-- Categoria -->
        <div class="mt-4">
            <x-input-label for="Categoria" :value="__('Categoria')" />
            <x-text-input id="Categoria" class="block mt-1 w-full" type="text" name="Categoria" :value="old('Categoria')" required autocomplete="Categoria" />
            <x-input-error :messages="$errors->get('Categoria')" class="mt-2" />
        </div>

        <!-- Material -->
        <div class="mt-4">
            <x-input-label for="Material" :value="__('Material')" />
            <x-text-input id="Material" class="block mt-1 w-full" type="text" name="Material" :value="old('Material')" required autocomplete="Material" />
            <x-input-error :messages="$errors->get('Material')" class="mt-2" />
        </div>

        <!-- Marca -->
        <div class="mt-4">
            <x-input-label for="Marca" :value="__('Marca')" />
            <x-text-input id="Marca" class="block mt-1 w-full" type="text" name="Marca" :value="old('Marca')" required autocomplete="Marca" />
            <x-input-error :messages="$errors->get('Marca')" class="mt-2" />
        </div>

        <!-- Data cadastro -->
        <div class="mt-4">
            <x-input-label for="Data_Cadastro" :value="__('Data Cadastro')" />
            <x-text-input id="Data_Cadastro" class="block mt-1 w-full" type="date" name="Data_Cadastro" :value="old('Data_Cadastro')" required autocomplete="Data_Cadastro" />
            <x-input-error :messages="$errors->get('Data_Cadastro')" class="mt-2" />
        </div>
        
        <div class="mt-4">
    <x-input-label for="Preco" :value="__('Preço')" />
    <x-text-input id="Preco" class="block mt-1 w-full" type="number" name="Preco" :value="old('Preco')" step="0.01" required autocomplete="Preco" />
    <x-input-error :messages="$errors->get('preco')" class="mt-2" />
</div>




        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
