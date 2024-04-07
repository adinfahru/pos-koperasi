<x-app-layout>
    <div class="p-12 mt-6 bg-white rounded-lg shadow-xs">

        <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Anggota</h2>
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input type="text" id="name" name="name" class="block w-full" value="{{ $user->name }}" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input name="email" type="email" class="block w-full" value="{{ $user->email }}" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                        
                    <div class="mt-2">
                        <label for="role" class="block text-sm leading-6 text-gray-900">Role</label>
                        <select id="role" name="role" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="user" @if($user->role == 'user') selected @endif>user</option>
                            <option value="admin" @if($user->role == 'admin') selected @endif>admin</option>
                            <option value="manager" @if($user->role == 'manager') selected @endif>manager</option>
                        </select>
                    </div>

                    <!-- <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input type="password" name="password" class="block w-full" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label id="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input type="password" name="password_confirmation" class="block w-full" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div> -->

                    <div class="mt-5 flex items-center justify-end gap-x-6">
                        <a href="{{route('users.index')}}"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-12 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
