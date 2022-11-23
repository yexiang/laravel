<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
Jetstream Livewire CRUD Example
</h2>
</x-slot>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
<ul>
@foreach($todos as $todo)
<li class="border mb-4 px-4 py-2">
<strong>{{ $todo->title }}</strong><br />
{{ $todo->description}}</li>
@endforeach
{{ $todos->links() }}
</ul>
</div>
</div>
</div>
