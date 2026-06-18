@if (session('success'))
    <div class="w-full max-w-2xl mx-auto p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 text-center" role="alert">
        <span class="font-medium">{{ session('success') }}</span>
    </div>
@endif

@if (session('error'))
    <div class="w-full max-w-2xl mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 text-center" role="alert">
        <span class="font-medium">{{ session('error') }}</span>
    </div>
@endif

@if (session('warning'))
    <div class="w-full max-w-2xl mx-auto p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 text-center" role="alert">
        <span class="font-medium">{{ session('warning') }}</span>
        @if (session()->has('pending_delete_id'))
            <div class="mt-3 flex justify-center gap-2">
                <form method="POST" action="{{ route('student.confirm-delete', session('pending_delete_id')) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500">
                        Confirm Delete
                    </button>
                </form>
                <a href="{{ route('student.view') }}" class="inline-flex items-center px-3 py-1 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        @endif
    </div>
@endif

@if (session('info'))
    <div class="w-full max-w-2xl mx-auto p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 text-center" role="alert">
        <span class="font-medium">{{ session('info') }}</span>
    </div>
@endif

@if ($errors->any())
    <div class="w-full max-w-2xl mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 text-center" role="alert">
        <span class="font-medium">Please fix the following errors:</span>
        <ul class="mt-2 list-disc list-inside text-left inline-block">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
