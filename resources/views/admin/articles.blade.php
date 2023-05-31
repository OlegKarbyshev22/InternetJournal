<title>Статьи</title>
@include('admin.navigation-panel')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <h2 class="text-4xl font-extrabold text-center mb-5 dark:text-white">Статьи</h2>
        <a href="{{route('createArticle')}}">
            <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Добавить статью +</button>
        </a>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Название статьи
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Категория
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Изменить
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Удалить
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$article->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$article->title}}
                    </td>
                    <td class="px-6 py-4">
                        {{$article->category->category_name}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Изменить</a>
                    </td>

                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Удалить</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <div class="mt-5">{{ $articles->links('vendor.pagination.tailwind') }}</div>
    </div>
</div>
