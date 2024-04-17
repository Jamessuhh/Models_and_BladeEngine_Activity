@include('header')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Book List</h1>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">ISBN</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Title</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Author</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Description</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $book->isbn }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $book->title }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $book->author }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $book->description }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $book->date_published }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('footer')
