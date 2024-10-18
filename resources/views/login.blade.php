@extends('layouts.layout2')
@section('title', 'login')

@section('konten')
    <div class="min-h-screen flex items-center justify-center bg-[#2B4E31]">
        <div class="w-full max-w-sm p-6 bg-green-100 border border-green-300 rounded-lg shadow m-auto mt-20">
            <form class="space-y-6" action="/contact">
                <h5 class="text-xl font-medium text-gray-900">Login</h5> <!-- Changed text color -->
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Your email</label> <!-- Changed text color -->
                    <input 
                        class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="name@company.com" />
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Your password</label> <!-- Changed text color -->
                    <input 
                        class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                </div>
                <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input type="checkbox"
                                class="w-4 h-4 border border-green-300 rounded bg-green-50 focus:ring-3 focus:ring-green-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-green-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        </div>
                        <label class="ms-2 text-sm font-medium text-gray-900">Remember me</label> <!-- Changed text color -->
                    </div>
                    <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                </div>
                <button 
                    class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login to your account
                </button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Not registered? <a href="/register" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                </div>
            </form>
        </div>
    </div>
@endsection
